<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'duracao'=> 'required',
            'responsavelAtual' => 'required'
          ]);
          $servico = new Servico([
            'nome' => $request->get('nome'),
            'duracao'=> $request->get('duracao'),
            'responsavelAtual'=> $request->get('responsavelAtual')
          ]);
          $servico->save();
          return redirect('/lista-servicos')->with('success', 'Serviço cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function edit(Servico $servico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servico $servico)
    {
        //
    }

    public function destroy($id)
    {
        $servico = Servico::find($id);
        $servico->delete();
        // isso
        return redirect('/lista-servicos')->with('success', 'Serviço excluído com sucesso.');
    }
}

