<?php

session_start();

include("db/authentication.php");

authenticate();

$teacher_id = $_SESSION['teacher_id'];
$teacher_name = $_SESSION['teacher_name'];

$select = mysqli_query($db, "SELECT * FROM student WHERE teacher_id = '".$teacher_id."' ORDER BY last_name ") or die(mysqli_error($db));


?>

<!DOCTYPE html>
<html>
<head>

	<?php include("style.css") ?>

	<title>View Students</title>
</head>
<body>


	<?php include("style.html"); ?>


	<table id="first" border="1">

	<tr style="background-color: #2077CF; color: white;">

			<th></th><th>Name</th>
		</tr>

		<tr>
			
			<?php $i = 1; 
			while ($result = mysqli_fetch_array($select)) {

				extract($result);

			 ?>

			<td style="width: 10px"> <?php echo $i ?> </td>
			<td> <a href="insert_result.php?id=<?php echo $student_id ?>"> <?php echo $result['last_name'] . " " . $result['first_name']; ?> </a> </td>


			<?php $i++; ?>

		</tr>

		<?php } ?>

	</table>

</body>
</html>