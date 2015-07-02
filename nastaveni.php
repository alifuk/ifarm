<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        
    } else {
        header('Location: ./index.php');
        die();
    }
    ?>
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



        <div style="padding-left:20px;padding-right:20px;padding-bottom:20px; position: relative;  width: 1000px;  margin: 0 auto;" >
            <?php
            include './parts/vyplnitNotifikace.php';
            ?>


            <?php
            //include './parts/aresForm.php';
            include './queries/profileEditQ.php';
            ?>   




            <h3>Zaškrtněte kategorie, ve kterých chcete</h3>
            <div style="width:50%; position: relative; float: left;">

                <?php
                echo '<h2>poptávat:</h2>';
                include './parts/checkboxtreepoptavka.php';
                ?>


            </div>
            <div style="width:50%; position: relative; float: left;">
                <?php
                echo '<h2>nabízet:</h2>';
                include './parts/checkboxtreenabidka.php';
                ?>   

            </div>

            <div style="clear: both;"></div>

            <submit class="btn btn-primary btn-block center-block" onclick="submitnout()"> Uložit údaje</submit>


        </div>




        <script>
            
            function submitnout (){
                
                
                
                
                
                
                
                
                
                
            };   
            
            
            
            
            
            
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