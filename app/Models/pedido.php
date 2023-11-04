<?php

namespace App\Models;

use App\Models\pedido_item;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\status;

class pedido extends Model
{
    use HasFactory;
    public function pedido_items()
    {
        return $this->hasMany(pedido_item::class);
    }
    public function status()
    {
        return $this->belongsTo(Status::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
