<?php 
    $conn = mysqli_connect("localhost","root","","bimbel_online");

    // Check connection     
    if (mysqli_connect_errno()) {
        echo "Tidak dapat terhubung ke database:" . mysqli_connect_error();
        exit();
    }
?>