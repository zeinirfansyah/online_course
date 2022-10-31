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
    <title>Zee Medika</title>

    <style>
        
.kolom {
    margin: 20px 30px 20px 30px;
}

.kolom .deskripsi {
    font-size: 24px;
    margin-bottom: 5px;
    font-weight: bold;
    color: #39A2DB;
}

.kolom p.title-desc {
    font-size: 18px;
}


.center {
    text-align: center;
    width: 100%;   
}

.courses {
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    border-bottom: 1px solid #39A2DB28;
    padding-bottom: 60px;
    padding-top: 20px;
}

/* The flip card container - set the width and height to whatever you want. We have added the border property to demonstrate that the flip itself goes out of the box on hover (remove perspective if you don't want the 3D effect */
.course-card {
    border-radius: 20px;
    background-color: transparent;
    height: 200px;
    border: 1px solid #f1f1f1;
    width: 30%;
    margin: 10px auto;
    box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.074);
    perspective: 1000px; /* Remove this if you don't want the 3D effect */
  }
  
  /* This container is needed to position the front and back side */
  .course-card-inner {
    border: 1px solid #39A2DB45;
    border-radius: 20px;
    width: 100%;
    height: 100%;
    text-align: center;
    transition: transform 0.8s;
    transform-style: preserve-3d;
  }
  
  /* Do an horizontal flip when you move the mouse over the flip box container */
  .course-card:hover .course-card-inner {
    transform: rotateY(40deg);
  }
  
  /* Position the front and back side */
  .course-card-front, .course-card-back {
    border-radius: 20px;
    position: absolute;
    width: 100%;
    height: 100%;
    -webkit-backface-visibility: hidden; /* Safari */
    backface-visibility: hidden;
  }
  
  /* Style the front side (fallback if image is missing) */
  .course-card-front {
    background-color: #bbb;
    color: black;
  }
  
  /* Style the back side */
  .course-card-back {
    background-color: #39A2DB;
    color: white;
    /* transform: rotateY(180deg); */
  }

  .course-card-inner img {
      width: 100%;
      height: 100%;
  }

 .course-card-back h1 {
    text-align: left;
     margin: 20px 20px 20px 20px;
}

.course-card-back .tutor-course {
    font-size: 12px;
    font-weight:  bold;
    text-align: left;
    margin: 20px 20px 20px 20px;
}

.course-card-back .title-desc {
    text-align: left;
    font-size: 12px;
    margin: 20px 20px 20px 20px;
}

@media only screen and (max-width: 900px) {
    .courses {
        display: block;
        flex-wrap: wrap;
    }

    .course-card {
        background-color: transparent;
        height: 200px;
        border: 1px solid #f1f1f1;
        width: 90%;
        margin: 10px auto;
        border-radius: 20px;
        box-shadow: 0 3px 8px 0 rgba(0, 0, 0, 0.074);
        perspective: 1000px; /* Remove this if you don't want the 3D effect */
      }
    .course-card-front {
        display: none;
    }

    .course-card-back {
        border: 1px solid #39A2DB;
        border-radius: 20px;
        background-color: #39A2DB1c;
        color: #39A2DB;
        transform: rotateY(0);
      }

      .course-card:hover .course-card-inner {
        transform: rotateY(20deg);
        border-radius: 1px;
      }
}

    </style>
</head>

