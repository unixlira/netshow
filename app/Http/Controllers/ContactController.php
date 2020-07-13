<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\MailContato;
use App\Mail\MailDadosCadastrados;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function send(Request $request)
    {
        try{

            $validator = Validator::make($request->all(),
                [
                    'nome' => 'required',
                    'email' => 'required|unique:contact|regex:/(.+)@(.+)\.(.+)/i',
                    'telefone' => 'required|regex:/^\(\d{2}\) ?\d{4,5}-\d{4}$/',
                    'mensagem' => 'required',
                    'arquivo' => 'required|mimes:pdf,doc,docx,odt,txt|max:500'
                ]
            );

            if ($validator->fails())
                return redirect('/')->withErrors($validator)->withInput();

            if($request->file('arquivo')->isValid())
                $fileName = $request->file('arquivo')->getClientOriginalName();
                $request->file('arquivo')->storeAs('arquivos',$fileName);

            $contact = new Contact();
            $contact->nome = $request->nome;
            $contact->email = $request->email;
            $contact->telefone = cleanMask($request->telefone);
            $contact->mensagem = $request->mensagem;
            $contact->arquivo = 'arquivos/'.$fileName;
            $contact->ip = getIpClient();

            if($contact->save()){
                return redirect('mail/'.$contact->id);
            }else{
                return response()->json(['message'=>'Erro ao criar contato', 'data'=> $contact], 201);
            }


        }catch (\Exception $e){
            return response()->json(['message'=>'Ocorreu um erro no servidor'.$e->getMessage()], 500);
        }

    }

    public function received($id)
    {
        $contact = Contact::find($id);
        return view('received', compact('contact'));
    }

    public function mail($id)
    {
        $contact = Contact::find($id);
        Mail::to($contact->email)->send(new MailContato($contact));
        Mail::to(getenv('MAIL_FROM_ADDRESS'))->send(new MailDadosCadastrados($contact));
        return redirect('received/'.$contact->id);
    }
}
