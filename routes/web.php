<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    $produtos = Produto::all();
    return View::make('welcome', compact('produtos'));
});

Route::get('/produto', function () {
    return view('produto');
});

Route::post('/cadastrar-produto', function (Request $data){
    $produto = Produto::create($data->only([
        'nome', 'marca', 'modelo', 'descricao', 'preco'
    ]));
    return response()->json($produto);
});

Route::get('/consultar-produto/{produto}', function (Produto $produto){
    return response()->json($produto);
});

Route::get('/consultar-produto', function () {
    $produtos = Produto::all();

    return response()->json($produtos);
});

Route::get('/editar-produto/{produto}', function (Produto $produto){
    return view('edit-produto', ['produto' => $produto]);
})->name('editar-produto');

Route::put('/atualizar-produto/{id}', function (Request $data, $id) {
    $produto = (Produto::findOrFail($id));

    $produto->update($data->only([
        'nome',
        'marca',
        'modelo',
        'descricao',
        'preco'
    ]));

    echo 'Atualizado com sucesso!';
});


Route::get('/excluir-produto/{id}', function ($id) {
    $produto = (Produto::findOrFail($id));
    $produto->delete();
    echo "excluido com sucesso";
})->name('excluir-produto');;


