<?php
require_once 'functions.php';
session_start();
if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

$alert = '';

// kalo button submit diklik
if (isset($_POST['submit'])) {
    if ($_POST['password'] != $_POST['confirm']) {
        $alert = "Password confirm doesn't match!";
    } else {
        $result = register($_POST);
        if ($result) {
            echo "<script>
                alert('Registration Success!');
                document.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                alert('Registration Failed!');
                document.location.href = login.php;
            </script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href=<?= "http://localhost/skurent_project/formlog.css?v=" . time() ?>>

    <title>Register</title>
</head>

<body>
    <div class="container w-50 mt-5 p-5 rounded-4 shadow container-register">
        <div class="row justify-content-center mt-3">
            <div class="col-8">
                <h1 class="text-center fs-1 fw-bolder text-white">Sign Up</h1>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required autocomplete="off" autofocus aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="tlp" class="form-label">No.Telp</label>
                        <input type="number" class="form-control" name="telpon" id="telpon" required autocomplete="off" autofocus aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="tlp" class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" required autocomplete="off" autofocus aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
                    </div>
                    <div class="mb-3">
                        <label for="confirm" class="form-label">Password Confirm:</label>
                        <input type="password" class="form-control" name="confirm" id="confirm" required autocomplete="off">
                    </div>
                    <p style="color: red;"><?= $alert; ?></p>
                    <div class="btn-container">
                        <button type="submit" name="submit" class="btn btn-primary">Sign Up</button> 
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>