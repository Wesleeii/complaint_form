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

	<title>Enter Result</title>
</head>
<body>

	<?php include("style.html");


	if(isset($_GET['id'])) {
		$page_id = $_GET['id'];
	}

	?>


	
	<form action="" method="post">
		<div class="cha"">
			<h2><center>Subjects</center></h2><br/>
			<p>English Language:&nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "english"></p>
			<p>Mathematics: &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "math"></p>
			<p>Verbal Aptitude:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "verbal"></p>
			<p>Quantitative Reasoning:&nbsp &nbsp &nbsp &nbsp &nbsp <input type = "text" name = "quantitative"></p>
			<p>Vocational Studies:&nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp <input type = "text" name = "vocational"></p>
			<p>Basic Science:&nbsp&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type = "text" name = "science"></p>
			<p>Social Studies:  &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp<input type = "text" name = "social_studies"></p>
			<p>Home Economics:  &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<input type = "text" name = "home_econs"></p>

			<button name = "sub">Submit</button>

		</div>
	</form>
	
	<?php

	$error = "Please Enter Score";

	if(array_key_exists('sub', $_POST)) {

		$error = array();

		if(empty($_POST['english'])) {
			$error[] = "Please enter English Language Score";
			echo $error;
		} else {
			$english = mysqli_real_escape_string($db, $_POST['english']);
		}

		if(empty($_POST['math'])) {
			$error[] = "Please enter Mathematics Score";
			echo $error;
		} else {
			$math = mysqli_real_escape_string($db, $_POST['math']);
		}

		if(empty($_POST['verbal'])) {
			$error[] = "Please enter Verbal Aptitude Score";
			echo $error;
		} else {
			$verbal = mysqli_real_escape_string($db, $_POST['verbal']);
		}

		if(empty($_POST['quantitative'])) {
			$error[] = "Please enter Quantitative Reasoning Score";
			echo $error;
		} else {
			$quantitative = mysqli_real_escape_string($db, $_POST['quantitative']);
		}

		if(empty($_POST['vocational'])) {
			$error[] = "Please enter Vocational Studies Score";
			echo $error;
		} else {
			$vocational = mysqli_real_escape_string($db, $_POST['vocational']);
		}

		if(empty($_POST['science'])) {
			$error[] = "Please enter Science Score";
			echo $error;
		} else {
			$science = mysqli_real_escape_string($db, $_POST['science']);
		}

		if(empty($_POST['social_studies'])) {
			$error[] = "Please enter Social Studies Score";
			echo $error;
		} else {
			$social_studies = mysqli_real_escape_string($db, $_POST['social_studies']);
		}

		if(empty($_POST['home_econs'])) {
			$error[] = "Please enter Home Economics Score";
			echo $error;
		} else {
			$home_econs = mysqli_real_escape_string($db, $_POST['home_econs']);
		}

		if(empty($error)) {

			$select = mysqli_query($db, "SELECT * FROM result WHERE student_id = '".$page_id."'") or die(mysqli_error($db));

			if(mysqli_num_rows($select) < 1) {

				$final = ($english + $math + $verbal + $quantitative + $vocational + $science + $social_studies + $home_econs)/8;

				$query = mysqli_query($db, "INSERT INTO result VALUES ('".$page_id."', '".$english."', '".$math."',
					'".$verbal."', '".$quantitative."', '".$vocational."',
					'".$science."', '".$social_studies."', '".$home_econs."', '".$final."') ") or die(mysqli_error($db));

			}



		} else {
			foreach($error as $err) {


			}
		}


	}

	


	?>


</body>
</html>