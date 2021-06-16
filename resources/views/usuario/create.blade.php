
@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

    <div class="container">
        <div class="row">
            <div class="text-center">
                <h1>Cadastro de Usuário</h1>
            </div>
            <div class="col align-self-center">
                <form action=" {{route('usuario.store')}}" method="post">
                    @CSRF
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome</label>
                        <input name="name" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control" >
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Salvar</button>   
                    </div>
                </form>
            </div>
        </div>
    </div>
    @stop