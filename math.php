<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="keywords" content="insert, keywords, here">
     <meta name="description" content="Insert description here">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Math PHP</title>
</head>

<body>
<?php 
	$x = 0;

	while($x <= 4) {
		$num1 = rand(1, 9);
		$num2 = rand(1, 9);
		$operator = array('+', '-');
		$random = $operator[rand(0, 1)];
		$answer = $num1 + $num2;
		$x++;
		$text1 = $num1 . $random . $num2 . '=' . $answer;
		echo $text1;
		echo "<br>";
					} 
?>
</body>
</html>