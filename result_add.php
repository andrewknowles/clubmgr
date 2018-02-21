<?php
include('includes/Myconnect.php');

$competition  = $Mydbconnection->escapeString(htmlspecialchars($_POST["competition"]));
$winner  = $Mydbconnection->escapeString(htmlspecialchars($_POST["winner"]));


$Mydbconnection->query('insert into result set Competition = "'.$competition.'", Name = "'.$winner.'"');

$Mydbconnection->closeConnection();

$previousPage = $_SERVER["HTTP_REFERER"];
header('Location: '.$previousPage);

?>