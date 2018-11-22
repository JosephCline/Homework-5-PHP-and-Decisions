<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Grade Calculator (mainphp)</title>
</head>
<body>
 <h1>Grade Calculator</h1>	 
<?php
$hw1 = substr(filter_input(INPUT_POST, 'hw1', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw2 = substr(filter_input(INPUT_POST, 'hw2', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw3 = substr(filter_input(INPUT_POST, 'hw3', FILTER_SANITIZE_NUMBER_INT),0,3);
$hw4 = substr(filter_input(INPUT_POST, 'hw4', FILTER_SANITIZE_NUMBER_INT),0,3);
$qz1 = substr(filter_input(INPUT_POST, 'qz1', FILTER_SANITIZE_NUMBER_INT),0,3);
$qz2 = substr(filter_input(INPUT_POST, 'qz2', FILTER_SANITIZE_NUMBER_INT),0,3);
$mid = substr(filter_input(INPUT_POST, 'mid', FILTER_SANITIZE_NUMBER_INT),0,3);

$hw = ((($hw1+$hw2+$hw3+$hw4)/4)/100)*40;
$qz = ((($qz1+$qz2)/2)/100)*20;
$m = $mid * .2;
$grade = (($hw+$qz+$m)/80)*100;

echo "Your grade is " . ceil($grade) . "%";

if ($grade >= 100)
{
	echo ", which comes to an A";
}
elseif ($grade >= 90)
{
	echo ", which comes to an A";
}
elseif ($grade >= 80)
{
	echo ", which comes to a B";
}
elseif ($grade >= 70)
{
	echo ", which comes to a C";
}
elseif ($grade >= 60)
{
	echo ", which comes to a D";
}
elseif ($grade < 60)
{
	echo ", which comes to a E";
}
?>

</body>
</html>