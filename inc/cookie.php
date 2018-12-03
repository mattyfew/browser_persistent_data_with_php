<?php

session_start();

if (isset($_GET['save'])) {
    $name = urlencode($_SESSION['word'][2]) . time();
    setcookie($name, implode(':', $_SESSION['word']), strtotime('+30 days'), '/');
    header('location: /index.php');
}