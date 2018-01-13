<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PoliciaFormRequest;
use App\Policia;
class PoliciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $policias = Policia::all();
        return view('policias.index', ['policias'=>$policias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('policias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoliciaFormRequest $request)
    {
        $policia = new Policia;
        $policia->nombres=$request->get('nombres');
        $policia->sueldo=$request->get('sueldo');
        $policia->sex=$request->get('sex');
        $policia->rango=$request->get('rango');
        $policia->baja=$request->get('baja');
        if($policia->baja != "1"){
            $policia->baja = "0";
        }
        $policia->save();
        return redirect('\policias')->with('message', 'Creado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $policia = Policia::findOrFail($id);
        return view('policias.show', compact('policia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $policia = policia::findOrFail($id);
        return view('policias.edit', compact('policia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PoliciaFormRequest $request, $id)
    {
        $policia = policia::findOrFail($id);

        $policia->nombres=$request->get('nombres');
        $policia->sueldo=$request->get('sueldo');
        $policia->sex=$request->get('sex');
        $policia->rango=$request->get('rango');
        $policia->baja=$request->get('baja');
        if($policia->baja != "1"){
            $policia->baja = "0";
        }
        $policia->save();
        return redirect('\policias')->with('message', 'Policia con id: '.$id.' a sido modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $policia = policia::findOrFail($id);
        $policia->delete();
        return redirect('\policias')->with('message', 'Policia con id: '.$id.' a sido borrado exitosamente!');
    }
}
