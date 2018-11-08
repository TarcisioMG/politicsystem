<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CandidatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $candidatos=\App\Candidato::all();
        return view('candidato/index',compact('candidatos'));
    }

    public function view_votar ()
    {
        return view('votar');
    }

    public function votar(Request $request)
    {   
        $numero_candidato = $request->get('numero_candidato');
        $user = DB::table('candidatos')->where('numero_candidato', $numero_candidato)->first();
        $id = $user->id;
        $candidato = \App\Candidato::find($id);
        $candidato->votos = $candidato->votos + 1;
        $candidato->save();
        return redirect('candidatos')->with('success', 'Voto computado com sucesso!');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('candidato/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $candidato= new \App\Candidato;
        $candidato->nome_completo=$request->get('nome_completo');
        $candidato->nome_exibicao=$request->get('nome_exibicao');
        if(isset($name)){
            $candidato->foto=$name;
        }
        $candidato->id_partido=$request->get('id_partido');
        $candidato->numero_candidato=$request->get('numero_candidato');
        $candidato->endereco=$request->get('endereco');
        $candidato->save();
        
        return redirect('candidatos')->with('success', 'Cadastrado com sucesso!');
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
        $candidato = \App\Candidato::find($id);
        return view('candidato/edit',compact('candidato','id'));
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
        if($request->hasfile('foto'))
        {
            $file = $request->file('foto');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $candidato= \App\Candidato::find($id);
        $candidato->nome_completo=$request->get('nome_completo');
        $candidato->nome_exibicao=$request->get('nome_exibicao');
        if(isset($name)){
            $candidato->foto=$name;
        }
        $candidato->id_partido=$request->get('id_partido');
        $candidato->numero_candidato=$request->get('numero_candidato');
        $candidato->endereco=$request->get('endereco');
        $candidato->save();
        return redirect('candidatos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $candidato = \App\Candidato::find($id);
        $candidato->delete();
        return redirect('candidatos')->with('success','Deletado com sucesso');
    }
}
