<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresas = Empresa::all();
        return view('/dashboard', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresa.create');
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Empresa::create([
            'nome' => $request->nome,
            'cnpj' => $request->cnpj,
            'cep' => $request->cep,
            'status' => $request->status,
            'user_id' => Auth::user()->id
        ]);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\Empresa  $Empresa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Empresa = Empresa::findOrfail($id);
        return view('empresa.show', ['empresa' => $Empresa]);
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\Empresa  $Empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Empresa = Empresa::findOrFail($id);
        return view('editar-empresa', ['empresa' => $Empresa]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $Empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Empresa)
    {
        $Empresa = Empresa::findOrFail ($Empresa);
        $Empresa ->nome = $request ->nome;
        $Empresa ->cnpj = $request ->cnpj;
        $Empresa ->cep = $request ->cep;
        $Empresa ->status = $request ->status;
        $Empresa->update();
        return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresa $Empresa)
    {
        $Empresa= Empresa::findOrFail($Empresa)->delete();
        return redirect()->back();
    }
}
