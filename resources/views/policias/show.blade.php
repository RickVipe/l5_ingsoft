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
				policia data
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" method="post" action="/policias" autocomplete="off">
							@foreach($errors->all() as $error)
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
									{{$error}}
								</div>
							@endforeach
							<div class="form-group ">
								<label>ID</label>
								<input type="text" class="form-control" disabled="" value="{!! $policia->id !!}">		
							</div>
							<div class="form-group ">
								<label>NOMBRES</label>
								<input type="text" class="form-control" disabled="" value="{!! $policia->nombres !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">		
							</div>
							<div class="form-group ">
								<label>SUELDO</label>
								<input type="text" class="form-control" disabled="" value="{!! $policia->sueldo !!}">
							</div>
							<div class="form-group ">
                                <label>SEXO</label><br>
                                    <input type="radio" disabled="" name="sex" @if($policia->sex == "M") selected="" @endif value="M" checked>M &nbsp; &nbsp;
                                    <input type="radio"  disabled="" name="sex" @if($policia->sex == "F") selected="" @endif value="F" checked>F<br>
                                </select>
                            </div>
							<div class="form-group ">
                                <label>RANGO</label>
                                <select name="rango" class="form-control">
                                    <option value="OFICIAL"  disabled="" @if($policia->position == "OFICIAL") selected="" @endif>OFICIAL</option>
                                    <option value="SUB-OFICIAL" disabled="" @if($policia->position == "SUB-OFICIAL") selected="" @endif>SUB-OFICIAL</option>
                                    <option value="OFICIAL-PRIMERA" @if($policia->position == "OFICIAL-PRIMERA") selected="" @endif>OFICIAL-PRIMERA</option>
                                    <option value="OFICIAL-SEGUNDA" disabled="" @if($policia->position == "OFICIAL-SEGUNDA") selected="" @endif>OFICIAL-SEGUNDA</option>
                                </select>
                            <div class="form-group ">
                                <label>BAJA</label><br>
                                <input type="checkbox" disabled="" name="baja" @if($policia->baja == "1") checked @endif value = "1"> &nbsp; check si activo
                            </div>
							<button type="button" class="btn btn-block btn-danger" onclick="location.href='/policias'">Back</button>
						</form>
					</div>
@stop