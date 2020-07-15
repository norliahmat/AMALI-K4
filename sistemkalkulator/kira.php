<?php include 'connection.php';

?>

<!DOCTYPE html>

<html>
<head>
	<title></title>

	<script>

		function calc()
		{
			var n1 = parseFloat (document.getElementById('n1').value);
			var n2 = parseFloat(document.getElementById('n2').value);
			var oper = document.getElementById('operators').value;

			if(oper === '+')
			{
				var n2 = document.getElementById('result').value= n1+n2  ;
			}

			if(oper === '-')
			{
				var n2 = document.getElementById('result').value= n1-n2  ;
			}

			if(oper === '/')
			{
				var n2 = document.getElementById('result').value= n1/n2  ;
			}

			if(oper === 'x')
			{
				var n2 = document.getElementById('result').value= n1*n2  ;
			}

			if(oper === '%')
			{
				var n2 = document.getElementById('result').value= n1%n2  ;
			}
		}

		</script>
</head>

<body>
	<center>
		<form method="post" action="insertkira.php">
		<input type="submit" name="save" value="Simpan">
</form>
<br/>
<br/>
	
	<input type="text" id="n1"/><br/><br/>
	<input type="text" id="n2"/>
	<br/><br/>

	<select id="operators">
		<option value="+">+</option>
		<option value="-">-</option>
		<option value="/">/</option>
		<option value="*">x</option>
		<option value="%"> % </option>
	</select><br/><br/>

<button onclick="calc();">=</button>
	<input type="text" id="result"/>
	
	<br/><br/>
	
</body>
</html>