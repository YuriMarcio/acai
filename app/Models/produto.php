<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProd',
        'descriProd',
        'categoria_id',
        'supplierProd',
        'amountProd',
        'unitPriceProd',
        'imageProd',
    ];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');

    }
}
