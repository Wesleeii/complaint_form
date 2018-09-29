<?php

session_start();

include("db/authentication.php");
authenticate();

$teacher_id = $_SESSION['teacher_id'];
$teacher_name = $_SESSION['teacher_name'];
$class_id = $_SESSION['class_id'];
?>

<!DOCTYPE html>
<html>
<head>

	<style>


		* {
			margin: 0;
			padding: 0;
			font-family: Raleway;
			box-sizing: border-box;
		}

		#header {
			height: 50px;
			position: absolute;
			top: 16px;
			width: 100%;
			background-color: #2077CF;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);
		}

		a {
			text-decoration: none;
		}

		#links {
			position: fixed;
			right: 20px;
			top: 32px;
		}

		#links a {
			margin-right: 30px;
			color: #D5D7D6;
			font-size: 14px;
		}

		#links a:hover {
			text-decoration: line-through;
			color: #F0C237;
		}


		#logout {
			font-size: 12px;
			position: absolute;
			right: 15px;
		}

		#logout a {
			margin-right: 30px;
			padding: 15px;
		}

		#logout a:hover {
			background-color: #F0C237;
			border-radius: 15px;
			box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.18);
		}


		.change {
			position: absolute;
			top: 150px;
			right: 35%;
		}

		.change input[type=password], input[type=text] {
			padding: 10px;
			margin-bottom: 15px;
			width: 400px;
			box-sizing: border-box;
			padding: 10px;
			outline: none;
			border-radius: 7px;
			border-bottom: 2px solid #1e1f21;
			border-top: 2px solid #f1f1f1;
			border-left: 2px solid #f1f1f1;
			border-bottom-color: #f2f2f2;
			transition: border-bottom-color 0.5s;
			transition-timing-function: linear;
			font-size: 20px;
		}

		.change input[type=password]:focus, input[type=text]:focus {
			border-bottom: 2px solid #F0C237;
			background-color: #f1f1f1;

		}

		.change button {
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border-bottom: 3px solid #f1f1f1;
			border-top: 1px solid #f1f1f1;
			border-left: 1px solid #f1f1f1;
			border-right: 1px solid #f1f1f1;
			background-color: #2077CF;
			font-size: 20px;
		}

		.change button:hover {
			border: 1px solid #F0C237;
			background-color: #345b96;
		}


	</style>
	<title>Add Student</title>
</head>
<body>


	<?php

	include("style.html");

	if(array_key_exists('sub', $_POST)) {

		$error = array();

		if(empty($_POST['fname'])) {
			$error[] = "Please enter your first name";
			echo "<div id=\"pos1\">Enter your First Name</div>";
		} else {
			$fname = mysqli_real_escape_string($db, $_POST['fname']);
			$u = strtolower($fname[0]);
		}

		if(empty($_POST['lname'])) {
			$error[] = "Please enter your last name";
			echo "<div id=\"pos2\">Enter your Last Name</div>";
		} else {
			$lname = mysqli_real_escape_string($db, $_POST['lname']);
		}

		if(empty($_POST['age'])) {
			$error[] = "Please enter your age";
			echo "<div id=\"pos3\">Enter your Age</div>";
		} else {
			$age = mysqli_real_escape_string($db, $_POST['age']);
		}


		/*if(empty($_POST['uname'])) {
			$error[] = "Please enter student's username";
			echo "<div id=\"pos3\">Enter your username</div>";
		} else {
			$uname = mysqli_real_escape_string($db, $_POST['uname']);
		}*/

		if(empty($error)) {

			$pass = substr(md5(rand()), 0, 7);
			$user = $u . "_" . strtolower($lname);

			$query = mysqli_query($db, "INSERT INTO student VALUES(NULL, '".$fname."', 
				'".$lname."', '".$user."', '".$pass."', '".sha1($pass)."', 
				'".$age."', 
				'".$class_id."',
				'".$teacher_id."',
				NOW())");	
			unset($_POST['fname'], $_POST['lname'], $_POST['uname'], $_POST['age']);
		} else {
			foreach($error as $err) {
				//echo "<div id=\"pos\"> <p>" . $err . "</p> </div>";
			}
		}


	}

	if(isset($_GET['msg'])) {
		echo "<p>" . $_GET['msg'] . "</p>";
	}

	?>

	<div class="change">
		<form action="" method="post">

			<p><input type="text" name="fname" placeholder="First Name" value = "<?php if(isset($_POST['fname'])) { echo $_POST['fname'];} ?>"/></p>

			<p><input type ="text" name="lname" placeholder="Last Name" value="<?php if(isset($_POST['lname'])) { echo $_POST['lname']; } ?>"/></p>

			<p><input type="text" name="age" placeholder="Age" value="<?php if(isset($_POST['age'])) { echo $_POST['age']; } ?>"/></p>
			<button name="sub">Register</button>
		</form>
	</div>



</body>
</html>