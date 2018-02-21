<?php
include('includes/Myconnect.php');

$line = $Mydbconnection->escapeString(htmlspecialchars($_POST["line"]));
$position1 = $Mydbconnection->escapeString(htmlspecialchars($_POST["position1"]));
$name1  = $Mydbconnection->escapeString(htmlspecialchars($_POST["name1"]));
$position2 = $Mydbconnection->escapeString(htmlspecialchars($_POST["position2"]));
$name2  = $Mydbconnection->escapeString(htmlspecialchars($_POST["name2"]));

$Mydbconnection->query('update committee set Position1 = "'.$position1.'", Name1 = "'.$name1.'", Position2 = "'.$position2.'", Name2 = "'.$name2.'" where Line = '.$line);

$Mydbconnection->closeConnection();

//$previousPage = $_SERVER["HTTP_REFERER"];
//header('Location: '.$previousPage);
echo "<script type='text/javascript'>  window.location='committee_data.php'; </script>";
?>