@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Cadastro de Propostas</h1>
            </div>
            <div class="col align-self-center">
                <form action=" {{route('proposta.store')}}" method="post">
                    @CSRF
                    <div class="mb-3">
                        <select name="cliente_id" class="form-select" aria-label="Default select example">
                            <option selected>Selecione um cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nm_fantasia}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Endereço da obra</label>
                        <input name="nm_endereco_obra" class="form-control" placeholder="Rua...">
                    </div>
                    <label class="form-label">Valor total da obra</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="number" name="qt_valor_total" class="form-control">
                    </div>
                    <label class="form-label">Valor de sinal</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="number" name="qt_sinal" class="form-control">
                    </div>
                    <label class="form-label">Quantidade de parcelas</label>
                    <div class="input-group mb-3">
                        <input type="number" name="qt_parcelas" class="form-control" min="0" max="12">
                        <span class="input-group-text">X</span>
                    </div>
                    <label class="form-label">Valor das parcelas</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">R$</span>
                        <input type="number" name="qt_valor_parcelas" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Data de início de pagamento</label>
                        <input type="date" name="dt_inicio_pgt" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <label for="exampleFormControlInput1" class="form-label">Data das parcelas</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text">Dia:</span>
                        <input type="numer" name="dt_parcelas" class="form-control" min="1" max="31">
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" name="nm_anexo">
                        <label class="input-group-text" for="inputGroupFile02">Anexo</label>
                      </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select name="nm_status" class="form-select" aria-label="Default select example">
                            <option value="Aberta">Aberta</option>
                            <option value="Fechada">Fechada</option>
                        </select>
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Salvar</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop