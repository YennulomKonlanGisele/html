<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="calculate.php" method="POST">
		<p>Please enter numbers to be worked on</p>
		<div>First Number <input type="text" name="first_number" placeholder="first number"></div>
		<div>Second Number <input type="text" name="second_number" placeholder="second number "></div>
		add<div><input type="radio" name="mode_of_operation" value="add"></div>
		subtract<div><input type="radio" name="mode_of_operation" value="subtract"></div>
		multiply<div><input type="radio" name="mode_of_operation" value="multiply"></div>
		divide<div><input type="radio" name="mode_of_operation" value="divide"></div>
		<input type="submit" name="submit" value="click here to perform calculations">
	</form>

</body>
</html>