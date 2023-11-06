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

<body>
    <form action="/cadastrar-produto" method="POST">
        @csrf

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <label>Nome:</label>
        <input type="text" placeholder="Digite o nome..." name="nome">
        <br>
        <br>
        <label>Marca:</label>
        <input type="text" placeholder="Digite a marca..." name="marca">
        <br>
        <br>
        <label>modelo:</label>
        <input type="text" placeholder="Digite o modelo..." name="modelo">
        <br>
        <br>
        <label>descrição:</label>
        <input type="text" placeholder="Digite a descrição..." name="descricao">
        <br>
        <br>
        <label>preço:</label>
        <input type="text" placeholder="Digite o preço..." name="preco">
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</body>
</html>
