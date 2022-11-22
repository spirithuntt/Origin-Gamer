<?php
include('init.php');
session_destroy();
unset($_SESSION['login']);
header("Location: /Origin-Gamer/");
?>