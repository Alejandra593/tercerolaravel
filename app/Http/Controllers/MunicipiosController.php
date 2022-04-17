<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Municipios;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipios::all();
        //dd($municipios);
        return view('municipios.index',compact('municipios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('municipios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateDate = $request->validate([
            'nombre' => 'required|max:255',
            'codigo' => 'required|max:10',
            'borrado' => 'required|max:',
            'id_departamento' => 'required|max:'
        ]);
        $show = Municipios::create($validateDate);
        return redirect('/municipios')->with('success','municipios');
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
        $municipio=Municipios::findOrFail($id);
        return view('municipios.edit', compact('municipio'));
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
        $validateDate=$request->validate([
            'nombre' => 'required|max:255',
            'codigo' => 'required|max:10',
            'borrado' => 'required|max:',
            'id_departamento' => 'required|max:'
        ]);
        Municipios::whereId($id)->update($validateDate);
        return redirect('/municipios')->with('success','municipio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Municipio=Municipios::findOrFail($id);
        $Municipio->delete();
        return redirect('/municipios')->with('success','Datos borrados con exito');

    }
}
