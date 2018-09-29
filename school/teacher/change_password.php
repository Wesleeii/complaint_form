<?php

	session_start();

	include("db/authentication.php");

	authenticate();

	$teacher_id = $_SESSION['teacher_id'];
	$teacher_name = $_SESSION['teacher_name'];

?>

<!DOCTYPE html>
<html>
<head>

<?php include("style.css"); ?>

	<title>Change Password</title>
</head>
<body>

	<?php include("style.html"); 

	$select = mysqli_query($db, "SELECT password FROM teacher WHERE teacher_id = '".$teacher_id."'");
	$row = mysqli_fetch_array($select);
	$pw = $row['password'];

	if(array_key_exists('sub', $_POST)) {

		$error = array();

		if(empty($_POST['old'])) {
			$error[] = "Please Enter your Current Password";
		} else {
			$old = mysqli_real_escape_string($db, $_POST['old']);
		} 

		if(empty($_POST['new'])) {
			$error[] = "Please enter New Password";
		} else {
			$new = mysqli_real_escape_string($db, $_POST['new']);
		}

		if(empty($_POST['confirm'])) {
			$error[] = "Please confirm New Password";
		} else {
			$confirm = mysqli_real_escape_string($db, $_POST['confirm']);
		}

		if($_POST['old'] !== $pw) {
			$error[] = "Wrong Password";
		} else

		if($_POST['old'] == $_POST['new']) {
			$error[] = "You have to change to a new password";
		} else

		if($_POST['new'] !== $_POST['confirm']) {
			$error[] = "Passwords do not match";
		}

		if(empty($error)) {


			$query = mysqli_query($db, "UPDATE teacher SET password = '".$new."', secured_password = '".sha1($new)."' WHERE teacher_id = '".$teacher_id."' " ) or die(mysqli_error($db));
			header("Location: change_password.php?success");
		} else {
			foreach($error as $err) {
				echo $err . "<br/>";
			}
		}
	}



	?>

	<div class="change">

	<form action="" method="post">

	<p> <center style="font-size: 25px;">Change Password</center> </p>
	<br/>

	<p><input type="password" name="old" placeholder="Current Password"></p>
	<p><input type="password" name="new" placeholder="New Password"></p>
	<p><input type="password" name="confirm" placeholder="Confirm New Password"></p>
	<button name="sub">Submit</button>

	</form>

	</div>

</body>
</html>