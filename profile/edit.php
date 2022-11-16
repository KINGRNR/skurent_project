<?php
session_start();
require_once '../functions.php';
$data = getUserData(null, $_SESSION['id']);
if (isset($_POST['submit'])) {
    $result = updateUser($_SESSION['id'], $_POST['fullname'], $_POST['phones'], $_POST['address']);
    header("Refresh:0");
}
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
    <link rel="stylesheet" href=<?= "http://localhost/skurent_project/profile/profile.css?v=" . time() ?>>
    <title>Profile</title>
</head>

<body>
    <div class="container">
        <header>
            <p>Edit Profile</p>
        </header>
        <div class="content">
            <div class="left">  
                <img src="../img/joni.jpg" alt="">
                <p><?= $data['username']; ?></p>
                <a href="edit.php">Edit Profile</a>
                <a href="transaction.php">Transaction Info</a>
                <!-- <a href="">Settings</a> -->
                <a href="../logout.php">Log Out</a>
            </div>
            <div class="right">
                <h1>Edit Profile</h1>
                <form action="" method="post">
                    <!-- <input type="hidden" name="id" value="<?php echo $data['id']; ?>"> -->
                    <div class="label-input">
                        <label for="fullname">Full Name:</label>
                        <input type="text" id="fullname" name="fullname" autocomplete="off" autofocus required value="<?= $data['username'] ?>">
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="phones">Phones:</label>
                        <input type="number" id="phones" name="phones" autocomplete="off" value="<?= $data['telpon']; ?>" required>
                    </div>

                    <hr>

                    <div class="label-input">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" autocomplete="off" value="<?= $data['alamat']; ?>" required>
                    </div>

                    <button type="submit" name="submit" id="btn-submit">Edit</button>
                </form>
            </div>
        </div>

    </div>
</body>

</html>