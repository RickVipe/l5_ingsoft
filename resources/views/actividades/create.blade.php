<h1>NUEVO INSCRITO
	<button type="button" onclick="location.href='/actividades'">BACK</button>
</h1>
<form method="post" action="/actividades" autocomplete="off">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>CODIGO</label>
	<input type="text" autofocus name="cod" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>APELLIDOS</label>
	<input type="text" name="apellidos" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>NOMBRES</label>
	<input type="text" name="nombres" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br> 
	<label>CERTIFICADO</label>
	<select name="cert">
    <option value="0">NO</option>
    <option value="1">SI</option>
	</select><br>
	<label>CATEGORIA</label>
	<select name="categoria">
    <option value="ASISTENTE">ASISTENTE</option>
    <option value="PONENTE">PONENTE</option>
    <option value="ORGANIZADOR">ORGANIZADOR</option>
	</select><br>
	<button type="submit">SAVE</button>
	<button type="reset">CLEAN</button>
</form>