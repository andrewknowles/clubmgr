<?php
include('includes/Myconnect.php');

$wc  = $Mydbconnection->escapeString(htmlspecialchars($_POST["W/C"]));
$mon  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Monday"]));
$tue  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Tuesday"]));
$wed  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Wednesday"]));
$thu  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Thursday"]));
$fri  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Friday"]));
$sat  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Saturday"]));
$sun  = $Mydbconnection->escapeString(htmlspecialchars($_POST["Sunday"]));

$Mydbconnection->query('update week set activity = "'.$wc.'" where display = 0');
$Mydbconnection->query('update week set activity = "'.$mon.'" where display = 1');
$Mydbconnection->query('update week set activity = "'.$tue.'" where display = 2');
$Mydbconnection->query('update week set activity = "'.$wed.'" where display = 3');
$Mydbconnection->query('update week set activity = "'.$thu.'" where display = 4');
$Mydbconnection->query('update week set activity = "'.$fri.'" where display = 5');
$Mydbconnection->query('update week set activity = "'.$sat.'" where display = 6');
$Mydbconnection->query('update week set activity = "'.$sun.'" where display = 7');

$Mydbconnection->closeConnection();

//header("Location: week_data.php");
echo "<script type='text/javascript'>  window.location='week_data.php'; </script>";
?>