<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Alonso Engenharia - @yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('usuario.index')}} "> Inicio </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('cliente.create')}} ">Cadastro de Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('cliente.index')}} ">Listar/Editar Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('proposta.create')}} ">Nova proposta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('proposta.index')}} ">Lista de propostas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('usuario.create')}} "> Cadastro de Usuários</a>
            </li>
        </ul>

        @section('sidebar')
            
        @stop

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>