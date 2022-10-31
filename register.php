<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $keterangan_registrasi = "";

    if ($password == $cpassword) {
        $sql = "SELECT * FROM user WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO user (username, password)
                    VALUES ('$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script type='text/javascript'>alert('Selamat! akun anda berhasil didaftarkan. Silakan melakukan Login!');</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script type='text/javascript'>alert('Terjadi kesalahan. Registrasi gagal!');</script>";
            }
        } else {
            echo "<script type='text/javascript'>alert('Username telah terdaftar.');</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Password tidak sama.');</script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>8Group Academy</title>
</head>

<body>
    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white;">
        <div class="container">
            <a class="navbar-brand" href="#">8Group Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fw-bold send-email" aria-current="page" href="index.php">Login</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- jumbotron register start -->
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Carousel start -->
                    <div id="carousel" class="carousel slide carousel-fade d-none d-md-block " data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active " data-bs-interval="2500">
                                <img src="img/img7.svg" class="d-block img-fluid  ms-auto me-auto" style="height: 600px" alt="..." />
                            </div>
                            <div class="carousel-item" data-bs-interval="2500">
                                <img src="img/img8.svg" class="d-block  img-fluid  ms-auto me-auto" style="height: 600px" alt="..." />
                            </div>
                        </div>
                    </div>
                    <!-- Carousel end -->
                </div>
                <!-- Login Card start -->
                <div class="col-md-6">
                    <div class="card card-form  ms-3 me-3 pb-4 shadow-sm p-2 mb-5 bg-body rounded">
                        <h4 class="text-center mt-3">Registrasi Akun <span>8Group</span> Academy</h4>
                        <div class="container">
                            <!-- Carousel start -->
                            <div id="carousel" class="carousel slide carousel-fade d-none d-md-block " data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active " data-bs-interval="2500">
                                        <img src="img/img1.svg" class="d-block img-fluid  ms-auto me-auto" style="height: 150px" alt="..." />
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2500">
                                        <img src="img/img2.svg" class="d-block  img-fluid  ms-auto me-auto" style="height: 150px" alt="..." />
                                    </div>
                                </div>
                            </div>
                            <!-- Carousel end -->

                            <form action="" method="POST" class="login-username">
                                <div class="mb-3 mt-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="username" class="form-label">Username</label>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" type="text" placeholder="username" name="username" value="<?php echo $username; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="password" class="form-label">Password</label>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" type="password" placeholder="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="cpassword" class="form-label">Confirm Password</label>
                                        </div>
                                        <div class="col">
                                            <input class="form-control" type="password" placeholder="cpassword" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 text-end">
                                    <button name="submit" class="btn btn-outline-info ps-5 pe-5" ">Register</button>
                                </div>
                                    <p class=" login-register-text text-end">Anda sudah punya akun? <a href="index.php" style="text-decoration: none; color: #39A2DB;">Login</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Login Card end -->
            </div>
        </div>
    </div>
    <!-- jumbotron register end -->


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>