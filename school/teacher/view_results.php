<?php

session_start();

include("db/authentication.php");

authenticate();

$teacher_id = $_SESSION['teacher_id'];
$teacher_name = $_SESSION['teacher_name'];

$select = mysqli_query($db, "SELECT * FROM student") or die(mysqli_error($db));


?>

<!DOCTYPE html>
<html>
<head>

	<?php include("style.css"); ?>

	<title>View Results</title>

	<table>



	</table>

</head>
<body>

	<?php include("style.html");  ?>

	<table id="sec" border="1">

		<tr style="background-color: #2077CF; color: white;">

			<th></th><th>Name</th><th>English</th><th>Mathematics</th><th>Verbal</th><th>Quantitative Reasoning</th><th>Vocational Aptitude</th>
			<th>Science</th><th>Social Studies</th><th>Home Economics</th><th>Final</th>
		</tr>

		<tr>
			
			<?php $i = 1; 
			while ($result = mysqli_fetch_array($select)) {

				extract($result);

				$query = mysqli_query($db, "SELECT * FROM result WHERE student_id = '".$student_id."' ORDER BY final") or die(mysqli_error($db));				

				while($res = mysqli_fetch_array($query)) {

					extract($res);

					?>

					<td style="width: 10px"> <?php echo $i ?> </td>
					<td><?php echo $result['last_name'] . " " . $result['first_name']; ?> </a> </td>
					<td><?php echo $english ?></td>
					<td><?php echo $math ?></td>
					<td><?php echo $verbal ?></td>
					<td><?php echo $quantitative ?></td>
					<td><?php echo $vocational ?></td>
					<td><?php echo $science ?></td>
					<td><?php echo $social_studies ?></td>
					<td><?php echo $home_economics ?></td>
					<td><?php echo $final ?></td>


					<?php $i++; ?>

				</tr>

				<?php }} ?>

			</table>


		</body>
		</html>