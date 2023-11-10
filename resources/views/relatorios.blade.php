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
                    <?php
                    $imagePath = public_path(Storage::url($produto->path));
                    $imageData = base64_encode(file_get_contents($imagePath));
                    $imageBase64 = 'data:image/' . pathinfo($imagePath, PATHINFO_EXTENSION) . ';base64,' . $imageData;
                    ?>
                <img src="{{ $imageBase64 }}" alt="{{ $produto->nome }}">
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
