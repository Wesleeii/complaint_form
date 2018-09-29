<?php

session_start();

include("db/db_config.php");


?>



<!DOCTYPE html>
<html>
<head>
	<title>Teacher Login</title>
</head>
<body>

	<?php

		if(array_key_exists('sub', $_POST)) {

			$error = array();

			if(empty($_POST['uname'])) {

				$error[] = "Please enter your username";

			} else {

				$uname = mysqli_real_escape_string($db, $_POST['uname']);

			}

			if(empty($_POST['pword'])) {

				$error[] = "Please enter your password";

			} else {

				$pword = sha1(mysqli_real_escape_string($db, $_POST['pword']));

			}

			if(empty($error)) {

				$query = mysqli_query($db, "SELECT * FROM teacher WHERE username = '".$uname."'
																	AND secured_password = '".$pword."' ");

				

				if(mysqli_num_rows($query) == 1) {

					$result = mysqli_fetch_array($query);

					$_SESSION['teacher_id'] = $result['teacher_id'];
					$_SESSION['username'] = $result['username'];
					$_SESSION['class_id'] = $result['class_id'];

					header("Location: home.php");

				} else {
					header("Location: login.php?failed");
				}

			} else {
				foreach($error as $err) {
					echo $err . "<br/>";
				}
			}

		}


	?>


	<form action="" method="post">

		<p><input type="text" name="uname" placeholder="Username"/></p>

		<p><input type="password" name="pword" placeholder="Password"/></p>

		<input type="submit" name="sub" value="Login"/>



	</form>

</body>
</html>