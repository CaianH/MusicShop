<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Produtos</title>
    <style>
        /* Adicione estilos de CSS personalizados aqui */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
        }
        .product {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            display: inline-block;
            width: 45%;
        }
        .product img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Catálogo de Produtos</h1>

    @foreach ($produtos as $produto)
        <div class="product">
            @if ($produto->path)
                <img src="{{ Storage::url($produto->path) }}" alt="{{ $produto->nome }}">
            @else
                <p>Imagem não disponível</p>
            @endif
            <h2>{{ $produto->nome }}</h2>
            <p>Marca: {{ $produto->marca }}</p>
            <p>Modelo: {{ $produto->modelo }}</p>
            <p>Descrição: {{ $produto->descricao }}</p>
            <p>Preço: R$ {{ number_format($produto->preco, 2) }}</p>
        </div>
    @endforeach
</div>
</body>
</html>
