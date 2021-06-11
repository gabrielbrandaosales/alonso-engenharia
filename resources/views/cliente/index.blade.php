<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <p>INDEX Clientes</p>
    @foreach ($cliente as $cliente)
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item">{{$cliente->nm_razao_social}}</li>
            <li class="list-group-item">{{$cliente->nm_fantasia}}</li>
            <li class="list-group-item">{{$cliente->ds_endereco}}</li>
            <li class="list-group-item"><a href="{{ route('cliente.edit', $cliente->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></li>
          </ul>
          
    @endforeach
</body>
</html>