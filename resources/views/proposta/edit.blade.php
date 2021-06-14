<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de Propostas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col align-self-start">
                
            </div>
            
            <div class="col align-self-center">
                <p class="fs-3">Edição de Propostas</p>
                <form action=" {{route('proposta.update', $proposta->id)}}" method="post">
                    @CSRF
                    @METHOD('PUT')
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Razão Social</label>
                        <input type="name" name="nm_endereco_obra" class="form-control" value="{{$proposta->nm_endereco_obra}}">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status</label>
                            <select name="nm_status" class="form-select" aria-label="Default select example">
                                <option value="{{$proposta->nm_status}}" selected >{{$proposta->nm_status}}</option>
                                <option value="Aberta">Aberta</option>
                                <option value="Fechada">Fechada</option>
                            </select>
                        </div>
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