<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InternalUser extends Model
{
    protected $table = 'internal_users';
    protected $fillable = ['nome','sobrenome','password','telefone','email','cargo','filial_vinculada','endereço'];

}


