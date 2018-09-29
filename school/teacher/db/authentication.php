<?php


	include("db/db_config.php");

	function authenticate() {
		if(!isset($_SESSION['teacher_id']) && !isset($_SESSION['teacher_name'])) {
			header("Location: home.php?redirected");
		}
	}

?>