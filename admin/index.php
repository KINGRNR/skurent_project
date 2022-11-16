    <?php
    // require_once '../functions.php';
    session_start();
    // error_reporting(0);
    $userName = $_SESSION['name'];
    include "../koneksi.php"; //panggil file koneksi
    $query = "SELECT * FROM tb_user"; //buat query sql
    $hasil = mysqli_query($koneksi_db, $query); //jalankan query sql
    $no = 1;
    $jum = mysqli_num_rows($hasil); //menghitung banyak row/baris data
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <link rel="stylesheet" href=<?= "http://localhost/skurent_project/admin/admin.css?v=" . time() ?>>
        <title>Admin</title>
    </head>

    <body>
        <div class="container">
            <header>
                <p>Hello Admin!</p>
            </header>
            <div class="content">
                <div class="left">
                    <img src="../img/joni.jpg" alt="">
                    <p><?= $userName ?></p>
                    <a href="index.php">Manage User</a>
                    <a href="crud_transaksi.php">Manage Transaction</a>
                    <a href="crud_kategori.php">Manage Categories</a>
                    <a href="crud_barang">Manage Items</a>
                    <a href="../logout.php">Log Out</a>
                </div>
                <div class="right">
                    <h1>Manage User</h1>
                    <br>
                    <p>Banyak Data : <?= $jum?></p>
                    <br>
                    <br>
                    <form action="">
                        <!-- isi halaman kelola -->
                        <table>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Nomor telp</th>
                                <th></th>
                            </tr>
                            <?php
                            //perulangan untuk nampilkan data dari database
                            while ($data = mysqli_fetch_array($hasil)) {
                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?= $data['username']; ?></td>
                                    <td><?= $data['alamat']; ?></td>
                                    <td><?= $data['telpon']; ?></td>
                                    <td><a href="delete.php?id=<?php echo $data['id']; ?>" onclick="return confirm('apakah anda yakin?')">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </form>
                </div>
            </div>

        </div>
    </body>

    </html>