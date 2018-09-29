<?php

session_start();

include("db/authentication.php");
authenticate();

$admin_id = $_SESSION['admin_id'];
$admin_name = $_SESSION['admin_name'];




?>

<!DOCTYPE html>
<html>
<head>

	<?php include("../teacher/style.css"); ?>

	<title>Admin Home</title>
</head>
<body>

	<?php include("style.html"); ?>

</body>
</html>