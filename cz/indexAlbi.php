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



    <body>




        <?php
        include './menu.php';

        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {

            /*
              include './forms/navbar.php';

              include './queries/mojeSablony.php';
              include './queries/profileEditQ.php';

              include './forms/naseptavac.php';
              include './forms/kategorie.php';

              include './forms/sablona.php';


              include './forms/aresForm.php';
             * 
             * 
             * 
             * 
             */

            include './indexlogin.php';
        } else {
            include './forms/loginForm.php';
            include './forms/registerForm.php';
        }
        ?>