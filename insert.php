<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pegawai</title>
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
                    Tambah Data Guest Book
                </div>
                <div class="card-body">
                    <form action="insertAct.php" method="post">
                            
                            <div class="form-group row">
                                <label for="date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <?php echo date('l, m F Y')?>
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" name="address" id="address" class="form-control">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" name="city" id="city" class="form-control">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                                <label for="message" class="col-sm-2 col-form-label">Message</label>
                                <div class="col-sm-10">
                                    <input type="text" name="message" id="message" class="form-control">
                                </div>
                            </div> <br>

                            <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="Simpan" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>