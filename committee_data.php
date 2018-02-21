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
		<h1>Committee Table Update</h1>
		<h3>Add a new line</h3>
<form method="post" action="committee_add.php">
			Post 1:
			<input type="text" name="post1">
			Name 1:
			<input type="text" name="name1">

			Post 2:
			<input type="text" name="post2">
			Name 2:
			<input type="text" name="name2">
			<br>
			<input type="submit" value="Save">
		</form>

<h3>Delete a line</h3>
		<form action="committee_delete.php" method="post">
			Line No to delete:
			<input type="text" name="comdel">
			<input type="submit" value="Delete">
		</form>



		<h3>Update existing lines</h3>
		<p>Remember to click the Save button at the end of each line</p>
<?php
			include('includes/Myconnect.php');
			$result = $Mydbconnection->query("select * from committee");

			foreach($result as $dataline) {
			?>
		<form action="committee_update.php" method="post">
		<input type="text" name="line" value=" <?php echo trim($dataline['Line']); ?>" readonly>
		<input type="text" name="position1" value=" <?php echo trim($dataline['Position1']); ?>" >
		<input type="text" name="name1" value=" <?php echo trim($dataline['Name1']); ?>" >
		<input type="text" name="position2" value=" <?php echo trim($dataline['Position2']); ?>" >
		<input type="text" name="name2" value=" <?php echo trim($dataline['Name2']); ?>" >
		<input type="submit" value="Save">
		</form>
		<?php
	}
		?>
		<button><a href="tablemanager.html">Back to Table Manager</a></button><br>
		<button><a href="index.html">Back to Home Page</a></button>
	</body>
</html>	