<body>

    <!-- Session PHP start -->
    <?php

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    ?>
    <!-- Session PHP end -->

    <!-- Navbar start -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top" style="background-color: #ffffffe8;">
        <div class="container">
            <a class="navbar-brand" href="#"><b> <span>8Group</span> Academy</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#courses">Courses</a>
                    </li>
                    <li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Contact </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="mailto:12.zeinirfansyah@gmail.com" target="blank">Email</a></li>
                            <li><a class="dropdown-item" href="https://wa.me/0895613982082?text=Hallo,%20Saya%20ingin%20bertanya%20sesuatu %20tentang%20 8Group Academy" target="blank">Whatsapp</a>
                            </li>
                        </ul>
                    </li>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown me-5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username']; ?> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="#profile">Profile</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar end -->

    <!-- hero start -->
    <section id="home">
        <div class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mt-5 pt-3">
                        <h1 class="display-4 fw-bolder">Hai. Selamat datang di <br> <span>8Group</span> Academy</h1>
                        <p class="lead fw-normal">Platform online course nomor satu di asia tenggara.</p>
                        <hr class="my-4 heroHR" />
                        <p class="desc">
                        Belajar dari mentor yang berpengalaman di bidangnya dan mendapatkan sertifikat resmi untuk membangun karir masa depan
                        </p>
                        <div class="mb-3 text-start">
                        <a href="https://wa.me/0895613982082?text=Hallo,%20Saya%20ingin%20berlangganan%20 8Group Academy" target="blank"><button name="submit" class="btn btn-outline-info ps-5 pe-5" >Berlangganan</button></a>
                            
                        </div>
                    </div>

                    <div class="col-md-6 mb-5">
                        <!-- Carousel start -->
                        <div id="carousel" class="carousel slide carousel-fade d-none d-md-block mb-5 pb-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active " data-bs-interval="2500">
                                    <img src="img/img1.svg" class="d-block img-fluid  ms-auto me-auto" style="height: 600px" alt="..." />
                                </div>
                                <div class="carousel-item" data-bs-interval="2500">
                                    <img src="img/img2.svg" class="d-block  img-fluid  ms-auto me-auto" style="height: 600px" alt="..." />
                                </div>
                            </div>
                        </div>
                        <!-- Carousel end -->
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- hero end -->
    <!-- tabel start -->
    <section id="courses" class="mt-5">
        <div class="container">
            <div class="row">
            <div class="kolom">
                <h1 class="deskripsi">Programming Courses</h1>
                <p class="title-desc">Belajar programming bersama dengan mentor berpengalaman di bidangnya.</p>
            </div>
            <div class="center">
                <div class="courses">
                    <div class="course-card">
                        <div class="course-card-inner">
                            <a href="vid-flutter.php">
                                <div class="course-card-front">
                                    <img src="img/flutter-card.png" alt="Avatar">
                                </div>
                                <div class="course-card-back">
                                    <h3 class="m-3 title-course">Flutter Fundamental</h3>
                                    <p class="tutor-course">Kuldii Project</p>
                                    <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis commodi placeat ducimus. Odio, soluta dolorum?</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-inner">
                            <a href="emptyPage.php">
                                <div class="course-card-front">
                                    <img src="img/react-card.png" alt="Avatar">
                                </div>
                                <div class="course-card-back">
                                    <h3 class="m-3 title-course">React Js</h3>
                                    <p class="tutor-course">Prawito Hudoro</p>
                                    <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis commodi placeat ducimus. Odio, soluta dolorum?</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-inner">
                            <a href="vid-excel.php">
                                <div class="course-card-front">
                                    <img src="img/excel.png" alt="Avatar">
                                </div>
                                <div class="course-card-back">
                                <h3 class="m-3 title-course">Excel Fundamental</h3>
                                    <p class="tutor-course">FreeTutorial-IDN</p>
                                    <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis commodi placeat ducimus. Odio, soluta dolorum?</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-inner">
                            <a href="emptyPage.php">
                                <div class="course-card-front">
                                    <img src="img/python-card.png" alt="Avatar">
                                </div>
                                <div class="course-card-back">
                                    <h3 class="m-3 title-course">Python Fundamental</h3>
                                    <p class="tutor-course">Kelas Terbuka</p>
                                    <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis commodi placeat ducimus. Odio, soluta dolorum?</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-inner">
                            <a href="emptyPage.php">
                                <div class="course-card-front">
                                    <img src="img/javascript-card.png" alt="Avatar">
                                </div>
                                <div class="course-card-back">
                                    <h3 class="m-3 title-course">Javascript Fundamental</h3>
                                    <p class="tutor-course">Programmer Zaman Now</p>
                                    <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis commodi placeat ducimus. Odio, soluta dolorum?</p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-inner">
                            <a href="emptyPage.php">
                                <div class="course-card-front">
                                    <img src="img/cpp-card.png" alt="Avatar">
                                </div>
                                <div class="course-card-back">
                                    <h3 class="m-3 title-course">C++ Fundamental</h3>
                                    <p class="tutor-course">Kelas Terbuka</p>
                                    <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis commodi placeat ducimus. Odio, soluta dolorum?</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
    </section>
    <!-- tabel end -->
    <!-- hero end -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>