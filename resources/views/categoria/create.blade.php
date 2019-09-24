<!DOCTYPE html>
<html lang="{{str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro Categoria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        
        <script src="{{url('/')}}/js/categoria.js" type="text/javascript"></script>

    </head>
    <body>
        <br/><a href="{{ url('/categoria') }}">Voltar</a><br/><br/>
        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
      <h3 style="width: 0%;padding: 10px; display: table; margin: auto">Cadastrar Categoria</h3>

      <form id="formAdd" onsubmit="return adicionarCategoria('{{route('categoria.store')}}');" action="" method="post"style="width: 0%;padding: 10px; display: table; margin: auto">
            @csrf <!--para evitar envio de formularios atraves de outras pessoas ao site-->
            
            <label for='nomcat'>Nome da categoria</label><br/>
            <input placeholder="digite..." type="text" name="nomcat" id="nomcat"/><br/><br/>
            <button type="submit"style="width: 50%;padding: 10px; display: table; margin: auto">Salvar</button>
           
        </form>
   
    </body>
</html>

