<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use Illuminate\View\View;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto', function () {
    return view('produto');
});

Route::post('/cadastrar-produto', function (Request $data){
    $produto = Produto::create([
        'nome' => $data->input('nome'),
        'marca' => $data->input('marca'),
        'modelo' => $data->input('modelo'),
        'descricao' => $data->input('descricao'),
        'preco' => $data->input('preco'),
    ]);
    return response()->json($produto);
});

Route::get('/consultar-produto/{id}', function ($id){
    $produto = (Produto::findOrFail($id));

    return response()->json($produto);
});

Route::get('/consultar-produto', function () {
    $produtos = Produto::all();

    return response()->json($produtos);
});

Route::get('/editar-produto/{id}', function ($id){
    $produto = (Produto::findOrFail($id));
    return view('edit-produto', ['produto' => $produto]);
});

Route::put('/atualizar-produto/{id}', function (Request $data, $id) {
    $produto = (Produto::findOrFail($id));

    $produto->nome = $data->nome;
    $produto->marca = $data->marca;
    $produto->modelo = $data->modelo;
    $produto->descricao = $data->descricao;
    $produto->preco = $data->preco;
    $produto->save();

    echo 'Atualizado com sucesso!';
});


Route::get('/excluir-produto/{id}', function ($id) {
    $produto = (Produto::findOrFail($id));
    $produto->delete();
    echo "excluido com sucesso";
});

