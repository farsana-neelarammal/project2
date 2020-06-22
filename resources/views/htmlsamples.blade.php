<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Samples</title>
</head>
<body>
<fieldset>
	<legend>Registration</legend>
	<form>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" placeholder="Enter your Name" required><br>

		<label for="email">Email</label>
		<input type="email" name="email" id="email" required> <br>

		<label for="date">DOB</label>
		<input type="Date" name="date" id="date" required><br>

		<label name="gender">Gender</label><br>
		<input type="radio" name="gender" id="female" checked>
		<label for="female">Female</label>
		<input type="radio" name="gender" id="male">
		<label for="male">Male</label><br>

		<label for="religion">Religion</label>
		<select name="religion" id="religion" required>
			<option value="">Choose one</option>
			<option value="M">Muslim</option>
			<option value="H" selected>Hindu</option>
			<option value="C">Christian</option>
		</select><br>

		<label for="photo">Photo</label>
		<input type="file" name="photo" id="photo"><br>

		<label for=""></label>
		<label for=""></label>
		<button>Submit</button>
		<input type="reset" name="reset" value="Reset">
	</form>
</fieldset>

<audio controls="">
	<source src="" >
</audio>

<video>
	<source src="">
</video>

</body>
</html>