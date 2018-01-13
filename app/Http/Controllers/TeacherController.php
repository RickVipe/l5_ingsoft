<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\TeacherFormRequest;
use App\teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = teacher::all();
        return view('teachers.index', ['teachers'=>$teachers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherFormRequest $request)
    {
        $teacher = new teacher;
        $teacher->names=$request->get('names');
        $teacher->lastname=$request->get('lastname');
        $teacher->dni=$request->get('dni');
        $teacher->phone=$request->get('phone');
        $teacher->email=$request->get('email');
        $teacher->save();
        return redirect('\teachers')->with('message', 'Inserted correctly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.show', compact('teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherFormRequest $request, $id)
    {
        $teacher = Teacher::findOrFail($id);
        
        $teacher->names=$request->get('names');
        $teacher->lastname=$request->get('lastname');
        $teacher->dni=$request->get('dni');
        $teacher->phone=$request->get('phone');
        $teacher->email=$request->get('email');
        $teacher->save();
        return redirect('teachers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher -> delete();
        return redirect('teachers')->with('message', 'Teacher with id: '.$id.' has been succesfully removed');
    }
}
