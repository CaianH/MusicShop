<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use Illuminate\Support\Facades\View;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/', function () {
    $produtos = Produto::all();
    return View::make('welcome', compact('produtos'));
});

Route::get('/produto', function () {
    return view('produto');
});
Route::get('/relatorios', function () {
    $produtos = Produto::all();
    $pdf = Pdf::loadView('relatorios',compact('produtos'));
    return $pdf->stream('invoice.pdf');
});

Route::post('/cadastrar-produto', function (Request $request){
    // Defina regras de validação para cada campo
    $regras = [
        'nome' => 'required|string|max:255', // Exemplo: Campo obrigatório, string, máximo de 255 caracteres
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'descricao' => 'required|string',
        'preco' => 'required|numeric',
        'imagem' => 'image|mimes:jpeg,png,gif|max:2048', // Exemplo: Campo obrigatório, imagem, tipos permitidos: jpeg, png, gif, máximo de 2MB
    ];

    // Mensagens personalizadas para as validações
    $mensagens = [
        'required' => 'O campo :attribute é obrigatório.',
        'string' => 'O campo :attribute deve ser uma string.',
        'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
        'numeric' => 'O campo :attribute deve ser um número.',
        'image' => 'O campo :attribute deve ser uma imagem.',
        'mimes' => 'O campo :attribute deve ser do tipo :values.',
        'max' => 'O tamanho máximo do arquivo :attribute é :max kilobytes.',
    ];

    $data = $request->all();

    // Valide os dados do formulário, incluindo a imagem (verifique o tamanho, tipo, etc.).

    if ($request->hasFile('imagem')) {
        $imagemPath = $request->file('imagem')->store('public/imagens/produtos');
    } else {
        $imagemPath = null; // Nenhuma imagem fornecida.
    }

    $request->validate($regras, $mensagens);

    $produto = Produto::create([
        'nome' => $data['nome'],
        'marca' => $data['marca'],
        'modelo' => $data['modelo'],
        'descricao' => $data['descricao'],
        'preco' => $data['preco'],
        'path' => $imagemPath,
    ]);

    return back()->with('message','cadastrado com sucesso!');
    //return view('produto')->with('success', true);
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

Route::put('/atualizar-produto/{id}', function (Request $request, $id) {
    // Defina regras de validação para cada campo, semelhante ao que você fez na rota de criação
    $regras = [
        'nome' => 'required|string|max:255',
        'marca' => 'required|string|max:255',
        'modelo' => 'required|string|max:255',
        'descricao' => 'required|string',
        'preco' => 'required|numeric',
        'imagem' => 'image|mimes:jpeg,png,gif|max:2048',
    ];

    // Mensagens personalizadas para as validações, semelhante ao que você fez na rota de criação
    $mensagens = [
        'required' => 'O campo :attribute é obrigatório.',
        'string' => 'O campo :attribute deve ser uma string.',
        'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
        'numeric' => 'O campo :attribute deve ser um número.',
        'image' => 'O campo :attribute deve ser uma imagem.',
        'mimes' => 'O campo :attribute deve ser do tipo :values.',
        'max' => 'O tamanho máximo do arquivo :attribute é :max kilobytes.',
    ];

    $data = $request->all();

    if ($request->hasFile('imagem')) {
        $imagemPath = $request->file('imagem')->store('public/imagens/produtos');
    } else {
        $imagemPath = null;
    }


    // Valide os dados do formulário, incluindo a imagem
    $request->validate($regras, $mensagens);

    // Encontre o produto com o ID especificado
    $produto = Produto::findOrFail($id);

    // Atualize os atributos do produto com os novos dados
    $produto->update([
        'nome' => $data['nome'],
        'marca' => $data['marca'],
        'modelo' => $data['modelo'],
        'descricao' => $data['descricao'],
        'preco' => $data['preco'],
        'path' => $imagemPath,
    ]);
    return back()->with('message', 'Atualizado com sucesso!');
});


Route::get('/excluir-produto/{id}', function ($id) {
    $produto = (Produto::findOrFail($id));
    $produto->delete();
    return back()->with('message', 'Produto excluído com sucesso!');;
})->name('excluir-produto');;


