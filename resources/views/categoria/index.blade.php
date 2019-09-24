<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar/Listar Categoria</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        
        <script src="{{url('/')}}/js/categoria.js" type="text/javascript"></script>

    </head>
    <body>

        <script>



        </script>

        <br/><a href="{{ url('/') }}">Página Inicial</a><br/><br/>
        </br></br><a href="{{route('categoria.create')}}">Adicionar Categoria</a></br>

        </br>
        <button onclick="mostrarEsconderTitulo()">Mostrar/Esconder Título</button>

        </br>

        <h2 id="titulo" hidden>Listagem de categorias</h2>

        </br>


        <!-- Listagem de categorias -->   
        <table style="width: 40%;">
            <thead style="text-align: center">
                <tr>
                    <td style="background: #BEE9EA">Cód. </td>
                    <td style="background: #BEE9EA">Nome </td>
                    <td style="background: #BEE9EA">Ação </td>
                </tr> 
            </thead>
            <tbody>
                @foreach ($categorias as $c)
                <tr id="linha del{{$c->codcat}}">
                    <td style="background: #9ba2ab">{{$c->codcat}}</td>
                    <td style="background: #9ba2ab">{{$c->nomcat}}</td>
                    <td style="text-align: center; background: #9ba2ab;">

                        <button onclick="location.href ='{{route('categoria.edit', $c->codcat)}}'" style="font-size: 80%; width: 60%;" type="button">Editar</button></br>

                        <form onsubmit="return eliminarCategoria('del{{$c->codcat}}','{{route('categoria.destroy', $c->codcat)}}');" id="del{{$c->codcat}}" action="{{route('categoria.destroy', $c->codcat)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" style="font-size: 80%; width: 60%;">Excluir</button>

                        </form>
                    </td> 
                </tr>

                @endforeach
            </tbody>

        </table>

    </body>

</html>

