<?php

include('includes/db_lib.php');

$myIniFile = parse_ini_file("includes/idb.ini", TRUE);
$Myconfig2 = new Myconfig($myIniFile['IDBMYSQL']['server'], $myIniFile['IDBMYSQL']['login'], $myIniFile['IDBMYSQL']['password'], $myIniFile['IDBMYSQL']['database']);
$Mydbconnection = new Mydb($Myconfig2);
$MyCLink = $Mydbconnection->openConnection();
?>