
<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>

        <meta charset="UTF-8">
    </head>

    <body style="padding: 20px 50px">



        <?php
        session_start();
        //print_r($_POST);


        require_once '../connect.php';

        $kategorieId = $_SESSION['kategorie'][count($_SESSION['kategorie']) - 1];


        $stmt = $conn->prepare("SELECT def.kategorie, def.sekce, def.nazev, con.hodnota FROM `polozky`
LEFT JOIN polozkycondefinice as con ON polozky.Id = con.polozkyId
INNER JOIN definicekategorie as def ON con.definiceId=def.Id
WHERE polozky.Id = ?
");
        $stmt->bind_param('s', $polozkaId);
        $polozkaId = $_GET['polozkaId'];

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
        $stmt->bind_param('s', $polozkaId);
        $polozkaId = $_GET['polozkaId'];

        $stmt->execute();
        $stmt->bind_result($jmeno, $prijmeni, $adresa, $telefon, $zobrazitAdresu);


        while ($stmt->fetch()) {
            if ($zobrazitAdresu) {
                echo "<br><br><h2>". $jmeno . "</h2>";
                echo "<h3>".$adresa."</h3>";                
                echo "<h3>".$telefon."</h3>";
            } else {
                echo "Poptávající skryl adresu, ";
            }
        }

        $stmt->close();
        ?>
    </body>
</html>