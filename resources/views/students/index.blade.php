@extends('layout.layout')

@section('estilos')

<!-- DataTables CSS -->
	<script src={{URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css')}}></script>
	<!-- DataTables Responsive CSS -->
	<script src={{URL::asset('bower_components/datatables-responsive/css/dataTables.responsive.css')}}></script>
@stop

@section('content')

<div class="row">
	<div class="col-lg-12">
		<h3 class="page-header">Students <button type="button" class="btn btn-primary" onClick="location.href='students/create'">New</button></h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="dataTable_wrapper">
					@if($students->isEmpty())
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
							No students found <a shape="rect" onClick="location.href='students/create'" href="#" class="alert-link"><font face="Verdana" color="red">Insert Student</font> </a>
						</div>
					@else
						@if(session('message'))
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
								{{session('message')}}
							</div>
						@endif

						<table class="table table-striped table-bordered table-hover" id="dataTables-example">
							<thead>
								<tr>
									<th>IdStudent</th>
									<th>Name and Lastname</th>
									<th>Sex</th>
									<th>DNI</th>
									<th>Email</th>
									<th>Phone</th>
									<th>Operations</th>
								</tr>
							</thead>
							<tbody>
								@foreach($students as $student)
									<tr class="odd gradeA" rol="row">
										<td>{{$student->id}}</td>
										<td>{{$student->names}} {{$student->lastname}}</td>
										<td>{{$student->sex}}</td>
										<td>{{$student->dni}}</td>
										<td>{{$student->email}}</td>
										<td>{{$student->phone}}</td>										
										<td class="center">
											<ul class="nav nav-pills">
												<li>
													<a href="{!! action('StudentController@show', $student->id) !!}" title="View">
														<span class="glyphicon glyphicon-search"></span>
													</a>
												</li>
												<li>
													<a href="{!! action('StudentController@edit', $student->id) !!}" title="Edit">
														<span class="glyphicon glyphicon-pencil"></span>
													</a>
												</li>
												<li>
													<form method="post" action="{!! action('StudentController@destroy', $student->id) !!}"" onclick="return confirm('Are you sure you want to delete this register?');">
														{!! csrf_field() !!}
														{!! method_field('DELETE') !!}	
														<div>
															<button type="submit"
															class="btn btn-default"><span class="glyphicon glyphicon-trash"></span></button>
														</div>
													</form>
												</li>
											</ul>
										</td>
										<!--<td>
											<FORM action="students/{{$student->id}}" method="post">
												{{csrf_field()}}
												{{method_field('DELETE')}}
												<button type="button" class="btn btn-info btn-xs" onclick="location.href='/students/{{$student->id}}'">View</button>
												<button type="button" class="btn btn-success btn-xs" onclick="location.href='/students/{{$student->id}}/edit'">Edit</button>
												<BUTTON class="btn btn-danger btn-xs">Delete</BUTTON>
											</FORM>
										</td>-->
									</tr>
								@endforeach
							</tbody>
						</table>
					@endif
				</div>
				<!-- /.table-responsive -->
			</div>
		</div>
	</div>
</div>

@stop

@section('js')
<!-- DataTables JavaScript -->
	<script src="{{URL::asset('bower_components/DataTables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{URL::asset('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js')}}"></script>
@stop

@section('jsope')
	<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				responsive: true
			});	
		});
	</script>
@stop