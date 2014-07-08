<?php ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>New Ride Added</title>

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

</style>

</head>

<body>

 <?php 
 
 //Obtain values from form
 $the_date = $_POST["ride_date"];
 $the_distance = $_POST["ride_distance"];
 $mysqltime = date ("Y-m-d", $the_date); 

 // Connects to your Database 
 mysql_connect("localhost", "root", "root") or die(mysql_error());
 mysql_select_db("rides") or die(mysql_error()); 
 mysql_query("INSERT INTO allrides VALUES ( ".$mysqltime.", ".$the_distance.")"); 
 echo "Great, you added a ride of ".$the_distance." km for the date ".$the_date; 

 ?> 

<br>

Ride date: <?php echo $the_date; ?><br>
Ride length: <?php echo $the_distance; ?><br>

<p><a href="form.php">Back to the form</a></p>
<p><a href="index.php">Progress so far</a></p>



</body>
</html>