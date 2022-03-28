<?php
    Session_start();
    unset($_SESSION['tarot']);
    Session_destroy();
    header("location:../index.html");
    die;
?>