<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Tution/Class Calculator</title>
</head>
<body>
<h1> Calculate Your Tutiton</h1>
<form action="tuition(sidephp).php" method="post">
<p>Residency<br>
<select name="loc">
	<option value="1">In District
	<option value="2">Out of District
	<option value="3">Out of District or International
</select>
</p>
<p> Lower Credit Hours:<br>
<input type="number" name="lower" min="0" max="100">
</p>
<p> Upper Credit Hours:<br>
<input type="number" name="upper" min="0" max="100">
</p>
<p> Would You Like Additional Financial Aid Information</p>
<select name="fiaid">
	<option value="yes">Yes
	<option value="no">No
</select>
<p><input type="submit" value="Calculate"></p>
</form>
</body>
</html>