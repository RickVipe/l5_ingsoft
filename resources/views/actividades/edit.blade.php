<H1>EDITAR INSCRITO
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = '/actividades'">BACK</BUTTON>
</H1>
<FORM method="post" action="/actividades/{{$actividades->cod}}" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
	<label>CODIGO</label>
	<input type="text" autofocus name="cod" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"
		   value="{{$actividades->cod}}"><br>
	<label>APELLIDOS</label>
	<input type="text" name="apellidos" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"
		   value="{{$actividades->apellidos}}"><br>
	<label>NOMBRES</label>
	<input type="text" name="nombres" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"
		   value="{{$actividades->nombres}}"><br> 
	<label>CERTIFICADO</label>
	<select name="cert">
		@if ($actividades->cert == 0): 
			<option value = "0">
				NO
			</option>
			<option value = "1">
				SI
			</option>
		@endif
		@if ($actividades->cert == 1): 
			<option value = "1">
				SI
			</option>
			<option value = "0">
				NO
			</option>
		@endif
	</select><br>
	<label>CATEGORIA</label>
	<select name="categoria">	
		@if ($actividades->categoria == "ASISTENTE"): 
			<option value = "ASISTENTE">
				ASISTENTE
			</option>
			<option value = "PONENTE">
				PONENTE
			</option>
			<option value = "ORGANIZADOR">
				ORGANIZADOR
			</option>
		@endif
		@if ($actividades->categoria == "PONENTE"): 
			<option value = "PONENTE">
				PONENTE
			</option>
			<option value = "ASISTENTE">
				ASISTENTE
			</option>
			<option value = "ORGANIZADOR">
				ORGANIZADOR
			</option>
		@endif
		@if ($actividades->categoria == "ORGANIZADOR"): 
			<option value = "ORGANIZADOR">
				ORGANIZADOR
			</option>
			<option value = "ASISTENTE">
				ASISTENTE
			</option>
			<option value = "PONENTE">
				PONENTE
			</option>
		@endif

	</select><br>
	<button type="submit">Save</button>
	<button type="reset">Reset</button>
</FORM>