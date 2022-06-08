<?php
    include "koneksi.php";

    $vposted = date('Y-m-d H:i:s');
    $vname = $_POST['name'];
    $vemail = $_POST['email'];
    $vaddress = $_POST['address'];
    $vcity = $_POST['city'];
    $vmessage = $_POST['message'];

    $querysql="INSERT guestbook set posted = '$vposted', 
    name = '$vname', 
    email = '$vemail', 
    address = '$vaddress', 
    city = '$vcity', 
    message = '$vmessage'";
    mysqli_query($conn, $querysql) or die("Proses simpan ke database gagal");
    header("location:home.php");
?>