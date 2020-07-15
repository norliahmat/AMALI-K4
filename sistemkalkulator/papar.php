
<!DOCTYPE html>
<html>
<head>

	<title>SISTEM KALKULATOR</title>

</head>
<body>
<br>
	<center><h1><b>SISTEM KALKULATOR</b></h1>
<form id="form"name="form"method="post"action="insert_logout.php">
<h3>PILIH WARNA KESUKAAN ANDA!!!</h3>
<br/> 
<button type="button" onclick="myfunction()">RED</button>
<button type="button" onclick="mybeauty()">BLUE</button>
<button type="button" onclick="myugly()">YELLOW</button>
<button type="button" onclick="mysweety()">GREY</button>
<button type="button" onclick="myhoney()">GREEN</button>

	<script>
		function myfunction() 
		{
			document.body.style.backgroundColor="red";
		}

		function mybeauty() 
		{
			document.body.style.backgroundColor="blue";
		}

		function myugly() 
		{
			document.body.style.backgroundColor="yellow";
		}

		function mysweety() 
		{
			document.body.style.backgroundColor="grey";
		}

		function myhoney() 
		{
			document.body.style.backgroundColor="green";
		}


	</script>
	<br/><br/>

<table border="1" cellpadding="6" cellspacing="0">
<tr>
<th>Bil</th>
<th>Id Pengguna</th>
<th>Nombor 1</th>
<th>Nombor 2</th>
<th>OPERASI</th>
<th>KEPUTUSAN</th>
	
	<?php 

	include 'connection.php';
	
$display = mysqli_query($conn,'SELECT*FROM kira');
$bil=1;
while ($result=mysqli_fetch_array($display))  
{
echo"<tr><td align='center'>".$bil++."</td>
<td align='center'>".$result['id_pengguna']."</td>
<td align='center'>".$result['n1']."</td>
<td align='center'>".$result['n2']."</td>
<td align='center'>".$result['operators']."</td>
<td align='center'>".$result['result']."</td>

</td></tr>";
}
	?>  

</table><br/><br/>
	<div align="center">
	<button > <a href="kira.php">Kalkulator</a></button>
<button > <a href="papar.php">Utama</a></button>
<button type="logout" name="keluar" value=""><a href ="logout.php">Log Keluar</a></button>
	</form>
</div></center>
</body>
</html>