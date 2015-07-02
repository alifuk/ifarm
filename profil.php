<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <?php
    session_start();
    include './queries/setDefaultCategory.php';
    ?>
    <head>

        <?php
        include 'head.php';
        ?>  



        <!--
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script>
            var map;
            function initialize() {
                map = new google.maps.Map(document.getElementById('map-canvas'), {
                    zoom: 8,
                    center: {lat: -34.397, lng: 150.644}
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);

        </script>

        -->




    </head>
    <body class="language-CZ" onload="callFT('CZ_01_Landingpage');" style="/*background:url('./img/farming-wallpaper5.jpg') no-repeat;*/ max-width:100%; -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;background-attachment: fixed;">


        <?php include './menu.php'; ?>
        <?php
        if (isset($_SESSION['user'])) {
            include './menu2.php';
        } else{
            echo "<div style='height: 40px;'></div>";
        }
        ?>


        <div style="padding-left:20px;padding-right:20px;padding-bottom:20px; position: relative;  width: 1000px;  margin: 0 auto;">

            <img src="./img/profillogo.jpg" style="display: block; width: 200px; position: absolute; top: 0; left: 0; z-index: 5;"/>

            <?php
            if (isset($_SESSION['user']) && $_SESSION['user'] == $_GET['spolecnost']) {
                include './parts/pridatUvodniFotku.php';
            }
            ?>



            <div style="height: 300px; overflow: hidden; position: relative;">

                <img src="./img/profiluvodka.jpg" style="display: block; width: 100%; position: absolute; top: 0; left: 0; bottom: 0 ; right: 0; margin: auto; z-index: 4;"/>
            </div>

            <div class="row">
                <!--
                <div class='col-md-5'>
                    <h1>
<?php
//echo $_GET['spolecnost'];
?>
                    </h1>
                </div>
               
                <div class='col-md-3'></div>


                <div class='col-md-3'>

                    

                </div>
                -->
            </div>

            <div class="row">
                <img src="./img/profilOvereno.jpg" style="width: 100px; float: right;position: absolute; left: -100px">
                    <div class='col-md-6'>
                        <h2>

<?php
include './parts/profilKontakt.php';
?> 

                        </h2>
                    </div>

                    <div class='col-md-3'>

<?php
include './parts/profilNabizime.php';
?> 
                    </div>


                    <div class='col-md-3'>

<?php
include './parts/profilPoptavame.php';
?> 

                    </div>


            </div>
        </div>




        <script>
            $('html').click(function () {
                $('#subscribe-pop').hide();
            })

            $('#footleft').click(function (e) {
                e.stopPropagation();
            });

            $('#link').click(function (e) {
                $('#subscribe-pop').toggle();
            });



        </script>

        <script>
            var menu_elements = document.querySelectorAll('.menu>li'),
                    menu_length = menu_elements.length;
            for (var i = 0; i < menu_length; i++) {
                menu_elements[i].addEventListener('click', function (e) {
                    var target = document.querySelector('.container>.' + e.target.classList[0]); // clicked element
                    Array.prototype.filter.call(target.parentNode.children, function (siblings) {
                        siblings.style.display = 'none'; // hide sibling elements
                    });
                    target.style.display = 'block'; // show clicked element
                });
            }
        </script>

        <script type="text/javascript" src="./scripts/tawk.js"></script>
    </body>



</html>