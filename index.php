<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php session_start(); ?>
    <head>

        <?php
        include 'head.php';
        ?>  

    </head>
    <body class="language-CZ" onload="callFT('CZ_01_Landingpage');" style="background:url('./img/farming-wallpaper5.jpg') no-repeat; max-width:100%; -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;background-attachment: fixed;">



        <?php include './menu.php'; ?>


        <?php include './menu2.php'; ?>



        <?php
        if (isset($_SESSION['user']) && $_SESSION['user'] != "") {

            include './queries/mojeSablony.php';
            include './queries/profileEditQ.php';

            include './parts/naseptavac.php';
            include './parts/kategorie.php';

            include './parts/sablona.php';


            include './parts/aresForm.php';
        } else {
            include './landingPage.php';
        }
        ?>   






    </body>



</html>