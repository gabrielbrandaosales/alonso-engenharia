@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col align-self-center">
                <div class="text-center">
                    <h1>Cadastro de Clientes</h1>
                </div>
                <form action=" {{route('cliente.store')}}" method="post">
                    @CSRF
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Razão Social</label>
                        <input type="name" name="nm_razao_social" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome Fantasia</label>
                        <input name="nm_fantasia" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CNPJ</label>
                        <input name="cd_cnpj" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                        <input name="ds_endereco" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="nm_email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                        <input type="tel" name="cd_telefone" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome Responsável</label>
                        <input name="nm_responsavel" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CPF</label>
                        <input name="cd_cpf" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Celular</label>
                        <input type="tel" name="cd_celular" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Salvar</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
    
    
</body>
</html>