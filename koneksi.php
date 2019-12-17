<?php
$koneksi = mysqli_connect("192.168.4.237","admin","admin","hayudin");

// Check connection
if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>