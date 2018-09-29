<?php

session_start();

include("db/authentication.php");
include("function.php");

authenticate();

$admin_id = $_SESSION['admin_id'];
$admin_name = $_SESSION['admin_name'];

$select = mysqli_query($db, "SELECT * FROM teacher") or die(mysqli_error($db));
$query = mysqli_query($db, "SELECT * FROM class") or die(mysqli_error($db));

?>

<!DOCTYPE html>
<html>
<head>


	<?php include("../teacher/style.css"); ?>

	<title>View Teachers</title>
</head>
<body>

	<?php include("style.html"); ?>

	<table id="first" border="1">

		<tr>

			<th>S/N</th><th>Teacher Name</th>

		</tr>

		<?php 

			$teachers = viewTeachers($select);
			echo $teachers;

		?>


	</table>

</body>
</html>