<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col align-self-start">
                
            </div>
            
            <div class="col align-self-center">
                <p class="fs-3">Edição de Cliente</p>
                <form action=" {{route('cliente.update', $cliente->id)}}" method="post">
                    @CSRF
                    @METHOD('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Razão Social</label>
                        <input type="name" name="nm_razao_social" class="form-control" value="{{$cliente->nm_razao_social}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome Fantasia</label>
                        <input name="nm_fantasia" class="form-control" value="{{$cliente->nm_fantasia}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CNPJ</label>
                        <input name="cd_cnpj" class="form-control" value="{{$cliente->cd_cnpj}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                        <input name="ds_endereco" class="form-control" value="{{$cliente->ds_endereco}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" name="nm_email" class="form-control" value="{{$cliente->nm_email}}" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Telefone</label>
                        <input type="tel" name="cd_telefone" class="form-control" value="{{$cliente->cd_telefone}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Nome Responsável</label>
                        <input name="nm_responsavel" class="form-control" value="{{$cliente->nm_responsavel}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">CPF</label>
                        <input name="cd_cpf" class="form-control" value="{{$cliente->cd_cpf}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Celular</label>
                        <input type="tel" name="cd_celular" class="form-control" value="{{$cliente->cd_celular}}">
                    </div>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Salvar</button>   
                    </div>
                </form>
            </div>
            <div class="col align-self-end">
            One of three columns
            </div>
        </div>
    </div>
    
</body>
</html>