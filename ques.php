<!DOCTYPE HTML>
<html>
<head>
	<title>
	Question
	</title>
</head>
<body>
	<h1>Submit New Question</h1>
	<form action="submit.php" method="post">
		SR No.: <input type="number" name="srno"/><br/>
		Level:
		<select name="level">
			<option value="l">Low</option>
			<option value="m">Medium</option>
			<option value="h">High</option>
		</select><br/>
		Question : <input type="text" name="ques"/><br/>
		Option 1 : <input type="text" name="op1"/><br/>
		Option 2 : <input type="text" name="op2"/><br/>
		Option 3 : <input type="text" name="op3"/><br/>
		Option 4 : <input type="text" name="op4"/><br/>
		Correct: <input type="number" name="correct"/><br/>
		<button type="submit">Submit</button>
	</form>
</body>
</html>