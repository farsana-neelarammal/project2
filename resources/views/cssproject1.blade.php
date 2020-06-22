<!DOCTYPE html>
<html>
<head>
	<title>Baabtra</title>
	<style>
		#header {
			height: 60px;
		}
		#body {
			background-color: blue;
			height: 80%;/*why this does not work*/


		}		
		#left-block {
			width: 60%;
			text-align: center;
			color: white;
			padding-top: 15px;
			padding-bottom: 15px;

		}
		#right-block {
			width: 40%;
			text-align: center;


		}
		.input {
			width: 180px;
		}
/*		#block1 {
			text-align: center;
			color: white;
			padding-top: 15px;
			padding-bottom: 15px;
		}*/
/*		#block2 {
			text-align: center;
			color: white;
		}*/
		#block3 {
			font-family: cursive;
		}

	</style>
</head>
<body>
	<div id="header">
		<div>
			<img src="logo.png" alt="Logo">
		</div>
		<div id="nav">
			<nav>
				<a href="#">HOME</a>
				<a href="#">OFFLINE COURSES</a>
				<a href="#">ONLINE COURSES</a>
				<a href="#">BAABTRA.COM PROFILE</a>
				<a href="#">PEOPLE</a>
				<a href="#">CONTACT</a>
				<a href="#">BLOG</a>
				<a href="#">LOGIN</a>
			</nav>
		</div>
	</div>
	<div id="body">
		<div id="left-block">
			<div id="block1">
				<h1>Learn Programming @ baabtra.com</h1>
			</div>
			<div id="block2">
				<button>Ckeck out your PROGRAMME</button>
				<button>Design your COURSE</button>
			</div>
			<div id="block3">
				<div id="arrow-left"></div>
				<div id="block3-text">
					<p>Hand pic the courses you want <br>
					or.. opt for our fully packed Programms</p>
				</div>
				<div id="arrow-right"></div>
			</div>
		</div>
		<div id="right-block">
			<input class="input" type="text" id="name" name="name" placeholder="FULL NAME"><br>
			<input class="input" type="email" id="email" name="email" placeholder="EMAIL ADDRESS"><br>
			<input class="input" type="tel" id="phone" name="phone" placeholder="MOBILE NUMBER"><br>
			<select class="input">
				<option value="">Course Name</option>
				<option value="php">PHP</option>
				<option value="phython">PHYTHON</option>
			</select><br>
			<button class="input">Register Now</button>
		</div>
	</div>
</body>
</html>