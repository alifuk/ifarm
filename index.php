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

    </head>
    <body class="language-CZ" onload="callFT('CZ_01_Landingpage');" style="/*background:url('./img/farming-wallpaper5.jpg') no-repeat;*/ max-width:100%; -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;background-attachment: fixed;">



        <?php include './menu.php'; ?>


        <?php include './menu2.php'; ?>


        <div style="padding-left:20px;padding-right:20px;padding-bottom:20px;">
            <div class="row">
                <div class='col-md-2'></div>
                <?php
                if (isset($_SESSION['user']) && $_SESSION['user'] != "") {

                    echo "<div class='col-md-2'>";                    
                    include './menuSablon.php';
                    echo "</div>";
                    echo "<div class='col-md-4'>"; 
                    include './queries/mojeSablony.php';
                    include './queries/profileEditQ.php';
                    include './parts/checkboxtree.php';
                    //include './parts/kategorie.php';

                    include './parts/sablona.php';


                    include './parts/aresForm.php';
                    
                    echo "</div>";
                } else {
                    include './landingPage.php';
                }
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