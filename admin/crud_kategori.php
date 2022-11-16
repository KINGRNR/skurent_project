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
                <a href="crud_transaksi.php">Manage Transaction</a>
                <a href="crud_kategori.php">Manage Categories</a>
                <a href="crud_barang.php">Manage Items</a>
                <a href="../logout.php">Log Out</a>
            </div>
            <div class="right">
                <h1>Manage Categories</h1>
                <form action="" method="post">
                    <!-- <input type="hidden" name="id" value="<?php echo $data['id']; ?>"> -->
                    <div class="label-input">
                        <label for="fullname">Name :</label>
                        <input type="text" id="fullname" name="fullname" autocomplete="off" autofocus required value="<?= $data['username'] ?>">
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="address">Image :</label>
                        <input type="file" id="" name="" autocomplete="off" value="<?= $data['alamat']; ?>" required>
                    </div>

                    <button type="submit" name="submit" id="btn-submit">Edit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>