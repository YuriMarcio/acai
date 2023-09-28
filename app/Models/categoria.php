<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $fillable = ['nome'];
    public function produto()
    {
        return $this->hasMany(Produto::class, 'categoria_id');
    }
}
