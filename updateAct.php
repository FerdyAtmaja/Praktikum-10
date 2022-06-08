<?php
    include "koneksi.php";

    $vid = $_POST['Id'];
    $vname = $_POST['Name'];
    $vemail = $_POST['Email'];
    $vaddress = $_POST['Address'];
    $vcity = $_POST['City'];
    $vmessage = $_POST['Message'];
    
    mysqli_query($conn, "UPDATE guestbook SET name='$vname', email='$vemail', address='$vaddress', city='$vcity', message='$vmessage' WHERE id = $vid");
    header("location:home.php");
?>