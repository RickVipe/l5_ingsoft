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
				Insert policia data
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
							<input type="hidden" name="_token" value="{!! csrf_token()!!}">
							<div class="form-group ">
								<label>NOMBRES</label>
								<input type="text" class="form-control" name="nombres" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.toUpperCase();">		
							</div>
							<div class="form-group ">
								<label>SUELDO</label>
								<input type="text" class="form-control" placeholder="12345678" name="sueldo">	
							</div>
							<div class="form-group ">
								<label>SEXO</label><br>
								  <input type="radio" name="sex" value="M" checked>M &nbsp; &nbsp;
								  <input type="radio" name="sex" value="F">F<br>
							</div>
							<div class="form-group ">
								<label>RANGO</label>
								<select name="rango" class="form-control">
									<option value="" selected="">Choose an option</option>
									<option value="OFICIAL">OFICIAL</option>
									<option value="SUB-OFICIAL">SUB-OFICIAL</option>
									<option value="OFICIAL-PRIMERA">OFICIAL-PRIMERA</option>
									<option value="OFICIAL-SEGUNDA">OFICIAL-SEGUNDA</option>
								</select>
							</div>
							<div class="form-group ">
								<label>BAJA</label><br>
								<input type="checkbox" name="baja" value = "1"> &nbsp; check si activo
							</div>
							
							<button type="submit" class="btn btn-success">Save</button>
							<button type="reset" class="btn btn-warning">Clean</button>
							<button type="button" class="btn btn-danger" onclick="location.href='/policias'">Back</button>
						</form>
					</div>
@stop