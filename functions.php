<?php
require_once 'koneksi.php';

function register($data)
{
    global $koneksi_db;

    $username = $data['username'];
    $password = $data['password'];
    $alamat   = $data['alamat'];
    $telpon   = $data['telpon'];

    $passwordHash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO tb_user (username, password, alamat, telpon, level) VALUES (
        '$username', '$passwordHash', '$alamat', '$telpon', 'user')";

    return mysqli_query($koneksi_db, $query);
}

function login($data)
{
    global $koneksi_db;

    $username = $data['username'];
    $password = $data['password'];

    $querySelect = "SELECT * FROM tb_user WHERE username = '$username'";

    $rawSelectResult = mysqli_query($koneksi_db, $querySelect);
    $selectResult = mysqli_fetch_assoc($rawSelectResult);
    if (is_null($selectResult)) {
        return null;
    }

    $passwordHash = $selectResult['password'];

    if (password_verify($password, $passwordHash)) {
        return true;
    } else {
        return false;
    }
}


function getUserData($username = null, $id = null)
{
    global $koneksi_db;

    $query = is_null($username) ? "SELECT * FROM tb_user WHERE id = $id" : "SELECT * FROM tb_user WHERE username = '$username'";
    $rawResult = mysqli_query($koneksi_db, $query);
    $result = mysqli_fetch_assoc($rawResult);
    return $result;

    // $userLevel = ['level'];
}

function updateUser($id, $username, $telpon, $alamat)
{
    global $koneksi_db;

    $query = "UPDATE tb_user SET 
            username = '$username',
            telpon = '$telpon',
            alamat = '$alamat'
            WHERE id = $id";

    mysqli_query($koneksi_db, $query);
    return mysqli_affected_rows($koneksi_db);
}
