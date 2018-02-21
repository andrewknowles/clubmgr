<?php
include('includes/Myconnect.php');

$fixture = $Mydbconnection->escapeString(htmlspecialchars($_POST["fixture"]));
$date  = $Mydbconnection->escapeString(htmlspecialchars($_POST["date"]));
$date = trim($date);
$dateFrm = substr($date,6,4).substr($date,2,4).substr($date,0,2);
$event  = $Mydbconnection->escapeString(htmlspecialchars($_POST["event"]));
$homeaway  = $Mydbconnection->escapeString(htmlspecialchars($_POST["homeaway"]));
$time  = $Mydbconnection->escapeString(htmlspecialchars($_POST["time"]));
$rinkstrips  = $Mydbconnection->escapeString(htmlspecialchars($_POST["rinkstrips"]));

//$Mydbconnection->query('update fixtures set Date = "'.$date.'", Event = "'.$event.'", Homeaway = "'.$homeaway.'", Time = "'.$time.'", Rinkstrips = "'.$rinkstrips.'" where Fixture = '.$fixture);

$Mydbconnection->query('update fixture set Date = "'.$dateFrm.'", Event = "'.$event.'", Time = "'.$time.'", Rinkstrips = "'.$rinkstrips.'", Homeaway = "'.$homeaway.'" where Fixture = '.$fixture);

$Mydbconnection->closeConnection();

//$previousPage = $_SERVER["HTTP_REFERER"];
//header('Location: '.$previousPage);
echo "<script type='text/javascript'>  window.location='fixture_data.php'; </script>";
?>