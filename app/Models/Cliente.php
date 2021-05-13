<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Compra;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';

    function compras(){
    	return $this->hasMany('App\Models\Compra', 'id_cliente', 'id');
    }
}