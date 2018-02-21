<?php
include('includes/Myconnect.php');

$post1  = $Mydbconnection->escapeString(htmlspecialchars($_POST["post1"]));
$name1  = $Mydbconnection->escapeString(htmlspecialchars($_POST["name1"]));
$post2  = $Mydbconnection->escapeString(htmlspecialchars($_POST["post2"]));
$name2  = $Mydbconnection->escapeString(htmlspecialchars($_POST["name2"]));

$Mydbconnection->query('insert into committee set Name1 = "'.$name1.'", Position1 = "'.$post1.'",
Name2 = "'.$name2.'", Position2 = "'.$post2.'"');

$Mydbconnection->closeConnection();

//$previousPage = $_SERVER["HTTP_REFERER"];
//header('Location: '.$previousPage);
echo "<script type='text/javascript'>  window.location='committee_data.php'; </script>";
?>