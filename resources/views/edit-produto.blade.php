<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
</head>
<body>
    <form action="/atualizar-produto/{{$produto->id}}" method="POST">
        @csrf
        @method("PUT")
        <label>Nome:</label>
        <input type="text" placeholder="Digite o nome..." name="nome" value="{{$produto->nome}}">
        <br>
        <br>
        <label>Marca:</label>
        <input type="text" placeholder="Digite a marca..." name="marca"value="{{$produto->marca}}">
        <br>
        <br>
        <label>modelo:</label>
        <input type="text" placeholder="Digite o modelo..." name="modelo" value="{{$produto->modelo}}">
        <br>
        <br>
        <label>descricao:</label>
        <input type="text" placeholder="Digite a descrição..." name="descricao" value="{{$produto->descricao}}">
        <br>
        <br>
        <label>preço:</label>
        <input type="text" placeholder="Digite o preço..." name="preco" value="{{$produto->preco}}">
        <br>
        <br>
        <button>Enviar</button>
    </form>
</body>
</html>
