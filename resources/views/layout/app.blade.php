<!DOCTYPE html>
<html>
	<head>
		<title>App Name - @yield('title')</title>
	</head>
	<body>
		@section('menu')
			Menu master.
	@show

	<div class="container">
		@yield('content')
	</div>
	</body>
</html>