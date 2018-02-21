<?php
echo "Hello";
//$con   = mysqli_connect("millhillbowlingclub.net.mysql", "millhillbowling", "hUqhaBad", "millhillbowling");
$con   = mysqli_connect("10.169.0.167", "techfors1_club", "Andy2rook", "techfors1_clubmgr");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
echo "Connected successfully";
}
$Mysql1 = mysqli_query($con, "select * from fixture");

foreach ($Mysql1 as $dataline1)
					{
						echo $dataline1['Event'];
					}
?>