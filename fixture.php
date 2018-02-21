<?php
include('includes/Myconnect.php');

	$result = $Mydbconnection->query("select Date, Event, Homeaway, Time, Rinkstrips from fixture order by date");
	$fixture = mysqli_fetch_all($result, MYSQLI_ASSOC);
	echo json_encode($fixture);

?>