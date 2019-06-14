<?php

namespace Projeto4Patas\Http\Controllers;

use Projeto4Patas\Servico;
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
        return Servico::all();
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

          if($request->get('botao-cadastrar') == 'cadastro-finalizar') {
            return redirect('/lista-servicos')->with('Success', 'Serviço cadastrado com sucesso!');
        } else {
            return redirect('/cadastro-servicos')->with('Success', 'Serviço cadastrado com sucesso!');
        }
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \Projeto4Patas\Servico  $servico
     * @return \Illuminate\Http\Response
     */
    public function show(Servico $servico)
    {
        return Servico::find($servico);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Projeto4Patas\Servico  $servico
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
     * @param  \Projeto4Patas\Servico  $servico
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

