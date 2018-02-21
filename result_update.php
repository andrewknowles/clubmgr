<?php
include('includes/Myconnect.php');

$result = $Mydbconnection->escapeString(htmlspecialchars($_POST["result"]));
$competition = $Mydbconnection->escapeString(htmlspecialchars($_POST["competition"]));
$winner  = $Mydbconnection->escapeString(htmlspecialchars($_POST["winner"]));


$Mydbconnection->query('update result set Competition = "'.$competition.'", Name = "'.$winner.'" where Result = '.$result);

$Mydbconnection->closeConnection();

//$previousPage = $_SERVER["HTTP_REFERER"];
//header('Location: '.$previousPage);
echo "<script type='text/javascript'>  window.location='result_data.php'; </script>";
?>