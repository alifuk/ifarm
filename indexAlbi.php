<?php
session_start();
include './queries/setDefaultCategory.php';

print_r($_SESSION['kategorie']);


?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>    <!--   -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
        
        
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
    </head>
    <body>
            <?php
            if (isset($_SESSION['user']) && $_SESSION['user'] != "") {


                include './forms/navbar.php';



                include './forms/kategorie.php';
                
                include './forms/obchodniBary.php';
                
                
                include './forms/aresForm.php';
                
                
            } else {
                include './forms/loginForm.php';
                include './forms/registerForm.php';
            }

            // put your code here
            ?>
    </body>
</html>
