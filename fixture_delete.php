<?php
include('includes/Myconnect.php');

$fixture  = $Mydbconnection->escapeString(htmlspecialchars($_POST["fixdel"]));
echo $_POST["fixdel"];
//Test if numeric here

echo 'delete from fixtures where Fixture =' .$fixture;

$Mydbconnection->query('delete from fixtures where Fixture =' .$fixture);

$Mydbconnection->closeConnection();

$previousPage = $_SERVER["HTTP_REFERER"];
header('Location: '.$previousPage);

?>