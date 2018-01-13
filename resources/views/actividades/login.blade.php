<h1>LOGEATE PERRO</h1>
<form method="post" action="/actividades" autocomplete="off">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>PASSWORD</label>
	<input type="text" name="password"><br>
	<button type="submit">LOGIN</button>
	<button type="reset">CLEAN</button>
</form>