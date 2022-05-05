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
                'cnpj' => '07.421.806/00001-00',
                'ddd' => null,
                'telefone' => '999419259'
            ],
            1 => [
                'nome' => 'Fornecedor2', 
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '11',
                'telefone' => '31012510'
            ],
            2 => [
                'nome' => 'Fornecedor3', 
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '88',
                'telefone' => '34564323'
            ]
            ];
        
        $msg =  isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';

        return view('app.fornecedor.index', compact('fornecedores','msg'));
    }
}
