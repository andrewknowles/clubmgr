<?php
include('includes/Myconnect.php');

$date  = $Mydbconnection->escapeString(htmlspecialchars($_POST["date"]));

$event  = $Mydbconnection->escapeString(htmlspecialchars($_POST["event"]));
$homeaway  = $Mydbconnection->escapeString(htmlspecialchars($_POST["homeaway"]));
$time  = $Mydbconnection->escapeString(htmlspecialchars($_POST["time"]));
$rinkstrips  = $Mydbconnection->escapeString(htmlspecialchars($_POST["rinkstrips"]));



$Mydbconnection->query('insert into fixtures set Date = "'.$date.'", Event = "'.$event.'",
Homeaway = "'.$homeaway.'", Time = "'.$time.'", Rinkstrips = "'.$rinkstrips.'"');

$Mydbconnection->closeConnection();

$previousPage = $_SERVER["HTTP_REFERER"];
header('Location: '.$previousPage);

?>