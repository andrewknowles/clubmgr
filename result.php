<?php
include('includes/Myconnect.php');

	$result = $Mydbconnection->query("select Competition, Name from result");
	$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($result);

?>