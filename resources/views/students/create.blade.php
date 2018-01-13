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
				Insert student data
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-lg-6">
						<form role="form" method="post" action="/students" autocomplete="off">
							@foreach($errors->all() as $error)
								<div class="alert alert-danger">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
									{{$error}}
								</div>
							@endforeach
							<input type="hidden" name="_token" value="{!! csrf_token()!!}">
							<div class="form-group ">
								<label>Name</label>
								<input type="text" class="form-control" name="names" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.toUpperCase();">		
							</div>
							<div class="form-group ">
								<label>Lastname</label>
								<input type="text" class="form-control" name="lastname" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.toUpperCase();">		
							</div>
							<div class="form-group ">
								<label>Sex</label>
								<select name="sex" class="form-control">
									<option value="" selected="">Choose an option</option>
									<option value="M">Male</option>
									<option value="F">Female</option>
								</select>
							</div>
							<div class="form-group ">
								<label>DNI</label>
								<input type="text" class="form-control" placeholder="12345678" name="dni">	
							</div>
							<div class="form-group ">
								<label>Email</label>
								<input type="email" class="form-control" placeholder="name@example.com" name="email" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.toLowerCase();">		
							</div>
							<div class="form-group ">
								<label>Phone</label>
								<input type="tel" class="form-control" placeholder="" name="phone">	
							</div>
							<button type="submit" class="btn btn-success">Save</button>
							<button type="reset" class="btn btn-warning">Clean</button>
							<button type="button" class="btn btn-danger" onclick="location.href='/students'">Back</button>
						</form>
					</div>
@stop