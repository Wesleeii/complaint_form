<?php

session_start();

include("db/authentication.php");

authenticate();

$teacher_name = $_SESSION['teacher_name'];
$teacher_id = $_SESSION['teacher_id'];


?>


<!DOCTYPE html>
<html>
<head>

<?php include("style.css"); ?>

	<title>Teacher Home</title>
</head>
<body>

<?php include("style.html") ?>


</body>
</html>