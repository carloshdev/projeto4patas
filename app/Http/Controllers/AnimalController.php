<?php

namespace Projeto4Patas\Http\Controllers;

use Projeto4Patas\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
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
            'name'=>'required',
            'breed'=> 'required',
            'gender' => 'required'
          ]);
          $animal = new Animal([
            'name' => $request->get('name'),
            'breed'=> $request->get('breed'),
            'gender'=> $request->get('gender')
          ]);
          $animal->save();
          return redirect('/lista-animais')->with('success', 'Animal adicionado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Projeto4Patas\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show(Animal $animal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Projeto4Patas\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Projeto4Patas\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'gender' => 'required',
        ]);
        Animal::whereId($id)->update($validatedData);

        return redirect('/lista-animais')->with('success', 'Animal editado com sucesso');
    }

    public function destroy($id)
    {
        $animal = Animal::find($id);
        $animal->delete();
        // isso
        return redirect('/lista-animais')->with('success', 'Animal deletado com sucesso.');
    }
}
