<?php

session_start();

include("db/authentication.php");

authenticate();

$student_name = $_SESSION['student_name'];


?>


<!DOCTYPE html>
<html>
<head>

<?php include("../teacher/style.css"); ?>

	<title>Student Home</title>
</head>
<body>

<?php include("style.html") ?>


</body>
</html>