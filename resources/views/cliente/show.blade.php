@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <div class="text-center">
        <h1>Cliente: {{$cliente->nm_fantasia}}</h1>
    </div>
    
    <h2>Propostas:</h2>
    <table class="table">
        <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Endereço da Obra</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Anexo</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
              </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            @foreach ($propostas as $proposta)
                <tr>
                    <th scope='row'>{{$proposta->id}}</th>
                    <td>{{$proposta->nm_endereco_obra}}</td>
                    <td>{{$cliente->nm_fantasia}}</td>
                    <td>{{$proposta->nm_anexo}}</td>
                    <td>{{$proposta->nm_status}}</td>
                    <td><a href="{{ route('proposta.edit', $proposta->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                </tr>
            @endforeach
          </tr>
        </tbody>
    </table>
@stop