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

<body>
    <form action="/cadastrar-produto" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o nome..." name="nome">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Marca</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite a marca..." name="marca">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o modelo" name="modelo">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Preço</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o preço..." name="preco">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>
