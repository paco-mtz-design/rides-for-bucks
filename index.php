<?php ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Rides</title>
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

Hello World.

<?php

$totalcost = 5390;
$savings = 0;
$amountleft = $totalcost-$savings;

$rides = array(
4.2,
4.2,
4.2,
5.1,
4.3
);

$totalrides = count($rides);

?>

<p><a href="form.php">Try the form</a></p>

<p>Total Cost: <?php echo '$'.$totalcost.'.00mxn'; ?></p>
<p>Savings: <?php echo '$'.$savings.'.00mxn'; ?></p>
<p>Amount Left: <?php echo '$'.$amountleft.'.00mxn'; ?></p>
<p>Total Rides: <?php echo $totalrides; ?></p>

<?php 

for ($r=0; $r < $totalrides; $r++)
	{
		$saved = round($rides[$r]*8.3);
		echo $r.': '.$rides[$r].'km / $'.$saved.'.00mx<br>';
		$savings += $saved;
	}
	
?>

<p>Savings: <?php echo '$'.$savings.'.00mxn'; ?></p>





















</body>
</html>