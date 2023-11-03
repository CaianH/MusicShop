<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link rel="stylesheet" href="{{ asset('css/cadProd.css') }}">

<body>
    <form action="/cadastrar-produto" method="POST">
        @csrf

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
        <button>Enviar</button>
    </form>
</body>
</html>
