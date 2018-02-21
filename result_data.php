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
		<h1>Results Table Update</h1>
		<h3>Add a new line</h3>
<form method="post" action="result_add.php">
			Competition:
			<input type="text" name="competition">
			Winner:
			<input type="text" name="winner">
			<input type="submit" value="Save">
		</form>

<h3>Delete a line</h3>
		<form action="result_delete.php" method="post">
			Line No to delete:
			<input type="text" name="resdel">
			<input type="submit" value="Delete">
		</form>



		<h3>Update existing lines</h3>
		<p>Remember to click the Save button at the end of each line</p>
<?php
			include('includes/Myconnect.php');
			$result = $Mydbconnection->query("select * from result");
		?>
		

			<?php
			foreach($result as $dataline) {
			?>
		<form action="result_update.php" method="post">
		<input type="text" name="result" value=" <?php echo trim($dataline['Result']); ?>" readonly>
		<input type="text" name="competition" value=" <?php echo trim($dataline['Competition']); ?>" >
		<input type="text" name="winner" value=" <?php echo trim($dataline['Name']); ?>" >
		<input type="submit" value="Save">
		</form>
		<?php
	}
		?>
	</body>
</html>	