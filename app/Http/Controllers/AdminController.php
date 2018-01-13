<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\AdminFormRequest;
use App\Admin;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = admin::all();
        return view('admins.index', ['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(adminFormRequest $request)
    {
        $admin = new admin;
        $admin->names=$request->get('names');
        $admin->lastname=$request->get('lastname');
        $admin->position=$request->get('position');
        $admin->email=$request->get('email');
        $admin->phone=$request->get('phone');
        $admin->dni=$request->get('dni');
        $admin->save();
        return redirect('\admins')->with('message', 'Inserted correctly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.show', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(adminFormRequest $request, $id)
    {
        $admin = Admin::findOrFail($id);

        $admin->names=$request->get('names');
        $admin->lastname=$request->get('lastname');
        $admin->position=$request->get('position');
        $admin->email=$request->get('email');
        $admin->phone=$request->get('phone');
        $admin->dni=$request->get('dni');
        $admin->save();
        return redirect('admins')->with('message', 'Admin with id: '.$id.' has been succesfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::findOrFail($id);
        $admin -> delete();
        return redirect('admins')->with('message', 'Admin with id: '.$id.' has been succesfully removed');
    }
}
