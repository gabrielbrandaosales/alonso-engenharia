<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Proposta;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    
    public function index(){
        $cliente = Cliente::all();

        return view('cliente.index', compact('cliente'));
        /*$cliente = Cliente::where('id', '1')->get()->first();
        echo "{$cliente->nm_razao_social}";

        $propostas = $cliente->relProposta;

        foreach ($propostas as $proposta){
            echo "<hr>{$proposta->nm_endereco_obra}</hr>";
        }*/
    }

    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        $post = Cliente::create($request->all());

        return redirect()
            ->route('cliente.index')
            -> with('message', 'Cliente criado com sucesso');
    }

    public function show($id){
        
        $cliente = Cliente::where('id', $id)->first();
        $propostas = $cliente->relProposta;

        return view('cliente.show', compact('cliente', 'propostas'));
    }

    public function edit($id){
        
        
        if(!$cliente = Cliente::find($id)){
            return redirect()->back();

        }
        return view('cliente.edit', compact('cliente'));
    }

    public function update(Request $request, $id){
        
        
        if(!$post = Cliente::find($id)){
            return redirect()->back();

        }

        $post->update($request->all());
        return redirect()
        -> route('cliente.index')
        -> with('message', 'Cliente atualizado com sucesso');
    }
}
