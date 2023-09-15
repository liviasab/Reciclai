<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePontoColetaRequest;
use App\Http\Requests\UpdatePontoColetaRequest;
use App\Models\Empresa;
use App\Models\PontoColeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PontoColetaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pontocoletas = PontoColeta::all();
        return view('/dashboard', compact('pontocoletas'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pontocoleta.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PontoColeta::create([
            'status' => $request->status,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'pc_emp_id' => Auth::empresa()->user_id
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\PontoColeta  $PontoColeta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $PontoColeta = PontoColeta::findOrfail($id);
        return view('pontocoleta.show', ['pontocoleta' => $PontoColeta]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\PontoColeta  $PontoColeta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $PontoColeta = PontoColeta::findOrFail($id);
        return view('editar-pontocoleta', ['pontocoleta' => $PontoColeta]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PontoColeta  $PontoColeta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $PontoColeta)
    {
        $PontoColetaAlvo = PontoColeta::findOrFail($PontoColeta);
        $PontoColetaAlvo ->nome = $request ->nome;
        $PontoColetaAlvo ->cnpj = $request ->cnpj;
        $PontoColetaAlvo ->cep = $request ->cep;
        $PontoColetaAlvo ->status = $request ->status;
        $PontoColetaAlvo->update();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param  \App\Models\Alimento  $alAlimentoimento
     * @return \Illuminate\Http\Response
     */
    public function destroy($PontoColeta)
    {
        $PontoColeta=PontoColeta::findOrFail($PontoColeta)->delete();
        return redirect()->back();
    }
}
