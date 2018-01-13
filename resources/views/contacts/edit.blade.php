<H1>Edit Contact
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = '/contact'">BACK</BUTTON>
</H1>
<FORM method="post" action="/contact/{{$contact->idcontact}}" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
	<label>Name</label>
	<input type="text" name="name" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$contact->name}}"> <br>
	<label>Lastname</label>
	<input type="text" name="lastname" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$contact->lastname}}"> <br>
	<label>Email</label>
	<input type="text" name="email" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$contact->email}}"> <br> <br>
	<button type="submit">Save</button>
	<button type="reset">Reset</button>
</FORM>