<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        
    } else {
        header('Location: ./index.php');
        die();
    }
    
    if(isset($_GET['nabidnout']))
    {
        $_SESSION['nabidnout'] = $_GET['nabidnout'];
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


        <div style="padding-left:20px;padding-right:20px;padding-bottom:20px; position: relative;  width: 1000px;  margin: 0 auto;">
            <?php
            include './parts/vyplnitNotifikace.php';
            ?>




            <div class="row">

                <?php
                echo "<div class='col-md-4'>";

                echo "<h2 style='  padding-bottom: 0px;'>Zadat nabídku:</h2>";
                include './parts/menuSablon.php';
                echo "</div>";
                echo "<div class='col-md-8'>";
                echo "<h2>Moje nabídky</h2>";
                include './queries/mojeNabidky.php';
                
                
                if(isset($_SESSION['nabidnout'])){
                    
                    
                    
                    
                }
                
                
                /*echo "<h2>Vložit nabídku</h2>";
                include './parts/sablona.php';
                echo "</div>";*/
                
                
                
                
                ?>   

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