<?php

session_start();

if (isset($_GET['kategorie']) && $_GET['kategorie'] != "") {


    $_SESSION['kategorie'] = $_GET['kategorie'];
    /*
    if (strrpos($_SERVER['HTTP_REFERER'], "?") == -1) {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '?vlozit=ano');
    } else if (strrpos($_SERVER['HTTP_REFERER'], "vlozit=ano") != -1) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        header('Location: ' . $_SERVER['HTTP_REFERER'] . '&vlozit=ano');
    }*/
    
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
}
?>