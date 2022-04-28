<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        //$fornecedores = ['fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1','fornecedor1'];
        
        //array muntidimensional
        $fornecedores = [0 => ['nome' => 'Fornecedor1', 'status' => 'N']];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
