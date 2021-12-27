<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['image']);
    unset($_SESSION['name']);
    unset($_SESSION['id']);

    
    
    header('Refresh: 3;URL = ../login.php');
?>