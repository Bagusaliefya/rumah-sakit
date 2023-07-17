<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-
scale=1.0">

    <title>Tambah Data User</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data User</h3>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="nmPasien">Username</label>

                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Username">

                    </div>
                    <div class="form-group">
                        <label for="nmUser">Password</label>

                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Password">

                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
</body>

<script src="assets/js/bootstrap.js"></script>

</html>