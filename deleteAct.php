<?php
    include "koneksi.php";
    
    $id = $_GET['Id']; 
    mysqli_query($conn, "DELETE FROM guestbook WHERE id = $id");
    header("location:home.php");
?>