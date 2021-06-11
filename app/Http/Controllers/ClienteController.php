<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::all();

        return view('cliente.index', compact('cliente'));
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
