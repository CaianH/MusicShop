<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="{{ asset('css/cadProd.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<h1 class="titulo">Cadastro de Produto</h1>
<a href="http://localhost:8000">
    <img  class="btn-back" src="{{ asset('imagens/previous.png') }}" alt="Imagem">
</a>
    <form action="/atualizar-produto/{{$produto->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")

        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o nome..." name="nome" value="{{ $produto->nome }}">
                    @if ($errors->has('nome'))
                        <div class="alert alert-danger">
                            {{ $errors->first('nome') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Marca</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite a marca..." name="marca" value="{{ $produto->marca }}">
                    @if ($errors->has('marca'))
                        <div class="alert alert-danger">
                            {{ $errors->first('marca') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o modelo..." name="modelo" value="{{ $produto->modelo }}">
                    @if ($errors->has('modelo'))
                        <div class="alert alert-danger">
                            {{ $errors->first('modelo') }}
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="element-img">
                    <div class="mb-3">
                        <label for="imagem" class="form-label">Imagem do Produto</label>
                        <input type="file" class="form-control" id="imagem" name="imagem">
                        @if ($errors->has('imagem'))
                            <div class="alert alert-danger">
                                {{ $errors->first('imagem') }}
                            </div>
                        @endif
                    </div>
                    <img id="imagem-preview" src="{{ $produto->path ?  Storage::url($produto->path) : asset('imagens/insert-picture-icon.png') }}" alt="Prévia da imagem">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="descricao" placeholder="digite a descrição...">{{ $produto->descricao }}</textarea>
                    @if ($errors->has('descricao'))
                        <div class="alert alert-danger">
                            {{ $errors->first('descricao') }}
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Preço</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="digite o preço..." name="preco" value="{{ $produto->preco }}">
                    @if ($errors->has('preco'))
                        <div class="alert alert-danger">
                            {{ $errors->first('preco') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </form>
    @if(Session::has('message'))
        <script>
            swal("Finalizado","{{Session::get('message')}}",'success',{
                button:true,
                button:"OK",
                timer:5000,
            });
        </script>
    @endif

</body>
</html>
