<?php ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Input Form for Rides</title>

<link rel="stylesheet" type="text/css" href="http://raidho.mx/wp-content/themes/raidho2013/type/DecimaMonoLight/MyFontsWebfontsKit.css">

<style type="text/css">

body {
	font-family: DecimaMono, Helvetica, Arial, sans-serif;
	font-size: 4em;
	color: #333;
	background-color: #333;
	color: #f0f0f0;
	padding: 30px;
	}
a {
	color: white;
	text-decoration: underline;
	}

</style>

</head>

<body>

<h1>Enter details for the ride:</h1>
<form action="ride-dealer.php" method="post">
	<p>Date: <input type="date" name="ride_date"></p>
        <p>Distance: <input type="number" step="any" name="ride_distance"></p>
        <p><input type="submit" />
</form>

<p><a href="index.php">Go back</a></p>

</body>
</html>