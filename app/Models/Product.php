<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Campos que podem ser preenchidos via cadastro
    protected $fillable = ['nome', 'preco', 'unidade_de_medida'];

    // Relacionamento: Um produto possui vários itens (Item 4.1)
    public function itens()
    {
        return $this->hasMany(ProductItens::class);
    }
}