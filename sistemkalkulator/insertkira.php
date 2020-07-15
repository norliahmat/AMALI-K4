<?php
include 'connection.php';

if(isset($_POST['save']))  
	{

$id_pengguna = $result['id_pengguna'];
$n1 = $result['n1'];
$n2 = $result['n2'];
$operators = $result['operators'];
$result = $result['result'];

$edit = mysqli_query($conn,"INSERT INTO kira SET id_pengguna='$id_pengguna', n1='$n1',
 n2='$n2',operators='$operators', result='$result'");
 
 echo "<script>alert ('Data Berjaya Disimpan')
 window.location='papar.php'</script>";
 
	}
?>