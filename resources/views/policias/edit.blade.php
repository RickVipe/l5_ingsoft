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
                Modify policia data
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="/policias/{{$policia->id}}">
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                </div>
                            @endforeach
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                            <div class="form-group" >
                                <label>NOMBRES</label>
                                <input type="text" class="form-control" name="nombres" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.toUpperCase();" value="{!! $policia->nombres !!}">     
                            </div>
                            <div class="form-group ">
                                <label>SUELDO</label>
                                <input type="text" class="form-control" placeholder="12345678" name="sueldo" value="{!! $policia->sueldo !!}">    
                            </div>
                            <div class="form-group ">
                                <label>SEXO</label><br>
                                    <input type="radio" name="sex" @if($policia->sex == "M") selected="" @endif value="M" checked>M &nbsp; &nbsp;
                                    <input type="radio" name="sex" @if($policia->sex == "F") selected="" @endif value="F" checked>F<br>
                                </select>
                            </div>
                            <div class="form-group ">
                                <label>RANGO</label>
                                <select name="rango" class="form-control">
                                    <option value="OFICIAL" @if($policia->position == "OFICIAL") selected="" @endif>OFICIAL</option>
                                    <option value="SUB-OFICIAL" @if($policia->position == "SUB-OFICIAL") selected="" @endif>SUB-OFICIAL</option>
                                    <option value="OFICIAL-PRIMERA" @if($policia->position == "OFICIAL-PRIMERA") selected="" @endif>OFICIAL-PRIMERA</option>
                                    <option value="OFICIAL-SEGUNDA" @if($policia->position == "OFICIAL-SEGUNDA") selected="" @endif>OFICIAL-SEGUNDA</option>
                                </select>
                            <div class="form-group ">
                                <label>BAJA</label><br>
                                <input type="checkbox" name="baja" @if($policia->baja == "1") checked @endif value = "1"> &nbsp; check si activo
                            </div>
                            
                            <button type="submit" class="btn btn-success">Update</button>
                            <button type="button" class="btn btn-danger" onclick="location.href='/policias'">Back</button>
                        </form>
                    </div>
@stop