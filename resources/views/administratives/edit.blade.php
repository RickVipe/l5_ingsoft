<H1>Edit Administrative
	<BUTTON TYPE = "BUTTON" ONCLICK = "location.href = '/administrative'">BACK</BUTTON>
</H1>
<FORM method="post" action="/administrative/{{$administrative->id}}" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
	<label>Name</label>
	<input type="text" name="name" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$administrative->name}}"> <br>
	<label>Position</label>	
	<select name="position" id="position">
	<option>{{$administrative->position}}</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
	</select><br>
	<label>Email</label>
	<input type="text" name="email" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$administrative->email}}"> <br>
	<label>Phone</label>
	<input type="text" name="phone" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$administrative->phone}}"> <br>
	<label>DNI</label>
	<input type="text" name="dni" style="text-transform:uppercase;" 
	onkeyup="javascript:this.value=this.value.toUpperCase();"
	value="{{$administrative->dni}}"> <br> <br>
	<button type="submit">Save</button>
	<button type="reset">Reset</button>
</FORM>