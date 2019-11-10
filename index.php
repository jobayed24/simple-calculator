<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Calculator</title>
</head>
<body>
	<form action="">
		<input type="number" name="num1" placeholder="input a number">
		<input type="number" name="num2" placeholder="input a number">
		<select name="operator" id="">
			<option value="None">None</option>
			<option value="Add">Add</option>
			<option value="Subtract">Subtract</option>
			<option value="Multify">Multify</option>
			<option value="Divide">Divide</option>
		</select>
		<br>
		<button type="submit" value="submit" name="submit">calculate</button>
	</form>
	<p>this is value:</p>
	<?php 
	if(isset($_GET['submit'])){
		$result1=$_GET['num1'];
		$result2=$_GET['num2'];
		$jo=$_GET['operator'];
		switch($jo){
			case "None":
			echo "Please select any method";
			break;
			case "Add":
			echo $result1 + $result2;
			break;
			case "Subtract":
			echo $result1 - $result2;
			break;
			case "Multify":
			echo $result1 * $result2;
			break;
			case "Divide":
			echo $result1 / $result2;
			break;

		}
		
	}


	?>
</body>
</html>