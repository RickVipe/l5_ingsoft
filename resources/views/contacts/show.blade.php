<H1>Contacts List
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = '/contact'">BACK</BUTTON>
</H1>
<FORM>
	<label>IdContact</label>
	<input type="text" disabled="" value="{{$contact->idcontact}}"> <br>
	<label>Name</label>
	<input type="text" disabled="" value="{{$contact->name}}"> <br>
	<label>Lastname</label>
	<input type="text" disabled="" value="{{$contact->lastname}}"> <br>
	<label>Email</label>
	<input type="text" disabled="" value="{{$contact->email}}"> <br>	
</FORM>