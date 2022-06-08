<!DOCTYPE html>
<html>

<head>
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            padding-top: 7%;
            padding-left: 28%;
        }
        p {
            width: 350px;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>

<body>
<div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-primary text-center mt-0">
                    Update Data Guest Book
                </div>
                <div class="card-body">
                    <form action="updateAct.php" method="post">
                        <?php
                        $vid = $_GET['Id'];
                        include "koneksi.php";     
                        $query = mysqli_query($conn, "SELECT * FROM guestbook where id = $vid");
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <input type="hidden" name="Id" value="<?php echo $data['Id']; ?>">

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type=" text" name="Name" value="<?php echo $data['Name']; ?>">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="Email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Email" value="<?php echo $data['Email']; ?>">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="Address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Address" value="<?php echo $data['Address'];  ?>">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="City" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" name="City" value="<?php echo $data['City'];  ?>">
                                </div>
                            </div> <br>
                            
                            <div class="form-group row">
                                <label for="Message" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <input type="text" name="Message" value="<?php echo $data['Message'];  ?>">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>