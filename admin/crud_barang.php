<?php
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
                <a href="crud_barang.php" class="active">Manage Items</a>
                <a href="../logout.php">Log Out</a>
            </div>
            <div class="right">
                <h1>Manage Items</h1>
                <form action="upload_barang.php" method="post" enctype="multipart/form-data">
                    <!-- <input type="hidden" name="id" value="<?php echo $data['id']; ?>"> -->
                    <div class="label-input">
                        <label for="fullname">Name</label>
                        <input type="text" id="fullname" name="fullname" autocomplete="off" autofocus required value="">
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="desc">Desc</label>
                        <input type="textarea" id="phones" name="desc" autocomplete="off" value="" required>
                    </div>
                    <hr>
                    <div class="label-input">
                        <label for="loc">Location</label>
                        <input type="textarea" id="loc" name="loc" autocomplete="off" value="" required>
                    </div>
                    <hr>
                    <div class="label-input">
                        <label for="stock">Stock</label>
                        <input type="number" id="stock" name="stock" autocomplete="off" value="" required>
                    </div>
                    <hr>
                    <div class="label-input">
                        <label for="price">Price</label>
                        <input type="number" id="price" name="price" autocomplete="off" value="" required>
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="kategori">Categories</label>
                        <select name="kategori" id="kategori">
                            <option value="camera">Camera</option>
                            <option value="sound">Sound System</option>
                            <option value="tent">Tent</option>
                            <option value="chair">Chair & Table</option>
                        </select>
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="foto">Image</label>
                        <input type="file" id="foto" name="foto" autocomplete="off" value="" required>
                    </div>

                    <button type="submit" name="submit" id="btn-submit">Create</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>