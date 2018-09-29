<?php

session_start();

include ("db/authentication.php");

authenticate();

include("function.php");

$admin_id = $_SESSION['admin_id'];
$admin_name = $_SESSION['admin_name'];

if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$select = mysqli_query($db, "SELECT * FROM student WHERE teacher_id = '".$id."'") or die(mysqli_error($db));

?>

<!DOCTYPE html>
<html>
<head>

	<?php include("../teacher/style.css"); ?>

	<title>View Students</title>
</head>
<body>

	<?php include("style.html"); ?>

	<table border="1" id="first">

		<tr>

			<th>S/N</th><th>Name</th><th>Age</th>

		</tr>

		<?php

			$teach = viewRegister($select);
			echo $teach;

		?>

	</table>

</body>
</html>