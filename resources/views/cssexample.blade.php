<!DOCTYPE html>
<html>
<head>
	<title>Baabtra.com</title>
	<style>
		#baabtralogo {
			width: 15%;
		}
		#header {
			margin-top: -8px;
			width: 1365px;
			margin-left: -7px,
			height: 62px; /*Seems no effect*/
			/*background-color: red;*/-
		}
		hr {
			margin-top: 0px;
			margin-left: -8px,
			width: 1365px;/*1365px;*/
		}
		#body {
			background-color: rgb(30,75,102);
			height: 1350px; /*Seems no effect*/
			margin-top: -9px;
			width: 1350px;
			margin-left: -8px,
		}
		ul {
			list-style-type: none;
			display: inline-flex;
		}
		li {
			width: 130px;
		}
		#menues {
			margin-top: -52px;
			margin-left: 230px;
		}
		#inputs {
			/*background-color: cyan;*/
			width: 184px;
			margin-left: 73%;
			margin-top: 50px;
			position: absolute;
		}
		input {
			border-radius: 7px;
			width: 220px;
			height: 35px;
		}
		.heading1 {
			position: absolute;
			color: white;
			margin: 74px 124px;
		}
		#button1 {
			width: 15%;
			position: absolute;
			background: rgb(11,126,69);
			margin-top: 152px;
			margin-left: 123px;
			border-radius: 9px;
		}
		#button2 {
			width: 15%;
			position: absolute;
			background: rgb(11,126,69);
			margin-top: 152px;
			margin-left: 427px;
			border-radius: 9px;
		}
		.button3 {
			width: 15%;
			position: absolute;
			margin-top: 213px;
			margin-left: 123px;
			border-radius: 9px;
		}
		p {
			margin-top: 263px;
			margin-left: 227px;
			position: absolute;
			color: white;
			font-family: cursive;
		}
	</style>
</head>
<body>
	<div id="header">
		<img src="/images/logo.png" alt="Logo">
		<div id="menues">
			<ul>
				<li style="width: 74px">HOME</li>
				<li style="width: 169px">OFFLINE COURSES</li>
				<li style="width: 149px">ONLINE COURSES</li>
				<li style="width: 234px">BAABTRA.COM PROFILE</li>
				<li>PEOPLE</li>
				<li>CONTACT</li>
				<li>BLOG</li>
				<li>LOGIN</li>
			</ul>
		</div>
	</div>
	<hr>
	<div id="body">
		<div class="heading1">
			<h1>Learn programming @ Baabtra.com</h1>
		</div>
		<div id="button1">
			<!-- <img src=""> -->
			<button>Check out your Programme</button>
		</div>
		<div id="button2">
			<button>Check out your Programme</button>
			<!-- <img src="/images/design.png" alt="Design your course"> -->
		</div>
		<div class="button3">
			<img src="/images/left-up-arrow.png" alt="Left Arrow" style="height: 130px;width: 135px">
		</div>	
		<div class="button3">
			<img src="/images/right-up-arrow.png" alt="Right Arrow" style="margin-left: 370px;height: 130px;width: 135px">
		</div>	
		<div>
			<p>Hand pic the courses you want <br>
					or.. opt for our fully packed Programms</p>
		</div>	
		<div id="inputs">
			<input type="text" id="name" name="name" placeholder="FULL NAME"><br><br>
			<input type="email" id="email" name="email" placeholder="EMAIL ADDRESS"><br><br>
			<input type="tel" id="phone" name="phone" placeholder="MOBILE NUMBER"><br><br>
			<input type="text" name="coursename" placeholder="COURSE NAME"><br><br>
			<input type="submit" value="REGISTER NOW" name="" style="margin-top: 14px; background-color: #70bf44">
		</div>
	</div>
</body>
</html>