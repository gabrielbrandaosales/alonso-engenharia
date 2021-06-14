@extends('layouts.master')

@section('title', 'Clientes')

@section('content')
    <div class="text-center"><h1>INDEX Clientes</h1></div>
        
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Razão Social</th>
                <th scope="col">Nome Fantasia</th>
                <th scope="col">Endereço</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
            @foreach ($cliente as $cliente)
                <tr>
                    <th scope="row">{{$cliente->id}}</th>
                    <td>{{$cliente->nm_razao_social}}</td>
                    <td>{{$cliente->nm_fantasia}}</td>
                    <td>{{$cliente->ds_endereco}}</td>
                    <td>{{$cliente->nm_email}}</td>
                    <td><a href="{{ route('cliente.show', $cliente->id) }}"><button type="button" class="btn btn-success">Ver</button></a></td>
                    <td><a href="{{ route('cliente.edit', $cliente->id) }}"><button type="button" class="btn btn-warning">Editar</button></a></td>
                </tr>
            @endforeach
            </tr>
        </tbody>
    </table>
@stop
