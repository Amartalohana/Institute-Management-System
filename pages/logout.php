<?php
session_start();
unset($_SESSION['login']);
unset($_SESSION['ulogin']);
session_destroy();
header('Location:../index.php');
?>
