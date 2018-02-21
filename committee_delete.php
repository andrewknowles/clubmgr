<?php
include('includes/Myconnect.php');

$committee  = $Mydbconnection->escapeString(htmlspecialchars($_POST["comdel"]));

//Test if numeric here

$Mydbconnection->query('delete from committee where Line =' .$committee);

$Mydbconnection->closeConnection();

//$previousPage = $_SERVER["HTTP_REFERER"];
//header('Location: '.$previousPage);
echo "<script type='text/javascript'>  window.location='committee_data.php'; </script>";
?>