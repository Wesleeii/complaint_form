<?php

session_start();

include("db/authentication.php");
include("function.php");

authenticate();

$student_id = $_SESSION['student_id'];
$student_name = $_SESSION['student_name'];
$teacher_id = $_SESSION['teacher_id'];


$query = mysqli_query($db, "SELECT * FROM result WHERE student_id = '".$student_id."'") or die(mysqli_error($db));


?>

<!DOCTYPE html>
<html>
<head>

	<?php include ("../teacher/style.css");  ?>

	<title>View Results</title>
</head>
<body>

	<?php include("style.html"); ?>

	<table id="stud" border="1">


		<tr style="margin-bottom: 35px">

			<center><th colspan="2" style="font-size: 20px; padding: 10px; background-color: #b2c7ea;"><?php echo "Term Report: " .$student_name ?></th>

			</tr>

			<tr>

				<th>Subjects</th><th>Scores</th>

			</tr>

			<?php 

			$student = viewResults($query);
			echo $student;

			?>

		</table>

	</body>
	</html>