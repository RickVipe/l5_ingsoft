<H1>Administratives List
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = '/administrative'">BACK</BUTTON>
</H1>
<FORM>
	<label>Id</label>
	<input type="text" disabled="" value="{{$administrative->id}}"> <br>
	<label>Name</label>
	<input type="text" disabled="" value="{{$administrative->name}}"> <br>
	<label>Position</label>
	<input type="text" disabled="" value="{{$administrative->position}}"> <br>
	<label>Email</label>
	<input type="text" disabled="" value="{{$administrative->email}}"> <br>	
	<label>Phone</label>
	<input type="text" disabled="" value="{{$administrative->phone}}"> <br>	
	<label>DNI</label>
	<input type="text" disabled="" value="{{$administrative->dni}}"> <br>	
</FORM>