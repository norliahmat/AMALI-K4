<?php
    include('connection.php');
    
    if(isset($_POST['keluar'])) {

        
        echo "<script>alert ('Anda Pasti Ingin Keluar Sistem')
 window.location='index.php'</script>";
    }
    ?>