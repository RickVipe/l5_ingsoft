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
				Teacher data
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" method="post" action="/teachers" autocomplete="off">
							@foreach($errors->all() as $error)
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
									{{$error}}
								</div>
							@endforeach
							<input type="hidden" name="_token" value="{!! csrf_token()!!}">
							<div class="form-group ">
								<label>ID</label>
								<input type="text" class="form-control" disabled="" value="{!! $teacher->id !!}">		
							</div>
							<div class="form-group ">
								<label>Names</label>
								<input type="text" class="form-control" disabled="" value="{!! $teacher->names !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">		
							</div>
							<div class="form-group ">
								<label>Lastname</label>
								<input type="text" class="form-control" disabled="" value="{!! $teacher->lastname !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group ">
								<label>DNI</label>
								<input type="text" class="form-control" disabled="" value="{!! $teacher->dni !!}">
							</div>
							<div class="form-group ">
								<label>Phone</label>
								<input type="text" class="form-control" disabled="" value="{!! $teacher->phone !!}">
							</div>
							<div class="form-group ">
								<label>Email</label>
								<input type="text" class="form-control" disabled="" value="{!! $teacher->email !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">	
							</div>
							<button type="button" class="btn btn-block btn-danger" onclick="location.href='/teachers'">Back</button>
						</form>
					</div>
@stop