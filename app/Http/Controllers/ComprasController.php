<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Compra;
use Auth;

class ComprasController extends Controller
{
    function nomesCompras(){
       
        	$compras = Compra::all();

        	return view('lista_compras', ['compras' => $compras]);
      
    }

    function cadastro(){
       
    	    $clientes = Cliente::all();
            return view("cadastro_compras", ["clientes"=>$clientes]);
  
    }

    function telaAlteracao($id){
        
            $compra = Compra::find($id);

            return view("alteracao_compras", ['co' => $compra]);
  
    }

    function excluir($id){
        
            $compra = Compra::find($id);

            if($compra->delete()){
                $mensagem = "Compra excluída com sucesso!";
                $classe = "success";
            }else{
                $mensagem = "Compra $id não foi excluída!";
                $classe = "danger";
            }

            
            return view("resultado", ["mensagem" => $mensagem, "classe"=>$classe]);
        
    }

    function alterar(Request $req, $id){
        
            $id_cliente = $req->input('id_cliente');
            $valor_total_compra = $req->input('valor_total_compra');
    

            $compra = Compra::find($id);
            $compra->id_cliente = $id_cliente;
            $compra->valor_total_compra = $valor_total_compra;

            if ($compra->save()){
                $mensagem = "Compra alterada com Sucesso!";
                $classe = "success";
            } else {
                $mensagem = "Compra não foi alterada!";
                $classe = "danger";
            }
            return view("resultado", ["mensagem" => $mensagem, "classe"=>$classe]);

    }

    function novo(Request $req){
       
        	$id_cliente = $req->input('id_cliente');

        	$compra = new Compra();
            $compra->id_cliente = $id_cliente;
            $compra->valor_total_compra = 0; 

        	if ($compra->save()){
                $mensagem = "Compra inserida com Sucesso!";
                $classe = "success";
            } else {
                $mensagem = "Compra não foi inserida!";
                $classe = "danger";
            }
            return view("resultado", ["mensagem" => $mensagem, "classe" => $classe]);
        

    }
}