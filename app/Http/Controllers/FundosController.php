<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Models\Fundo;

class FundosController extends Controller
{
    public function create(){
        return view('Fundos.create');
    }

    public function store(Request $request){
        //dd($request->all());

        Fundo::create([
            'nome_fundo' => $request->nome_fundo,
            'qdt_integrantes' => $request->qdt_integrantes,
            'status' => $request->status,
        ]);

        return "Novo Fundo Criado com Sucesso!";
    }

    public function show($cod_fundo){
        $fundo = Fundo::findOrFail($cod_fundo);
        //echo $fundo;
      return view('Fundos.show', ['fundo' => $fundo]);
    }

    public function showAll(){
        $fundo = Fundo::all();
        //echo $fundo;
      return view('Fundos.showAll', ['fundo' => $fundo]);
    }

    public function edit($cod_fundo){
        $fundo = Fundo::findOrFail($cod_fundo);
        return view('Fundos.edit', ['fundo' => $fundo]);
    }

    public function update(Request $request, $cod_fundo){

        $fundo = Fundo::findOrFail($cod_fundo);

        Fundo::where('cod_fundo', $cod_fundo)->update([
            'nome_fundo' => $request->nome_fundo,
            'qdt_integrantes' => $request->qdt_integrantes,
            'status' => $request->status,
        ]);

        return "Fundo Atualizado com Sucesso!";
    }

    public function delete($cod_fundo){
        $fundo = Fundo::findOrFail($cod_fundo);
        return view('Fundos.delete', ['fundo' => $fundo]);
    }

    public function destroy($cod_fundo){
        $fundo = Fundo::findOrFail($cod_fundo);

        $fundo->delete();

        return "Fundo excluido com sucesso";
    }
}
