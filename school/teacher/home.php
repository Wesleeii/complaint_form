<?php

session_start();

include("db/db_config.php");




/*echo "Teacher ID: " . $teacher_id . "<br/>";
echo "Username: " . $username . "<br/>";
echo "Class ID: " . $class_id . "<br/>";*/

if(array_key_exists('t_login', $_POST)) {

	$error = array();

	if(empty($_POST['t_username'])) {
		$error[] = "Username Field Empty";
	} else {
		$t_username = mysqli_real_escape_string($db, $_POST['t_username']);
	}

	if(empty($_POST['t_pass'])) {
		$error[] = "Password Field Empty";
	} else {
		$t_pass = sha1(mysqli_real_escape_string($db, $_POST['t_pass']));
	}

	if(empty($error)) {
		$query = mysqli_query($db, "SELECT * FROM teacher WHERE username = '".$t_username."' AND secured_password = '".$t_pass."'");


		if(mysqli_num_rows($query) == 1) {
			$result = mysqli_fetch_array($query);
			$_SESSION['teacher_id'] = $result['teacher_id'];
			$_SESSION['teacher_name'] = $result['last_name'] . ", " . $result['first_name'];
			$_SESSION['class_id'] = $result['class_id'];
			header("Location: teacher_landing.php");
		} else {
			$fail = "Login Failed";
			header("Location: home.php?status=$fail");
		}
	} else {
		foreach($error as $err) {
			echo $err . "<br/>";
		}
	}

}


if(array_key_exists('s_login', $_POST)) {

	$errorx = array();

	if(empty($_POST['s_username'])) {
		$errorx[] = "Username Field Empty";
	} else {
		$s_username = mysqli_real_escape_string($db, $_POST['s_username']);
	}

	if(empty($_POST['s_pass'])) {
		$errorx[] = "Password Field Empty";
	} else {
		$s_pass = sha1(mysqli_real_escape_string($db, $_POST['s_pass']));
	}

	if(empty($errorx)) {
		$query = mysqli_query($db, "SELECT * FROM student WHERE user_name = '".$s_username."' AND secured_password = '".$s_pass."'");


		if(mysqli_num_rows($query) == 1) {
			$result = mysqli_fetch_array($query);
			$_SESSION['student_id'] = $result['student_id'];
			$_SESSION['student_name'] = $result['first_name'] . " " . $result['last_name'];
			$_SESSION['teacher_id'] = $result['teacher_id'];
			header("Location: ../student/student_landing.php");
		} else {
			$fail = "Login Failed";
			header("Location: home.php?status=$fail");
		}
	} else {
		foreach($errorx as $err) {
			echo $err . "<br/>";
		}
	}

}


if(array_key_exists('a_login', $_POST)) {

	$errory = array();

	if(empty($_POST['a_username'])) {
		$errory[] = "Username Field Empty";
	} else {
		$a_username = mysqli_real_escape_string($db, $_POST['a_username']);
	}

	if(empty($_POST['a_pass'])) {
		$errory[] = "Password Field Empty";
	} else {
		$a_pass = sha1(mysqli_real_escape_string($db, $_POST['a_pass']));
	}

	if(empty($errory)) {
		$query = mysqli_query($db, "SELECT * FROM admin WHERE username = '".$a_username."' AND secured_password = '".$a_pass."'");


		if(mysqli_num_rows($query) == 1) {
			$result = mysqli_fetch_array($query);
			$_SESSION['admin_id'] = $result['admin_id'];
			$_SESSION['admin_name'] = $result['first_name'] . " " . $result['last_name'];
			header("Location: ../admin/admin_landing.php");
		} else {
			$fail = "Login Failed";
			header("Location: home.php?status=$fail");
		}
	} else {
		foreach($errory as $err) {
			echo "<p id=\"different\">" . $err . "</p>";
		}
	}

}

?>

