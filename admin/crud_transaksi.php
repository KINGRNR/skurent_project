<?php
// require_once '../functions.php';
session_start();
// error_reporting(0);
$userName = $_SESSION['name'];
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
                <a href="crud_transaksi.php" class="active">Manage Transaction</a>
                <a href="crud_kategori.php">Manage Categories</a>
                <a href="crud_barang.php">Manage Items</a>
                <a href="../logout.php">Log Out</a>
            </div>
            <div class="right">
                <h1>Manage Transaction</h1>
                <form action="" method="post">
        

                    <button type="submit" name="submit" id="btn-submit">Edit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>