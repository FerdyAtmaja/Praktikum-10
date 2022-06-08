<?php
include "koneksi.php";

$sql = "CREATE TABLE guestbook (
    Id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Posted Date,
    Name VARCHAR(50),
    Email VARCHAR(50),
    Address VARCHAR(50),
    City VARCHAR(25),
    Message Longblob
    )";

if(mysqli_query($conn, $sql)){
    echo "New Table created successfully";
}else{
    echo "Error : ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);
?>