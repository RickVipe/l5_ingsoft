<H1>administratives List
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = 'administrative/create'">NEW</BUTTON>
</H1>
<TABLE BORDER = "1">
	<THEAD>
		<TR>
			<TH>ID</TH>
			<TH>NAMES</TH>
			<TH>POSITION</TH>
			<TH>EMAIL</TH>
			<TH>PHONE</TH>
			<TH>DNI</TH>
			<TH>OPERATIONS</TH>
		</TR>
	</THEAD>

	<TBODY>
		@foreach($administratives as $administrative)
		<TR>
			<TD>{{$administrative->id}}</TD>
			<TD>{{$administrative->name}}</TD>
			<TD>{{$administrative->position}}</TD>
			<TD>{{$administrative->email}}</TD>
			<TD>{{$administrative->phone}}</TD>
			<TD>{{$administrative->dni}}</TD>
			<TD>
				<a href="administrative/{{$administrative->id}}">LOOK</a> - 
				<a href="administrative/{{$administrative->id}}/edit">EDIT</a> - 
				<FORM action="administrative/{{$administrative->id}}" method="post">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<BUTTON>DELETE</BUTTON>
				</FORM>
			</TD>
		</TR>
		@endforeach
	</TBODY>
</TABLE>
{{$administratives->render()}}