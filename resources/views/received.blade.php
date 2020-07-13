<!doctype html>
<html lang="pt-BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/estilo.css') }}" />
    <!-- jQuery js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/telefoneMask.js') }}"></script>
    <title>Contato NetShow by Lira</title>
  </head>
  <body>
    @if (is_null($contact))
        <div class="container col-10 card mt-1 shadow-lg p-3 mt-5 bg-white rounded">
            <div class="form-group text-danger text-center">
                <h1>Usuário não Encontrado!</h1>
                <h3>404</h3>
            </div>
        </div>
    @else
      <div class="container col-12 card mt-1 shadow-lg p-3 mt-5 bg-white rounded">
        <div class="form-group text-primary text-center">
          <h2>Contato Cadastrado Com Sucesso!</h2>
          <h4 class="text-warning">Um Email Resposta foi enviado para o e-mail cadastrado.</h4>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Mensagem</th>
                <th scope="col">Arquivo</th>
                <th scope="col">IP</th>
                <th scope="col">Data</th>
                <th scope="col">Hora</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->nome}}</td>
                <td>{{$contact->email}}</td>
                <td id="telefone">{{$contact->telefone}}</td>
                <td>{{$contact->mensagem}}</td>
                <td>{{$contact->arquivo}}</td>
                <td>{{$contact->ip}}</td>
                <td>{{$contact->created_at->format('d/m/Y')}}</td>
                <td>{{$contact->created_at->format('H:i:s')}}</td>
              </tr>
            </tbody>
          </table>

          <div class="text-center">
              <a href="/" class="btn btn-dark ">Ir para Home de Contato</a>
          </div>
      </div>
    @endif
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
