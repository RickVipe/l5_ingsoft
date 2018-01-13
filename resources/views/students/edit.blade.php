@extends('layout.layout')

@section('content')
<div class="row">
    <div class="col-lg-12"></div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-info">
            <div class="panel-heading">
                Modify student data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/students/{{$student->id}}" autocomplete="off">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                </div>
                            @endforeach
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group" >
                                <label>Name</label>
                                <input type="text" class="form-control" name="names" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.toUpperCase();" value="{!! $student->names !!}">     
                            </div>
                            <div class="form-group ">
                                <label>Lastname</label>
                                <input type="text" class="form-control" name="lastname" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.toUpperCase();" value="{!! $student->lastname !!}">       
                            </div>
                            <div class="form-group ">
                                <label>Sex</label>
                                <select name="sex" class="form-control">
                                    <option value="">Chose an option</option>
                                    <option value="M" @if($student->sex == "M") selected="" @endif>MALE</option>
                                    <option value="F" @if($student->sex == "F") selected="" @endif>FEMALE</option>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>DNI</label>
                                <input type="text" class="form-control" placeholder="12345678" name="dni" value="{!! $student->dni !!}">    
                            </div>
                            <div class="form-group ">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="name@example.com" name="email" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.toLowerCase();" value="{!! $student->email !!}">     
                            </div>
                            <div class="form-group ">
                                <label>Phone</label>
                                <input type="tel" class="form-control" placeholder="" name="phone" value="{!! $student->phone !!}"> 
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="button" class="btn btn-danger" onclick="location.href='/students'">Back</button>
                        </form>
                    </div>
@stop