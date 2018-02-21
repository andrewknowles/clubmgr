<?php
include('includes/Myconnect.php');

$Mydbconnection->query('update week set activity = "'.$_POST["W/C"].'" where display = 0');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 1');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 2');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 3');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 4');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 5');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 6');
$Mydbconnection->query('update week set activity = "'.$_POST["Monday"].'" where display = 7');

$Mydbconnection->closeConnection();

header("Location: update.php");

?>