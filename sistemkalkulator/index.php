
<!DOCTYPE html>
<html>
<head>

	<title>Ini KVPJB</title>

</head>
<body>
<br>
	<center><h1><b>SISTEM KALKULATOR</b></h1>

<p><strong><center></center></strong>
		<form id="form" name="form" method="post" action="insert_index.php">
			<table width="400" border="1">
				<tr>
					<th scope="col">USERNAME:</th>
					<th scope="col"><div align="left">
					<input type="text" name="id_pengguna"value=""size="50"/>
				</div>
			</th>
		</tr>
		
		<tr>
			<th scope="col">PASSWORD:</th>
					<th scope="col"><div align="left">
					<input type="password" name="password"value=""size="50"/>
				</div>
			</th>
		</tr>
	</table>

	
	<?php include 'connection.php';
	
$display = mysqli_query($conn,'SELECT*FROM daftar');
$bil=1;
while ($result=mysqli_fetch_array($display))  
{
echo"<tr><td align='center'>".$bil++."</td>
<td align='center'>".$result['id_pengguna']."</td>
<td align='center'>".$result['password']."</td>
</td></tr>";

}
	?>  

	<div align="center">
		<button type="Hantar" name="Hantar" value="Submit">Submit</button>
	</form>
		<button type="sign_up" name="sign_up" value="">Sign up</button>
        
    </div></p>

</center>
</body>
</html>