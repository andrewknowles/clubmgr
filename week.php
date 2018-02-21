<?php
include('includes/Myconnect.php');

	$result = $Mydbconnection->query("select day, activity from week");
	$week = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($week);

?>