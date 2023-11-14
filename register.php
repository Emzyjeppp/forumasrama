<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="img/LaporAsrama.png" alt="Icon" width="100" height="100">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun Baru!</h1>
                                    </div>
                                    <form method="post" action="proses-daftar.php" class="user">
                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control form-control-user" name="nik" placeholder="Nomor Induk Kependudukan (NIK)" required>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <input type="text" class="form-control form-control-user" name="name" placeholder="Nama Lengkap" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12 mb-3">
                                                <input type="password" class="form-control form-control-user" name="password" placeholder="Kata Sandi" required>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="tel" class="form-control form-control-user" name="telp" placeholder="No telepon yang dapat dihubungi" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                                    Daftar Akun
                                                </button>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="index.php">Sudah Punya Akun? Login!</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
