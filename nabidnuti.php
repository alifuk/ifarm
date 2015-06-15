<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php session_start(); ?>
    <head>

        <?php
        include 'head.php';
        ?>  

    </head>
    <body class="language-CZ" onload="callFT('CZ_01_Landingpage');" style="/*background:url('./img/farming-wallpaper5.jpg') no-repeat;*/ max-width:100%; -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;background-attachment: fixed;">



        <?php include './menu.php'; ?>


        <?php include './menu2.php'; ?>


        <h1>Odpovědět na nabídku</h1>
        <?php
        ?>   


        <form action="./queries/nabidkuPoptavku.php" method="POST" class="form-inline" id="login">
        <?php
        if (isset($_GET['polozkaId'])) {
            //echo $_SESSION['kategorie'];

            include './queries/nabidkyPredvyplneno.php';
        } else {
            echo 'Nezadaný parametr!';
        }
        ?>

            <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('login').submit();"> Přidat nabídku</submit>
        </form>





    </body>



</html>