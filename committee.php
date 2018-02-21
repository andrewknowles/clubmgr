<?php
include('includes/Myconnect.php');

	$result = $Mydbconnection->query("select  Position1, Name1, Position2, Name2 from committee");
	$committee = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($committee);

?>