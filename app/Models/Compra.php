<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Compra extends Model
{

	
    protected $table = 'compras';
    protected $primaryKey = 'id';

    function cliente(){
    	return $this->belongsTo('App\Models\Cliente', 'id_cliente', 'id');
    }

    
}