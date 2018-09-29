<?php

function viewResults($student) {

	$result = " ";
	while($row = mysqli_fetch_array($student)) {

		extract($row);

		$result .= "<tr>";

		$result .= "<tr><th>English</th><td>" . $english . "</td></tr>";		
		$result .= "<tr><th>Math</th><td>" . $math . "</td></tr>";
		$result .= "<tr><th>Verbal</th><td>" . $verbal . "</td></tr>";
		$result .= "<tr><th>Quantitative</th><td>" . $quantitative . "</td></tr>";
		$result .= "<tr><th>Vocational</th><td>" . $vocational . "</td></tr>";
		$result .= "<tr><th>Science</th><td>" . $science . "</td></tr>";
		$result .= "<tr><th>Social Studies</th><td>" . $social_studies . "</td></tr>";
		$result .= "<tr><th>Home Economics</th><td>" . $home_economics . "</td></tr>";
		$result .= "<tr><th>Percentage</th><td>" . $final . "</td></tr>";


		$result .= "</tr>";

	}

	return $result;

}


?>