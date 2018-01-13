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
		<h3 class="page-header">admins <button type="button" class="btn btn-primary" onClick="location.href='admins/create'">New</button></h3>
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
					@if($admins->isEmpty())
						<div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
							No admins found <a shape="rect" onClick="location.href='admins/create'" href="#" class="alert-link"><font face="Verdana" color="red">Insert admin</font> </a>
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
									<th>Idadmin</th>
									<th>Name and Lastname</th>
									<th>Position</th>
									<th>Email</th>
									<th>Phone</th>
									<th>DNI</th>
									<th>Operations</th>
								</tr>
							</thead>
							<tbody>
								@foreach($admins as $admin)
									<tr class="odd gradeA" rol="row">
										<td>{{$admin->id}}</td>
										<td>{{$admin->names}} {{$admin->lastname}}</td>
										<td>{{$admin->position}}</td>
										<td>{{$admin->email}}</td>
										<td>{{$admin->phone}}</td>		
										<td>{{$admin->dni}}</td>								
										<td class="center">
											<ul class="nav nav-pills">
												<li>
													<a href="{!! action('AdminController@show', $admin->id) !!}" title="View">
														<span class="glyphicon glyphicon-search"></span>
													</a>
												</li>
												<li>
													<a href="{!! action('AdminController@edit', $admin->id) !!}" title="Edit">
														<span class="glyphicon glyphicon-pencil"></span>
													</a>
												</li>
												<li>
													<form method="post" action="{!! action('AdminController@destroy', $admin->id) !!}"" onclick="return confirm('Are you sure you want to delete this register?');">
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