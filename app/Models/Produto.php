<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;
class Produto extends Model
{
    use HasFactory;

    protected $table = 'produto';
    protected $fillable = ['nome', 'marca','modelo','descricao','preco'];

    public function index(): View
    {
        $produtos = Produto::all();

        return view('produto', compact('produtos'));
    }


}

