<h1>New Administrative
	<button type="button" onclick="location.href='/administrative'">BACK</button>
</h1>
<form method="post" action="/administrative" autocomplete="off">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>ID</label>
	<input type="text" autofocus name="id" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>Name</label>
	<input type="text" name="name" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>Position</label>
	<select name="position" id="position">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
    <option value="6">6</option>
	</select><br>
	<label>Email</label>
	<input type="text" name="email" style="text-transform:lowercase;"
		   onkeyup="javascript::this.value=this.value.toLowerCase();"><br> 
	<label>Phone</label>
	<input type="text" name="phone" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>DNI</label>
	<input type="text" name="dni" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br> <br>
	<button type="submit">SAVE</button>
	<button type="reset">CLEAN</button>
</form>