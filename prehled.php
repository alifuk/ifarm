<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        
    } else {
        header('Location: ./index.php');
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
                echo "<h1>Přehled</h1>";
                echo "<div class='col-md-4'>";
                echo "<h2>Aktuality</h2>";




                include "./class/simple_html_dom.php";

                $html = file_get_html('http://www.zemedelec.cz/');

                $count = 0;
                foreach ($html->find('.post') as $post) {
                    if ($count < 5) {
                        foreach ($post->find('img') as $obrazek) {
                            echo "<img src='" . $obrazek->src . "' style='width: 100px; float: left; margin-right: 20px;'>";
                        }
                        foreach ($post->find('.post__title') as $title) {
                            echo "<h3>" . $title->plaintext . '</h3>';
                        }
                        echo "<div style='clear:both; height: 30px;'></div>";
                    }
                    $count++;
                }

                echo "</div>";



                echo "<div class='col-md-4'>";



                require_once './connect.php';




                echo '<a href="http://www.slunecno.cz/mista/' . $_SESSION['adresa1'] . '"><img src="http://www.slunecno.cz/predpoved-na-web.php?obr=4&amp;m=1301&amp;v=2" alt="Počasí Praha - Bhovice - Slunečno.cz" style="border: 0px;" /></a>';



                echo "</div>";
                echo "<div class='col-md-4'>";

                include './queries/mojeSablony.php';


                echo "</div>";
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