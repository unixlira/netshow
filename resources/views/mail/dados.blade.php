<!doctype html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>N</title>
    <meta name="viewport" content=" width=device-width, initial-scale=1.0"/>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .card {
        border: 1px solid #d8d8d8;
        margin:auto;
        text-align:center;
        border-radius:5px ;
        transition: 0.3s;
        width: 700px;
        }

        .card img{
        width:100%;
        background-color: #ffffff;
        }

        .container {
        padding: 2px 20px 20px;
        font-size:19px;
        text-align:center;
        font-weight: lighter;
        background-color: #ffffff;
        border-radius:5px;
        }

        .btn{
        background-color: blue;
        border: blue;
        border-radius:5px;
        padding: 15px 32px;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        }

        .ct{
        color: #ffffff;
        cursor: pointer;
        }

        .text-left{
        text-align: left;
        }

        .text-center{
        text-align: center !important;
        }

        .text-right{
        font-size:10px;
        text-align: right !important;
        }

        .bodyMail{
        padding-top: 50px;
        padding-bottom: 50px;
        width: 100%;
        margin-left: 0px;
        background-color: #f7f7f7;
        }

        .botao{
            font-family: 'Hind',Helvetica,Arial,Lucida,sans-serif;
            background-color: #ee3965;
            color: #FFF !important;
            padding: 10px 27px 10px 27px;
            width: 350px;
            text-decoration:none;
            margin-bottom: 8px;
        }

        .botaoSmall{
            font-family: 'Hind',Helvetica,Arial,Lucida,sans-serif;
            background-color: #ee3965;
            color: #FFF  !important;
            font-size: 11px;
            padding: 5px 20px 5px 20px;
            text-decoration:none;
            margin-top:8px;
        }

        @media only screen and (max-width: 720px) {
            .bodyMail {
            padding: 5px 30px 5px 30px;
            margin: auto;
            font-size: 11px;
            }
        }
    </style>
    </head>
    <body>
        <div class="bodyMail text-center">
            <a href="http://lira.digplay.tech/" class="btn botao"><b>DEV LIRA</b></a>
            <div class="card">
                    <div class="container text-left">
                        <h3>Dados Cadastrados no Formulário</h3>
                        <br />
                        <div class="text-left">
                            <p>
                                <strong>Nome: </strong> {{$nome}}<br />
                                <strong>Email: </strong> {{$email}}<br />
                                <strong>Telefone: </strong> {{createMask($telefone)}}<br />
                                <strong>Mensagem: </strong> {{$mensagem}}<br />
                                <strong>Arquivo: </strong> {{str_replace("/", "",strrchr($arquivo,"/"))}}<br />
                                <strong>IP: </strong> {{$ip}}<br />
                                <strong>Data: </strong> {{$created_at->format('d/m/Y')}}<br />
                                <strong>Hora: </strong> {{$created_at->format('H:i:s')}}<br />
                            </p>
                        </div>
                        <p>&nbsp;<p>
                        <div class="text-left">
                            <p>Atenciosamente, <br />
                                <strong> Equipe Dev Lira</strong>
                            </p>
                        </div>
                    </div>
                </div>
            <div class="text-center">
                <a href="http://lira.digplay.tech/"  class="btn  botaoSmall"><b>DEV LIRA</b></a>
                <p>Esta mensagem destina-se a  {{getenv('MAIL_FROM_ADDRESS')}}</p>
            </div>
        </div>
    </body>
</html>
