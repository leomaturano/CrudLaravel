<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Pessoa;

class PessoasController extends Controller
{
    public function index()
    {
        // Permite o acesso sem senha, perigoso.
        header('Access-Control-Allow-Origin: *');
        // Permite o acesso sem senha, perigoso.
        
        
        $pessoas = Pessoa::All();
        return response()->json($pessoas);
    }
    
    public function show($id)
    {
        // Permite o acesso sem senha, perigoso.
        header('Access-Control-Allow-Origin: *');
        // Permite o acesso sem senha, perigoso.
        
        
        $pessoa = Pessoa::find($id);
        if (!$pessoa) {
            return response()->json(['message'   => 'Record not found'], 404);
        }
        return response()->json($pessoa);
    }
    
    public function store(Request $request)
    {
        // Permite o acesso sem senha, perigoso.
        header('Access-Control-Allow-Origin: *');
        // Permite o acesso sem senha, perigoso.
        
        
        $pessoa = new Pessoa();
        
        if (empty($request->get('nome')) || empty($request->get('email'))  || empty($request->get('telefone'))) {
            return response()->json(['message'   => 'Bad Request - campos nao preenchidos corretamente'], 400);
        } else {
            $pessoa->nome = $request->get('nome');
            $pessoa->email =  $request->get('email');
            $pessoa->telefone = $request->get('telefone');
            $pessoa->save();
            return response()->json($pessoa, 201);
        }
    }
    
    public function update(Request $request, $id)
    {
        // Permite o acesso sem senha, perigoso.
        header('Access-Control-Allow-Origin: *');
        // Permite o acesso sem senha, perigoso.
		
        
        $pessoa = Pessoa::find($id);
        if (!$pessoa) {
            return response()->json(['message'   => 'Record not found'], 404);
        }
        if (empty($request->get('nome')) || empty($request->get('email'))  || empty($request->get('telefone'))) {
            return response()->json(['message'   => 'Bad Request - campos nao preenchidos corretamente' ], 400);
        } else {
            $pessoa->nome = $request->get('nome');
            $pessoa->email =  $request->get('email');
            $pessoa->telefone = $request->get('telefone');
            $pessoa->save();
            return response()->json($pessoa, 200);
        }
    }
    
    public function destroy($id)
    {
        // Permite o acesso sem senha, perigoso.
        header('Access-Control-Allow-Origin: *');
        // Permite o acesso sem senha, perigoso.
    }
    public function excluir($id)
    {
        // Permite o acesso sem senha, perigoso.
        header('Access-Control-Allow-Origin: *');
        // Permite o acesso sem senha, perigoso.

 
     
        $pessoa = Pessoa::find($id);
        if (!$pessoa) {
            return response()->json(['message'   => 'Record not found'], 200);
        }
        
        try {
            $pessoa->delete();
        } catch (Exception $e) {
            echo 'Exceção capturada: ',  $e->getMessage(), "\n";
        }
        
        return response()->json(['message' => 'Funcionou'], 200);
    }
}
