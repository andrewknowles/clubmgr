<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<link rel="stylesheet" href="./css/mobile.css">
		<title>Mill Hill Bowling Club</title>
	</head>
	<body>
		<h1>Fixture Table Update</h1>
		<h3>Add a new fixture</h3>
		<form method="post" action="fixture_add.php">
			Date:
			<input type="date" name="date">
			Event:
			<input type="text" name="event">
			Home/Away:
			<input type="text" name="homeaway"><br>
			Time:
			<input type="text" name="time">
			Rinks/Trips:
			<input type="text" name="rinkstrips">
			<input type="submit" value="Submit">
		</form>
		<h3>Delete a fixture</h3>
		<form action="fixture_delete.php" method="post">
			Fixture No to delete:
			<input type="text" name="fixdel">
			<input type="submit" value="Submit">
		</form>
		<h3>Edit existing fixtures</h3>
		<?php
			include('includes/Myconnect.php');
			$result = $Mydbconnection->query("select * from fixture order by Date");
			foreach($result as $dataline) {
			$dateFrm = substr($dataline['Date'],8,2).substr($dataline['Date'],4,4).substr($dataline['Date'],0,4);

			?>
		<form action="fixture_update.php" method="post">
		<input type="text" name="fixture" value=" <?php echo trim($dataline['Fixture']); ?>" readonly >
		<input type="text" name="date" value=" <?php echo trim($dateFrm); ?>" >
		<input type="text" name="event" value=" <?php echo trim($dataline['Event']); ?>" >
		<input type="text" name="homeaway" value=" <?php echo trim($dataline['Homeaway']); ?>" >
		<input type="text" name="time" value=" <?php echo trim($dataline['Time']); ?>" >
		<input type="text" name="rinkstrips" value=" <?php echo trim($dataline['Rinkstrips']); ?>" >
		<input type="submit" value="Save">
		<br>
	</form>
		<?php
		}
		?>
		

	<button type="button" onClick="window.location='index.html';"> HOME </button>
	</body>
</html>