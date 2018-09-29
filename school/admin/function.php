<?php

function viewTeachers($teacher) {

	$result = "";
	$i = 1;
	while($row = mysqli_fetch_array($teacher)) {

			extract($row);

			$result .= "<tr>";

			$result .= "<td>" . $i . "</td>";
			$result .= "<td><a href=\"view_register.php?id=$teacher_id\">" . $first_name . " " . $last_name . "</a></td>";

			$result .= "</tr>";

			$i++;
	}

	return $result;
}


function viewRegister($teacher) {

	$result = "";

	$i = 1;

	while($row = mysqli_fetch_array($teacher)) {

		extract($row);

		$result .= "<tr>";

		$result .= "<td>" . $i . "</td>";
		$result .= "<td>" . $first_name . " " . $last_name . "</td>";
		$result .= "<td>" . $age . "</td>";

		$result .= "</tr>";
		$i++;
	}
	return $result;
}


?>