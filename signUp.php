<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM KONTAK PENGGUNA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
        body {
            padding-top: 7%;
            padding-left: 28%;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="alert alert-primary text-center mt-0">
                    Sign Up
                </div>
                <div class="card-body">
                    <form method="post" action="simpan_signUp.php">
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" name="address" id="address" class="form-control">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="homepage" class="col-sm-2 col-form-label">Homepage</label>
                            <div class="col-sm-10">
                                <input type="text" name="homepage" id="homepage" class="form-control">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" id="username" class="form-control">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                        </div> <br>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>