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
      <div class="container col-4 card mt-1 shadow-lg p-3  bg-white rounded">
        <div class="form-group text-primary text-center">
          <h2>Formulário de Contato</h2>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        @endif
        <form action="/send" method="POST" enctype="multipart/form-data">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
                <label for="nome"><b>Nome</b></label>
                <input type="text" class="form-control" id="nome" name="nome" >
              </div>
            <div class="form-group">
              <label for="email"><b>Email</b></label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="telefone"><b>Telefone</b></label>
                <input type="text" class="form-control" id="telefone" name="telefone" >
              </div>
            <div class="form-group">
              <label for="mensagem"><b>Mensagem</b></label>
              <textarea class="form-control" id="mensagem" rows="3" name="mensagem"></textarea>
            </div>
            <div class="form-group">
              <label for="anexo"><b>Arquivo Anexo</b></label>
              <input type="file" class="form-control-file" id="arquivo" name="arquivo">
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Enviar</button>
          </form>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
