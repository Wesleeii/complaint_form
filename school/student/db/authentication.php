<?php


	include("db/db_config.php");

	function authenticate() {
		if(!isset($_SESSION['student_id']) ) {
			header("Location: ../teacher/home.php?redirected");
		}
	}

?>