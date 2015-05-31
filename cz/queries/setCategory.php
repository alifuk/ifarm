<?php

session_start();

if (isset($_GET['kategorie']) && $_GET['kategorie'] != "" && isset($_GET['level']) && $_GET['level'] != "") {
    $oldsession = $_SESSION['kategorie'];
    
    
    print_r($oldsession);
    $level =  $_GET['level'];
    echo $level;
    
        $_SESSION['kategorie'] = array();
    for ($i = 0; $i <=  $level; $i++) {
        echo $i . " ";
        $_SESSION['kategorie'][$i] = $oldsession[$i];
    }
    
    $_SESSION['kategorie'][$_GET['level']+1] = $_GET['kategorie'];

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>