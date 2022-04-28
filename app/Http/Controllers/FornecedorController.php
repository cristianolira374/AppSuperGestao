<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        //$fornecedores = ['fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1'];
        
        //array muntidimensional
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor1', 
                'status' => 'N',
                'cnpj' => '07.421.806/00001-00'
            ],
            1 => [
                'nome' => 'Fornecedor2', 
                'status' => 'S'
            ]
            ];
        
        $msg =  isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores','msg'));
    }
}
