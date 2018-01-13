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
				Student data
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form">
							<div class="form-group ">
								<label>ID</label>
								<input type="text" class="form-control" disabled="" value="{!! $student->id !!}">		
							</div>
							<div class="form-group ">
								<label>Names</label>
								<input type="text" class="form-control" disabled="" value="{!! $student->names !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">		
							</div>
							<div class="form-group ">
								<label>Lastname</label>
								<input type="text" class="form-control" disabled="" value="{!! $student->lastname !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">
							</div>
							<div class="form-group ">
								<label>Sex</label><br>
								@if ($student->sex == 'M') 
									<input type="text" disabled=""	value="MALE">
								@endif
								@if ($student->sex == 'F') 
									<input type="text" disabled=""	value="FEMALE">
								@endif
							</div>
							<div class="form-group ">
								<label>DNI</label>
								<input type="text" class="form-control" disabled="" value="{!! $student->dni !!}">
							</div>
							<div class="form-group ">
								<label>Email</label>
								<input type="text" class="form-control" disabled="" value="{!! $student->email !!}" style="text-transform:uppercase;"
								onkeyup="javascript:this.value=this.value.toUpperCase();">	
							</div>
							<div class="form-group ">
								<label>Phone</label>
								<input type="text" class="form-control" disabled="" value="{!! $student->phone !!}">
							</div>
							<button type="button" class="btn btn-block btn-danger" onclick="location.href='/students'">Back</button>
						</form>
					</div>
@stop