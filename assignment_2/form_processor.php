<!DOCTYPE html>
<html>
<head>
	<title>Team Peer Evaluation - Processor</title>

	<style>
		div {
			margin-top: 20px;
			margin-bottom: 20px;
		}
	</style>
</head>
<body>

	<?php
	$teamName = $_POST["teamName"];
	echo "Team project name: " . $teamName . "<br>";
	$startTime = $_POST["startTime"];
	$endTime = $_POST["endTime"];
	$totalTime = (strtotime($endTime) - strtotime($startTime))/60;
	if ($totalTime > 59) {
		$hours = floor($totalTime / 60);
		$minutes = $totalTime - 60*$hours;
		if ($hours > 1) {
			echo "Presentation time: " . $hours . " hours, " . $minutes . " minutes<br>";
		} else {
			echo "Presentation time: 1 hour, " . $minutes . " minutes<br>";
		}

	} else {
		echo "Presentation time: " . $totalTime . " minutes<br>";
	}

	$member1 = $_POST["member1"];
	$ranking1 = (int) $_POST["ranking1"];
	$member2 = $_POST["member2"];
	$ranking2 = (int) $_POST["ranking2"];
	$member3 = $_POST["member3"];
	$ranking3 = (int) $_POST["ranking3"];
	$member4 = $_POST["member4"];
	$ranking4 = (int) $_POST["ranking4"];

	$grades = array(0 => "A+",
									1 => "A",
									2 => "A-",
									3 => "B+",
									4 => "B",
									5 => "B-",
									6 => "C+",
									7 => "C",
									8 => "C-",
									9 => "D+",
									10 => "D",
									11 => "D-",
									12 => "F");

	$grade = $_POST["grade"];

	if (isset($member1)) {
		if ($ranking1 < 2) {
			echo $member1 . ": " . $grades[array_search($grade, $grades)] . "<br>";
		} else {
			echo $member1 . ": " . $grades[array_search($grade, $grades) + 2*$ranking1] . "<br>";
		}
	}

	if (isset($member2)) {
		if ($ranking2 < 2) {
			echo $member2 . ": " . $grades[array_search($grade, $grades)] . "<br>";
		} else {
			echo $member2 . ": " . $grades[array_search($grade, $grades) + 2*$ranking2] . "<br>";
		}
	}

	if (isset($member3)) {
		if ($ranking3 < 2) {
			echo $member3 . ": " . $grades[array_search($grade, $grades)] . "<br>";
		} else {
			echo $member3 . ": " . $grades[array_search($grade, $grades) + 2*$ranking3] . "<br>";
		}
	}

	if (isset($member4)) {
		if ($ranking4 < 2) {
			echo $member4 . ": " . $grades[array_search($grade, $grades)] . "<br>";
		} else {
			echo $member4 . ": " . $grades[array_search($grade, $grades) + 2*$ranking4] . "<br>";
		}
	}

	echo "Final grade: " . $grade . "<br>";

	$notes = $_POST["notes"];
	echo "Notes about the project: " . $notes . "<br>";

	?>

</body>
</html>
