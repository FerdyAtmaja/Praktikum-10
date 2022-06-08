<?php
include "koneksi.php";

$sql = "CREATE TABLE user (
    Id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Name VARCHAR(50),
    Address VARCHAR(50),
    Email VARCHAR(50),
    Homepage VARCHAR(50),
    Username VARCHAR(25),
    Password VARCHAR(25)
    )";

if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>