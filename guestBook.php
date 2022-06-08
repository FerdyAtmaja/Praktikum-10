<!DOCTYPE html>
<html>

<head>
    <title>Guest Book</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    table,
    tr,
    td {
        border: 1px solid black;
    }

    thead {
        background-color: #cccddd;
    }

    h2 {
        text-align: center;
    }

    table {
        margin: auto;
    }

    a {
        text-decoration: none;
    }

    
    </style>
</head>

<body>
    <h2>GUEST BOOK</h2>
    <table class="table">
        <thead>
            <tr>
                <td>ID</td>
                <td>Posted</td>
                <td>Name</td>
                <td>Email</td>
                <td>Address</td>
                <td>City</td>
                <td>Message</td>
            </tr>
        </thead>
        <?php
        include "koneksi.php";

        $query = mysqli_query($conn, 'SELECT * FROM guestbook');
        while ($data = mysqli_fetch_array($query)) {
        ?>
        <tr>
            <td><?php echo $data['Id'] ?></td>
            <td><?php echo $data['Posted'] ?></td>
            <td><?php echo $data['Name'] ?></td>
            <td><?php echo $data['Email'] ?></td>
            <td><?php echo $data['Address'] ?></td>
            <td><?php echo $data['City'] ?></td>
            <td><?php echo $data['Message'] ?></td>
            <td class="update"><a href="update.php?Id=<?php echo $data['Id']; ?>">Update |</a>
                <a href="deleteAct.php?Id=<?php echo $data['Id']; ?>">| Hapus</a>
            </td>
        </tr>
        <?php 
    }
     ?>
    </table>

    <div class="text-center">
        <a href="insert.php" class="btn btn-primary">Tambah Data</a>
        <a href="beranda.php" class="btn btn-light">Back To Home Menu</a>
    </div>
</body>

</html>