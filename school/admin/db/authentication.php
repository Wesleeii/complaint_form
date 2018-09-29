<?php

	include("db_config.php");

	function authenticate() {

		if(!isset($_SESSION['admin_id']) && !isset($_SESSION['admin_name'])) {

			header("Location: ../teacher/home.php");

		}

	}

?>