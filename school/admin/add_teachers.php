<?php

session_start();

include("db/authentication.php");

authenticate();

$admin_id = $_SESSION['admin_id'];
$admin_name = $_SESSION['admin_name'];

$select = mysqli_query($db, "SELECT * FROM teacher");


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
			position: fixed;
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
	/*box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
	border-top: none;
	border-left: none;
	border-right: none;*/
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

<title>Add Teachers</title>
</head>
<body>

	<?php include("style.html"); 

	if(array_key_exists('sub', $_POST)) {
		$error = array();

		if(empty($_POST['fname'])) {
			$error[] = "Please enter your first name";
		} else {
			$fname = mysqli_real_escape_string($db, $_POST['fname']);
		}

		if(empty($_POST['lname'])) {
			$error[] = "Please enter your last name";
		} else {
			$lname = mysqli_real_escape_string($db, $_POST['lname']);
		}

		if(empty($_POST['class'])) {
			$error[] = "Please enter the class";
		} else {
			$class = mysqli_real_escape_string($db, $_POST['class']);
		}

		if(empty($_POST['category'])) {
			$error[] = "Please select a category";
		} else {
			$category = mysqli_real_escape_string($db, $_POST['category']);
		}

		if(empty($error)) {
			$username = strtolower($fname[0]) . "_" . strtolower($lname); 
			$pass = strtoupper(substr(md5(rand()), 0, 7));
			$class_id = 5;
			echo $pass;
			$insert = mysqli_query($db, "INSERT INTO teacher VALUES(NULL, '".$fname."', '".$lname."', '".$username."', '".$class_id."',
																	'".$pass."', '".sha1($pass)."', '".$category."')");
			header("add_teachers.php?teacher_successfully_added");
		} else {

			foreach($error as $err) {
				echo "<p>" . $err . "</p>";
			}

		}
	}


	?>

	<form class="change" action="" method="post">

		<u><center style="margin-bottom: 20px; font-size: 25px">Add Teachers</center></u>

		<p><input type = "text" name = "fname" placeholder = "First Name"/></p>
		<p><input type = "text" name = "lname" placeholder = "Last Name"/></p>
		<p><input type = "text" name = "class" placeholder = "Class"/></p>
		<p><input type = "text" name = "category" placeholder = "Category"/></p>
		<button name="sub">Add</button>

	</form>

</body>
</html>