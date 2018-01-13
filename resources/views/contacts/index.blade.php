<H1>Contacts List
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = 'contact/create'">NEW</BUTTON>
</H1>
<TABLE BORDER = "1">
	<THEAD>
		<TR>
			<TH>Contact ID</TH>
			<TH>NAMES</TH>
			<TH>EMAIL</TH>
			<TH>OPERATIONS</TH>
		</TR>
	</THEAD>

	<TBODY>
		@foreach($contacts as $contact)
		<TR>
			<TD>{{$contact->idcontact}}</TD>
			<TD>{{$contact->lastname}} - {{$contact->name}}</TD>
			<TD>{{$contact->email}}</TD>
			<TD>
				<a href="contact/{{$contact->idcontact}}">LOOK</a> - 
				<a href="contact/{{$contact->idcontact}}/edit">EDIT</a> - 
				<FORM action="contact/{{$contact->idcontact}}" method="post">
					{{csrf_field()}}
					{{method_field('DELETE')}}
					<BUTTON>DELETE</BUTTON>
				</FORM>
			</TD>
		</TR>
		@endforeach
	</TBODY>
</TABLE>
{{$contacts->render()}}