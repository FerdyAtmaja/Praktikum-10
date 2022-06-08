<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "myweb";


$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun dan Database tidak dapat dibuka");

    $vname=$_POST['name'];
    $vaddress=$_POST['address'];
    $vemail=$_POST['email'];
    $vhomepage=$_POST['homepage'];
    $vusername=$_POST['username'];
    $vpassword=$_POST['password'];

    $querysql="insert user set name='$vname',
        address='$vaddress',
        email='$vemail',
        homepage='$vhomepage',
        username='$vusername',
        password='$vpassword'";
mysqli_query($conn, $querysql) or die("Proses simpan ke database gagal");
header("location:Main.php");
?>