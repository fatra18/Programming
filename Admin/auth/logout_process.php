<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['image']);
    unset($_SESSION['name']);

    echo 'berhasil logout';
    
    header('Refresh: 3;URL = ../auth/login.php');
?>