<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MusicShop</title>
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="#">Início</a></li>
            <li><a href="http://localhost:8000/produto">Produto</a></li>
            <li><a href="#">Sobre Nós</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
    </nav>
</header>

<section id = "home" class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light" _msttexthash="285103" _msthash="14">Music Shop</h1>
            <p class="lead text-body-secondary" _msttexthash="21445086" _msthash="15">Algo curto e importante sobre a coleção abaixo – seu conteúdo, o criador, etc. Torne-o curto e doce, mas não muito curto para que as pessoas não simplesmente pulem por cima dele.</p>
            <p>
                <a href="http://localhost:8000/produto" class="btn btn-primary my-2" _msttexthash="522860" _msthash="16">Cadastrar</a>
                <a href="#" class="btn btn-secondary my-2" _msttexthash="344032" _msthash="17">Relatório</a>
            </p>
        </div>
    </div>
</section>

<div class="album py-5 bg-body-tertiary">

    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 text-center" style="margin-bottom: 50px;>
                <label for="filtroGeral">Pesquisar:</label>
                <input type="text" id="filtroGeral" style="max-width: 500px;" class="form-control mx-auto" placeholder="Digite para pesquisar...">
            </div>
        </div>
    </div>


    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach($produtos as $produto)
                <div class="col card1">
                    <div id="card" class="card shadow-sm">
                        <img src="{{ Storage::url($produto->path) }}" alt="Imagem do Produto" width="100%" height="225">
                        <div class="card-body">
                            <h4 class="card-title">{{ $produto->nome }}</h4>
                            <p class="card-text">{{ $produto->descricao }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('excluir-produto', ['id' => $produto->id]) }}" onclick="confirmation(event)" data-id="{{ $produto->id }}" class="btn btn-sm btn-outline-secondary delete-product">Excluir</a>
                                    <a href="{{ route('editar-produto', ['produto' => $produto]) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                                </div>
                                <p id="preco" class="card-text">R$ {{ $produto->preco }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<footer>
    <p>&copy; 2023 Minha Loja de Instrumentos Musicais</p>
</footer>
</body>
</html>
