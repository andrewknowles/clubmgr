<?php
include('includes/Myconnect.php');

$result  = $Mydbconnection->escapeString(htmlspecialchars($_POST["resdel"]));

//Test if numeric here

$Mydbconnection->query('delete from result where Result =' .$result);

$Mydbconnection->closeConnection();

$previousPage = $_SERVER["HTTP_REFERER"];
header('Location: '.$previousPage);

?>