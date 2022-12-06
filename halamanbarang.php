<?php
require_once 'functions.php';
session_start();
// error_reporting(0);
$userLevel = 'guest';
$userName = null;
if (isset($_SESSION['login'])) {
    if ($_SESSION['level'] == 'admin') {
        header('Location: http://localhost/skurent_project/admin/index.php');
    } else {
        $userLevel = $_SESSION['level'];
        $userName = $_SESSION['name'];
    }
}
$data = mysqli_query($koneksi_db, "SELECT * FROM tb_barang order by id_barang DESC");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href=<?= "http://localhost/skurent_project/style.css?v=" . time() ?>>
    <link rel="stylesheet" href=<?= "http://localhost/skurent_project/halamanbarang.css?v=" . time() ?>>

</head>

<body class="body-kategori">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <div class="container d-flex flex-column flex-lg-row justify-content-between">
            <div class="navbar-left">
                <a class="navbar-brand fw-bolder fs-1" href="index.php">Sku-Rent</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
            <div class="navbar-right">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <?php if ($userLevel != 'user') : ?>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5" href="register.php">Register</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white fs-5" href="login.php">Login</a>
                            </li>
                            <?php else : ?>'
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $userName; ?>
                                </a>

                                <ul class="dropdown-menu nav-item">
                                    <li><a class="dropdown-item" href="profile/edit.php">Profile</a></li>
                                    <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="search-bar">
        <input type="text" placeholder="Search..">
    </div>


    <?php if ($userLevel != 'user') : ?>
        <div class="section-kategori">
            <?php while ($row = mysqli_fetch_array($data)) : ?>
                <!-- cart -->
                <div class="kategori-card">
                    <img src="image_file/<?= $row['gambar_barang']; ?>" alt="">
                    <p><?= $row['nama_barang']; ?></p>
                    <!-- <a href="">see more</a> -->
                    <a href="login.php" class="CFG" onclick="window.location.href = 'login.php';">See More</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <div class="section-kategori">
            <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                <!-- cart -->
                <div class="kategori-card">
                    <img class="img-fluid" src="image_file/<?= $row['gambar_barang']; ?>" alt="">
                    <p><?= $row['nama_barang']; ?></p>
                    <!-- <a href="">see more</a> -->
                    <!-- <button class="GFG" onclick="window.location.href = 'details.php?id='<?= $row['id_barang'] ?>'';">See More</button> -->
                    <a class="CFG" href="details.php?id=<?= $row['id_barang'] ?>">See More</a>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <!-- footer -->
    <footer class="footer-distributed">

        <div class="footer-left">
            <h3>Sku <span>Rent</span></h3>

        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p>Jl Kesuksesan</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>0812-3348-6394</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:rafifnr06@gmail.com">rafifnr06@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                <strong>Sku-Rent</strong> adalah platform penyewaan barang event untuk mempermudah anda mencari barang yang ada perlukan
            </p>
            <div class="footer-icons">
                <a href="https://www.facebook.com/profile.php?id=100012573700791"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/r_aaffff/"><i class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/Rafifnr07"><i class="fa fa-twitter"></i></a>
            </div>
        </div>
    </footer>
    <section class="footer-section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-15 footer-bottom-left">
                    <p>Copyright © 2022 Rafif Nur R. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>
<?php
?>