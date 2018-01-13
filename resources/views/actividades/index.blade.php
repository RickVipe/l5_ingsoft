<H1>TODOS VUELVEN 2017
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = 'actividades/create'">NEW</BUTTON>
</H1>
<TABLE BORDER = "3">
	<THEAD>
		<TR>
			<TH>#</TH>
			<TH>CODIGO</TH>
			<TH>APELLIDOS</TH>
			<TH>NOMBRES</TH>
			<TH>CERTIFICADO</TH>
			<TH>CATEGORIA</TH>
		</TR>
	</THEAD>

	<TBODY>
		<?php
		$i = 1;
		?>
		@foreach($actividades as $actividad)
		<TR>
			<TD>{{$i}}</TD>
			<TD>{{$actividad->cod}}</TD>
			<TD>{{$actividad->apellidos}}</TD>
			<TD>{{$actividad->nombres}}</TD>
			<TD>{{$actividad->cert}}</TD>
			<TD>{{$actividad->categoria}}</TD>
			<TD>
				<a href="actividades/{{$actividad->cod}}/edit">EDIT</a>
				<FORM action="actividades/{{$actividad->cod}}" method="post">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<BUTTON>DELETE</BUTTON>
				</FORM>
			</TD>
		<?php
		$i = $i+1;
		?>	
		</TR>
		@endforeach
	</TBODY>
</TABLE>