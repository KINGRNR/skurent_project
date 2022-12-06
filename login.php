<?php

require_once 'functions.php';
session_start();

if (isset($_SESSION['login'])) {
    header('Location: index.php');
    exit;
}

if (isset($_POST['submit'])) {
    if (is_null(login($_POST))) {
        echo "<script>
            alert('Username not registered!');
        </script>";
    } else if (!login($_POST)) {
        echo "<script>
            alert('Wrong username/ password!');
        </script>";
    } else {
        $userData = getUserData($_POST['username']);
        $_SESSION['level'] = $userData['level'];
        $_SESSION['name'] = $userData['username'];
        $_SESSION['id'] = $userData['id'];
        // $_SESSION['photo'] = $userData['image'];
        $_SESSION['login'] = true;
        header('Location: index.php');
        // if ($userLevel == 'admin') {
        //     header('Location: admin.php');
        // }

        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href=<?= "http://localhost/skurent_project/formlog.css?v=" . time() ?>>
</head>

<body>
    <div class="container w-50 mt-5 p-5 rounded-4 shadow container-register">
        <div class="row justify-content-center mt-3">
            <div class="col-8">
                <h1 class="text-center fs-1 fw-bolder text-white">Sign In</h1>
                <form method="post" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="username" required autocomplete="off" autofocus aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password" required autocomplete="off">
                        <input type="checkbox" onclick="myFunction()">Show Password
                    </div>
                    <a href="register.php" id="signup-link" class="text-decoration-none">Sign Up</a>
                    <!-- <p style="color: red;"><?= $alert; ?></p> -->
                    <div class="btn-container">
                        <button type="submit" name="submit" class="btn btn-primary">Sign In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("password");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>