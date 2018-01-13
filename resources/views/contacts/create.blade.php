<h1>New Contact
	<button type="button" onclick="location.href='/contact'">BACK</button>
</h1>
<form method="post" action="/contact" autocomplete="off">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	<label>idcontact</label>
	<input type="text" autofocus name="idcontact" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>Name</label>
	<input type="text" name="name" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>Lastname</label>
	<input type="text" name="lastname" style="text-transform:uppercase;"
		   onkeyup="javascript::this.value=this.value.toUpperCase();"><br>
	<label>Email</label>
	<input type="text" name="email" style="text-transform:lowercase;"
		   onkeyup="javascript::this.value=this.value.toLowerCase();"><br> <br>
	<button type="submit">SAVE</button>
	<button type="reset">CLEAN</button>
</form>