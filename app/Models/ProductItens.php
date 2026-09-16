<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductItens extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'quantidade', 'cor', 'valor'];

    // Relacionamento: Um item pertence a um produto (Item 4.2)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}