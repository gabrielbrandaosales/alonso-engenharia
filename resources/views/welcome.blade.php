<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alonso Engenharia</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Início</a>
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
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Cadastro de Usuários</a>
        </li>
      </ul>
    </body>
</html>
