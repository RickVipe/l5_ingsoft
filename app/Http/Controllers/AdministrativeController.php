<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class AdministrativeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administratives = DB::table('administratives')->paginate(3);
        return view('administratives.index', ['administratives' => $administratives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administratives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $nam = $request->input('name');
        $pos = $request->input('position');
        $ema = $request->input('email');
        $pho = $request->input('phone');
        $dni = $request->input('dni');
        if(strlen($dni)==8 && is_int($dni)){
            DB::table('administratives')->insert([
                'id' => $id,
                'name' => $nam,
                'position' => $pos,
                'email' => $ema,
                'phone' => $pho,
                'dni' => $dni
            ]);
        }
        else{
            echo "INVALID DNI";
            sleep(2);
        }
        return redirect('administrative');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $administrative = DB::table('administratives')->where('id', $id)->first();
        return view('administratives.show', ['administrative' => $administrative]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $administrative = DB::table('administratives')->where('id', $id)->first();
        return view('administratives.edit', ['administrative' => $administrative]);
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
        $nam = $request->input('name');
        $pos = $request->input('position');
        $ema = $request->input('email');
        $pho = $request->input('phone');
        $dni = $request->input('dni');
        if(strlen($dni)==8 && is_int($dni)){
            DB::table('administratives')
            ->where('id', $id)
            ->update([
                'name' => $nam,
                'position' => $pos,
                'email' => $ema,
                'phone' => $pho,
                'dni' => $dni
            ]);
        }
        else{
            echo "INVALID DNI";
            sleep(2);
        }
        return redirect('administrative');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $administrative = DB::table('administratives')->where('id', $id)->delete();
        return redirect('administrative');
    }
}
