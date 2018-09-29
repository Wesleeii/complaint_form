<?php

	session_start();

	include("db/authentication.php");

	session_destroy();
	header("Location: home.php");

?>