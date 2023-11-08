<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link rel="stylesheet" href="{{ asset('css/cadProd.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../js/app.js"></script>

</head>
<body>
<h1 class="titulo">Cadastro de Produto</h1>
<a href="http://localhost:8000">
<img  class="btn-back" src="{{ asset('imagens/previous.png') }}" alt="Imagem">
</a>
<form action="/cadastrar-produto" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o nome..." name="nome">
                @if ($errors->has('nome'))
                    <div class="alert alert-danger">
                        {{ $errors->first('nome') }}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Marca</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite a marca..." name="marca">
                @if ($errors->has('marca'))
                    <div class="alert alert-danger">
                        {{ $errors->first('marca') }}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o modelo..." name="modelo">
                @if ($errors->has('modelo'))
                    <div class="alert alert-danger">
                        {{ $errors->first('modelo') }}
                    </div>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="imagem" class="form-label">Imagem do Produto</label>
                <input type="file" class="form-control" id="imagem" name="imagem">
                @if ($errors->has('imagem'))
                    <div class="alert alert-danger">
                        {{ $errors->first('imagem') }}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao" placeholder="digite a descrição..."></textarea>
                @if ($errors->has('descricao'))
                    <div class="alert alert-danger">
                        {{ $errors->first('descricao') }}
                    </div>
                @endif
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Preço</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o preço..." name="preco">
                @if ($errors->has('preco'))
                    <div class="alert alert-danger">
                        {{ $errors->first('preco') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</body>
</html>
