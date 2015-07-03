<!DOCTYPE html>
<html>
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        
    } else {
        header('Location: ./index.php');
        die();
    }
    
    
    if(isset($_GET['nabidnout'])){
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
            require_once './connect.php';

            $nabidkaId = $_SESSION['nabidnout'];


            $stmt = $conn->prepare("SELECT def.kategorie, def.sekce, def.nazev, con.hodnota FROM `polozky`
            LEFT JOIN polozkycondefinice as con ON polozky.Id = con.polozkyId
            INNER JOIN definicekategorie as def ON con.definiceId=def.Id
            WHERE polozky.Id = ?
            ");
            $stmt->bind_param('s', $nabidkaId);

            $stmt->execute();
            $stmt->bind_result($kategorie, $sekce, $nazev, $hodnota);

            $predchoziSekce = "";
            $zobrazenNadpis = false;

            while ($stmt->fetch()) {
                if (!$zobrazenNadpis) {
                    echo "<h1>Poptávka na " . ucfirst($kategorie) . "</h3>";
                    $zobrazenNadpis = true;
                }

                if ($predchoziSekce != $sekce) {
                    $predchoziSekce = $sekce;
                    echo "<h3>" . $sekce . "</h3>";
                }
                echo $nazev . ": " . $hodnota . "<br>";
            }

            $stmt->close();




            $stmt = $conn->prepare("SELECT jmeno, prijmeni, adresa1, telefon, zobrazitAdresu FROM `users`
                LEFT JOIN polozky ON polozky.userId = users.Id
                WHERE polozky.Id = ?
                ");
            $stmt->bind_param('s', $nabidkaId);

            $stmt->execute();
            $stmt->bind_result($jmeno, $prijmeni, $adresa, $telefon, $zobrazitAdresu);


            while ($stmt->fetch()) {
                if ($zobrazitAdresu) {
                    echo "<br><br><h2>" . $jmeno . "</h2>";
                    echo "<h3>" . $adresa . "</h3>";
                    echo "<h3>" . $telefon . "</h3>";
                } else {
                    echo "Poptávající skryl adresu, ";
                }
            }

            $stmt->close();
            
            
            
            
            
            ?>

            <div class="bluebutton" onclick="window.location.href='./nabidnuti.php?nabidnout=<?php echo $_SESSION['nabidnout'] ?>';">
                Vložit nabídku na tuto poptávku
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