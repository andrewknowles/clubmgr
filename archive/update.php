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
		<h1>Table Update</h1>
		<?php
			include('includes/Myconnect.php');
			$result = $Mydbconnection->query("select * from week");
		?>
		<form action="update1.php" method="post">
			<?php
			foreach($result as $dataline) {
			?>
		<label> <?php echo $dataline['day']; ?></label>
		<textarea name="<?php echo $dataline['day']; ?>" cols="40" rows="5" maxlength = 100>
			<?php echo $dataline['activity']; ?>
		</textarea><br>  
		<?php
		}
		?>
		<input type="submit" value="Submit">
	</body>
</html>