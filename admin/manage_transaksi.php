<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=<?= "http://localhost/Full%20Project%20Sku-Rent/admin/admin.css?v=" . time() ?>>
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
                <p>Username</p>
                <a href="edit.php">Manage Transaction</a>
                <a href="crud_user.php">Manage User</a>
                <a href="crud_kategori.php">Manage Categories</a>
                <a href="crud_barang">Manage Barang</a>
                <a href="../logout.php">Log Out</a>
            </div>
            <div class="right">
                <h1>Edit Profile</h1>
                <form action="" method="">
                    <div class="label-input">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="fullname" autocomplete="off" autofocus required>
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="phones">Phones:</label>
                        <input type="number" id="phones" name="phones" autocomplete="off" required>
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" autocomplete="off" required>
                    </div>

                    <button type="submit" name="submit" id="btn-submit">Edit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>