<!DOCTYPE html>
<html>
<head>

	<style>

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		button {
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);
			font-family: Raleway;
			cursor: pointer;
		}

		body {
			background-image: url("k.jpeg");
			background-size: cover;
			font-family: Raleway;
		}

		#different {
			position: absolute;
			top: 30px;
		}

		.header {
			width: 100%;
			height: 5em;
		}

		.links {
			position: absolute;
			margin-top: 20px;
			right: 0;
		}

		.links a {
			margin: 15px;
		}

		.top {
			background-color: #74BC60;
			position: absolute;
			right: 13%;
			top: 8%;
			padding: 0.7em;
			width: 5.5em;
			border-radius: 3px;
			border: 1px solid #74BC60;
			font-size: 0.9em;
		}

		.content {
			font-family: "PT Serif";
			text-align: center;
			vertical-align: center;
			margin-top: 120px;
			font-size: 50px;
			color: #D5D7D6;
		}

		#subcap {
			text-align: center;
			margin-top: 20px;
			font-size: 20px;
			font-family: Raleway;
		}

		hr {
			width: 30%;
			margin: 50px auto;
		}

		#under {
			text-align: center;
		}

		#under button {
			margin-top: 60px;
			padding: 0.7em;
			width: 12.8em;
			border-radius: 3px;
			border: 1px solid black;
			font-size: 0.9em;
			margin-right: 10px;
		}

		.login-block {
			width: 400px;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			border-top: 5px solid #2980b9;
			margin: 0 auto;
		}

		.login-block h1 {
			text-align: center;
			color: #000;
			font-size: 18px;
			margin-top: 0;
			margin-bottom: 20px;
		}

		.login-block input, #x {
			width: 100%;
			height: 42px;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			font-size: 14px;
			font-family: Montserrat;
			padding: 0 20px 0 50px;
			outline: none;
		}

		.login-block input#username {
			background: #fff url("u.png") 20px top no-repeat;
			background-size: 16px 80px;
		}

		.login-block input#username:focus {
			background: #fff url("u.png") 20px bottom no-repeat;
			background-size: 16px 80px;
		}

		.login-block input#password {
			background: #fff url("p.png") 20px top no-repeat;
			background-size: 16px 80px;
		}

		.login-block input#password:focus {
			background: #fff url("p.png") 20px bottom no-repeat;
			background-size: 16px 80px;
		}

		.login-block input:active, .login-block input:focus {
			border: 1px solid #2077CF; 
		}

		.login-block button {
			width: 100%;
			height: 40px;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #2980b9;
			color: #fff;
			background-color: #2980b9;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 14px;
			font-family: Montserrat;
			outline: none;
			cursor: pointer;
		}

		.login-block button:hover {
			background: #2980b9;
		}

		.login-blockx {
			width: 400px;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			border-top: 5px solid #74BC60;
			margin: 0 auto;
		}

		.login-blockx h1 {
			text-align: center;
			color: #000;
			font-size: 18px;
			margin-top: 0;
			margin-bottom: 20px;
		}

		.login-blockx input, #x {
			width: 100%;
			height: 42px;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #ccc;
			margin-bottom: 20px;
			font-size: 14px;
			font-family: Montserrat;
			padding: 0 20px 0 50px;
			outline: none;
		}

		.login-blockx input#username {
			background: #fff url("u.png") 20px top no-repeat;
			background-size: 16px 80px;
		}

		.login-blockx input#username:focus {
			background: #fff url("u.png") 20px bottom no-repeat;
			background-size: 16px 80px;
		}

		.login-blockx input#password {
			background: #fff url("p.png") 20px top no-repeat;
			background-size: 16px 80px;
		}

		.login-blockx input#password:focus {
			background: #fff url("p.png") 20px bottom no-repeat;
			background-size: 16px 80px;
		}

		.login-blockx input:active, .login-blockx input:focus {
			border: 1px solid #74BC60; 
		}

		.login-blockx button {
			width: 100%;
			height: 40px;
			box-sizing: border-box;
			border-radius: 5px;
			border: 1px solid #74BC60;
			color: #fff;
			background-color: #74BC60;
			font-weight: bold;
			text-transform: uppercase;
			font-size: 14px;
			font-family: Montserrat;
			outline: none;
			cursor: pointer;
		}

		.login-blockx button:hover {
			background: #2980b9;
		}

		.modal {
			display: none; /* Hidden by default */
			position: fixed; /* Stay in place */
			z-index: 1; /* Sit on top */
			left: 0;
			top: 0;
			width: 100%; /* Full width */
			height: 100%; /* Full height */
			overflow: auto; /* Enable scroll if needed */
			background-color: rgb(0,0,0); /* Fallback color */
			background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			padding-top: 60px;
		}

		/*.modal-content {
			background-color: #fefefe;
			margin: 5px auto; /* 15% from the top and centered 
			border: 1px solid #888;
			width: 60%;  Could be more or less, depending on screen size 
			height: 100px;
		}*/

		.close {
			/* Position it in the top right corner outside of the modal */
			position: absolute;
			right: 25px;
			top: 0;
			color: #000;
			font-size: 35px;
			font-weight: bold;
		}

		.close:hover,
		.close:focus {
			color: red;
			cursor: pointer;
		}

		.animate {
			-webkit-animation: animatezoom 0.6s;
			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom {
			from {-webkit-transform: scale(0)}
			to {-webkit-transform: scale(1)}
		}

		@keyframes animatezoom {
			from {transform: scale(0)}
			to {transform: scale(1)}
		}

	</style>

	<title>Homepage</title>

</head>
<body>

	<div class="header">
		<!---<img style="position: absolute; left: 10%; top: 4%" src="f.png" width="110px"/>-->

	</div>
</div>

<button class="top" name="user_log">Login</button>

<div class="content">

	<p id="caption">Welcome to Swapspace</p>
	<p id="subcap">The best and easiest way to manage your school data and<br/>
		organize properly your data into manageable sets</p>

		<hr/>

	</div>

	<div id="under">

		<p style="font-size: 20px;">Login Here</p>

		<button onclick ="document.getElementById('id03').style.display='block'" style="background-color: #74BC60; border: 1px solid #74BC60">Admin Login</button>
		<button onclick ="document.getElementById('id01').style.display='block'" style="background-color: #2077CF; border: 1px solid #2077CF">Teacher Login</button>
		<button onclick ="document.getElementById('id02').style.display='block'" style="background-color: #2077CF; border: 1px solid #2077CF">Student Login</button>

	</div>


	<div id="id01" class="modal">
		<span onclick="document.getElementById('id01').style.display='none'"
		class="close" title="Close"><img src="close.png" width=30px style="position: absolute; right: 485px; top: 80px"/></span>



		<form action="" method="post" class="modal-content animate">

			<div class="container">

				<div class="login-block">
					<h1>Teacher Login</h1>
					<input type="text" name="t_username" id="username" placeholder="Username"/>
					<input type="password" name="t_pass" id="password" placeholder="Password"/>
					<button name="t_login">Login</button>

				</div>
			</div>

			<div class="container" style="background-color: #f1f1f1">

			</div>

		</form>

	</div>


	<div id="id02" class="modal">
		<span onclick="document.getElementById('id02').style.display='none'"
		class="close" title="Close"><img src="close.png" width=35px style="position: absolute; right: 485px; top: 80px"/></span>

		<form action="" method="post" class="modal-content animate">
			<div class="container">

				<div class="login-block">
					<h1>Student Login</h1>
					<input type="text" name="s_username" id="username" placeholder="Username"/>
					<input type="password" name="s_pass" id="password" placeholder="Password"/>
					<button name="s_login">Login</button>

				</div>
			</div>

			<div class="container" style="background-color: #f1f1f1">

			</div>

		</form>

	</div>

	<div id="id03" class="modal">
		<span onclick="document.getElementById('id03').style.display='none'"
		class="close" title="Close"><img src="close.png" width=30px style="position: absolute; right: 485px; top: 80px"/></span>

		<form action="" method="post" class="modal-content animate">
			<div class="container">

				<div class="login-blockx">
					<h1>Admin Login</h1>
					<input type="text" name="a_username" id="username" placeholder="Username"/>
					<input type="password" name="a_pass" id="password" placeholder="Password"/>
					<button name="a_login">Login</button>

				</div>
			</div>

			<div class="container" style="background-color: #f1f1f1">

			</div>

		</form>

	</div>



</body>
</html>