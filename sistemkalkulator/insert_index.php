<?php
    include('connection.php');
    
    if(isset($_POST['Hantar'])) {
        
       $id_pengguna = $_POST['id_pengguna'];
        $password = $_POST['password'];

        
        $edit = mysqli_query($conn, "INSERT INTO daftar SET id_pengguna='$id_pengguna, password='$password'");
        echo "<script>alert ('Id dan Password betul')
 window.location='papar.php'</script>";
    }
    ?>