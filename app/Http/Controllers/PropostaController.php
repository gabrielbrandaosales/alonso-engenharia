<?php

namespace App\Http\Controllers;

use App\Models\Proposta;
use App\Models\Cliente;
use Illuminate\Http\Request;

class PropostaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cliente = Cliente::all();

        //echo "{$cliente->nm_razao_social}";
        $proposta = Proposta::all();
        
        //dd($proposta = $cliente->relProposta);
        
        //dd($proposta);
        //echo "{$proposta->nm_endereco_obra}";
        //dd($this->$proposta->relProposta);

        return view('proposta.index', compact('proposta', 'cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = Cliente::all();
        return view('proposta.create', compact('clientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Proposta::create($request->all());

        return redirect()
            ->route('cliente.index')
            -> with('message', 'Cliente criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function show(Proposta $proposta)
    {
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function edit(Proposta $proposta, $id)
    {
        if(!$proposta = Proposta::find($id)){
            return redirect()->back();

        }
        return view('proposta.edit', compact('proposta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!$post = Proposta::find($id)){
            return redirect()->back();

        }

        $post->update($request->all());
        return redirect()
        -> route('proposta.index')
        -> with('message', 'Proposta atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proposta  $proposta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proposta $proposta)
    {
        //
    }
}
