@extends('layouts.master')

@section('title', 'Proposta')

@section('content')
    <p>INDEX Propostas</p>
    @foreach ($proposta as $proposta)
    <div class="card text-center">
        <div class="card-header">
          Obra número: {{$proposta->id}}
        </div>
        <div class="card-body">
          <h5 class="card-title">Endereço: {{$proposta->nm_endereco_obra}}</h5>
          <p class="card-text">Valor total: {{$proposta->qt_valor_total}}</p>
          <a href="{{ route('proposta.edit', $proposta->id) }}"><button type="button" class="btn btn-warning">Alterar</button></a>
        </div>
        <div class="card-footer text-muted">
          Situação: {{$proposta->nm_status}}
        </div>
      </div>
        
    @endforeach
@stop