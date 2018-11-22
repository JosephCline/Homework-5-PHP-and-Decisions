<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>tution(sidephp)</title>
</head>
<body>
<h1> Tuition Calculator</h1>
<?php
$loc = substr(filter_input(INPUT_POST, 'loc', FILTER_SANITIZE_NUMBER_INT),0,1);
$upper = substr(filter_input(INPUT_POST, 'upper', FILTER_SANITIZE_NUMBER_INT),0,3);
$lower = substr(filter_input(INPUT_POST, 'lower', FILTER_SANITIZE_NUMBER_INT),0,3);
$fiaid = substr(filter_input(INPUT_POST, 'fiaid', FILTER_SANITIZE_STRING),0,1);
if ($lower == "" and $upper == "")
{
	exit('<p>Please enter a value for lower level credits or 
			upper level credits.
			<a href="javascript:history.go(-1)">Go Back</a>');
}
if ($loc == 1)
{
$loc = "In District";
$tuition = ($lower * 99) + ($upper * 200) + (($lower + $upper) * 22) + 50 + 60;
}
elseif ($loc == 2)
{
$loc = "Out of District";
$tuition = ($lower * 172) + ($upper * 265) + (($lower + $upper) * 22) + 50 + 60;
}
elseif ($loc == 3)
{
$loc = "Out of District or International";
$tuition = ($lower * 172) + ($upper * 265) + (($lower + $upper) * 22) + 50 + 60;
}
echo "<p> Your $loc Tuition will be $" . number_format($tuition,2) . "</p>";
?>
</body>
</html>