<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class ActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividades = DB::table('actividades')->get();
        return view('actividades.index', ['actividades' => $actividades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('actividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cod = $request->input('cod');
        $ape = $request->input('apellidos');
        $nom = $request->input('nombres');
        $cer = $request->input('cert');
        $cat = $request->input('categoria');
        DB::table('actividades')->insert([
            'cod' => $cod,
            'apellidos' => $ape,
            'nombres' => $nom,
            'cert' => $cer,
            'categoria' => $cat
        ]);
        return redirect('actividades');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($cod)
    {
        $actividades = DB::table('actividades')->where('cod', $cod)->first();
        return view('actividades.show', ['actividades' => $actividades]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cod)
    {
        $actividades = DB::table('actividades')->where('cod', $cod)->first();
        return view('actividades.edit', ['actividades' => $actividades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cod)
    {
        $ape = $request->input('apellidos');
        $nom = $request->input('nombres');
        $cer = $request->input('cert');
        $cat = $request->input('categoria');
        DB::table('actividades')
        ->where('cod', $cod)
        ->update([
            'apellidos' => $ape,
            'nombres' => $nom,
            'cert' => $cer,
            'categoria' => $cat]);
        return redirect('actividades');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($cod)
    {
        $actividades = DB::table('actividades')->where('cod', $cod)->delete();
        return redirect('actividades');
    }

    public function login(Request $request)
    {
        $pass = $request->input('password');
        if($pass == "marramiau"){
            return redirect('actividades.menu');
        }
        else{
            return redirect('actividades');
        }
    }
}
