<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partidos=\App\Partido::all();
        return view('index_partido',compact('partidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_partido');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $partido= new \App\Partido;
        $partido->nome=$request->get('nome');
        $partido->sigla=$request->get('sigla');
        $partido->numero_partido=$request->get('numero_partido');
        $partido->endereco=$request->get('endereco');
        $partido->save();
        
        return redirect('partidos')->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partido = \App\Partido::find($id);
        return view('edit_partido',compact('partido','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partido= \App\Partido::find($id);
        $partido->nome=$request->get('nome');
        $partido->sigla=$request->get('sigla');
        $partido->numero_partido=$request->get('numero_partido');
        $partido->endereco=$request->get('endereco');
        $partido->save();
        return redirect('partidos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partido = \App\Partido::find($id);
        $partido->delete();
        return redirect('partidos')->with('success','Deletado com sucesso');
    }
}
