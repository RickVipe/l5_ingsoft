@extends('layout.app')
@section('title', 'Child Page')
@section('menu')
	@parent
	<p>parent - calls parents content</p>
	<p>from here child's page description</p>
	<h1>show parameter : {{$name}}; sent from Route</h1>
	<h2>Route{$name} --> DemoController --> child.blade</h2>
	<h3>For in BLADE</h3>
	@for($i = 0; $i < 10; $i++)
		<li>Actual Value is: {{$i}}</li>
	@endfor
@endsection
@section('content')
	<p>here the body</p>
@endsection