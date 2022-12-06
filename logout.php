<?php
session_start();

unset($_SESSION['login']);
unset($_SESSION['level']);
header('Location: index.php');
session_destroy();
exit;
