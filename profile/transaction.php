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
            <p>Transaction Info</p>
        </header>
        <div class="content">
            <div class="left">
                <img src="../img/joni.jpg" alt="">
                <p>Username</p>
                <a href="edit.php">Edit Profile</a>
                <a href="transaction.php">Transaction Info</a>
                <!-- <a href="">Settings</a> -->
                <a href="../logout.php">Log Out</a>
            </div>
            <div class="right">
                <form action="">
                    <table>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jaminan Sewa</th>
                            <th>Lama Sewa</th>
                            <th>Status</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Camera EOS 80D</td>
                            <td>KTP</td>
                            <td>1 Hari</td>
                            <td>Sedang Dikirim</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Camera EOS 80D</td>
                            <td>KTP</td>
                            <td>1 Hari</td>
                            <td>Sedang Dikirim</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>
</body>

</html>