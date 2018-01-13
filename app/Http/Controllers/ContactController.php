<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$contacts = DB::table('contacts')->get();
        $contacts = DB::table('contacts')->paginate(3);
        return view('contacts.index', ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('idcontact');
        $nam = $request->input('name');
        $las = $request->input('lastname');
        $ema = $request->input('email');

        DB::table('contacts')->insert([
            'idcontact' => $id,
            'name' => $nam,
            'lastname' => $las,
            'email' => $ema
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = DB::table('contacts')->where('idcontact', $id)->first();
        return view('contacts.show', ['contact' => $contact]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = DB::table('contacts')->where('idcontact', $id)->first();
        return view('contacts.edit', ['contact' => $contact]);
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
        $las = $request->input('lastname');
        $ema = $request->input('email');
        DB::table('contacts')
        ->where('idcontact', $id)
        ->update([
            'name' => $nam,
            'lastname' => $las,
            'email' => $ema
        ]);
        return redirect('contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = DB::table('contacts')->where('idcontact', $id)->delete();
        return redirect('contact');
    }
}
