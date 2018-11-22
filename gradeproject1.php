<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <link rel="stylesheet" type="text/css" href="style.css">
     <title>Grade Calculator</title>
</head>
<body>
     <h1>Grade Calculator</h1>	 
	<form action="gradeproject2.php" method="post"> 
	 <table>
	 	<tr>
			<td>Homework 1</td>
			<td><input type="number" name="hw1" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td>Homework 2</td>
			<td><input type="number" name="hw2" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td>Homework 3</td>
			<td><input type="number" name="hw3" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td>Homework 4</td>
			<td><input type="number" name="hw4" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td>Quiz 1</td>
			<td><input type="number" name="qz1" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td>Quiz 2</td>
			<td><input type="number" name="qz2" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td>Midterm</td>
			<td><input type="number" name="mid" min="0" max="100"></td>
		</tr>	 
		<tr>
			<td><input type="submit" value="Calculate"></td>
			<td></td>
		</tr>
	 </table> 
	 </form>
</body>
</html>