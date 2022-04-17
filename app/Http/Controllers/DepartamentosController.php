<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamento = Departamentos::all();
        //dd($departamento);
        return view('departamentos.index', compact('departamento'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validateData = $request->validate([
           'nombre'=> 'required|max:255',
           'codigo' => 'required|max:10'
       ]);
       $show = Departamentos::create($validateData);
       return redirect('/departamentos')->with('success','departamentos');
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
        $departamento=Departamentos::findOrFail($id);
        return view('departamentos.edit', compact('departamento'));
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
        $validateData=$request->validate([
            'nombre' => 'required|max:255',
            'codigo' => 'required'
        ]);
        Departamentos::whereId($id)->update($validateData);
        return redirect('/departamentos')->with('success','Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento=Departamentos::findOrFail($id);
        $departamento->delete();
        return redirect('/departamentos')->with('success','Datos borrados con exito');
    }
}
