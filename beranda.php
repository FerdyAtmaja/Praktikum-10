<!DOCTYPE html>
<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
    <?php
    session_start();
    if($_SESSION['status']="login"){
        echo '
        <div class="card">
        <div class=" form-group row">
        <div class="card-body">
            <div class="alert alert-primary text-center mt-0">
                <h3>Selamat Datang'; ?>
                
                <?php
                echo $_SESSION['username'];
                ?>

                <?php echo '</h3>
                </div>
                <br>';?>
                
        <?php echo "<Center>Selamat datang pada hari ".date("l ,d F Y")."<Center><br>"; 
            echo'
            <a href="guestbook.php" class="btn btn-primary">Guestbook</a>
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
        </div>
        </div>
        ';}?>
</body>
</html>
