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
</head>
<body>
    <form action="/atualizar-produto/{{$produto->id}}" method="POST">
        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome..." name="nome" value="{{ $produto->nome }}">
        </div>
        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" id="marca" placeholder="Digite a marca..." name="marca" value="{{ $produto->marca }}">
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="modelo" placeholder="Digite o modelo" name="modelo" value="{{ $produto->modelo }}">
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" rows="3" name="descricao">{{ $produto->descricao }}</textarea>
        </div>
        <div class="mb-3">
            <label for="preco" class="form-label">Preço</label>
            <input type="text" class="form-control" id="preco" placeholder="Digite o preço..." name="preco" value="{{ $produto->preco }}">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>
