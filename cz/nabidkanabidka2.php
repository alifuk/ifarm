<?php
session_start();
include './queries/setDefaultCategory.php';
print_r($_SESSION['kategorie']);
?>

<!DOCTYPE html>

<html>
    <head>
        <!--
        <meta charset="UTF-8">
        <title></title>     
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <!--  
        <link rel="stylesheet" href="./bootstrap-3.1.1-dist/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="./bootstrap-3.1.1-dist/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        
        <script src="./bootstrap-3.1.1-dist/js/jquery-2.1.4.min.js"></script>  <script>
        
            /*$(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip();   
             });*/
        </script> -->

        <?php include './head.php'; ?>
    </head>



    <body class="language-CZ" onload="callFT('CZ_01_Landingpage');" style="background:url('../cz/img/farming-wallpaper.jpg') no-repeat; max-width:100%; -webkit-background-size: cover;
   -moz-background-size: cover;
   -o-background-size: cover;
   background-size: cover;background-attachment: fixed;">




        <?php
        include './menu.php';
        include './menu2.php';

        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {

            
            

        } else {
            
            include './nabnab2.php';
            include './landingPage.php';
        }
        ?>