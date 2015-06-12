<?php

/*  pro hlavní kategorie
  $file = fopen("../files/kategorie.csv", "r");


  require_once '../connect.php';

  while (!feof($file)) {
  $line = explode(";", fgets($file));
  echo $line[0] . "<br>";


  $stmt = $conn->prepare("SELECT Id FROM kategorie WHERE nazev = ?");
  $stmt->bind_param('s', $nazev);
  $nazev = $line[0];

  $stmt->execute();

  $stmt->bind_result($kategorieId);
  $existuje = false;
  while ($stmt->fetch()) {
  $existuje = true;
  }
  $stmt->close();



  if (!$existuje) {

  $stmt = $conn->prepare("INSERT INTO kategorie (nazev, nadkategorie) VALUES(?,?)");
  $stmt->bind_param('si', $nazev, $nadkategorie);
  $nazev = $line[0];
  $nadkategorie = 0;
  $stmt->execute();

  $stmt->close();
  }
  }


  fclose($file);
 * 
 * 
 * 
 */




$file = fopen("../files/kategorie.csv", "r");


require_once '../connect.php';

while (!feof($file)) {
    $line = explode(";", fgets($file));

    if (count($line) >= 4 && trim($line[3]) != "") {

        $stmt = $conn->prepare("SELECT Id FROM kategorie WHERE nazev = ?");
        $stmt->bind_param('s', $nazev);
        $nazev = $line[3];

        $stmt->execute();

        $stmt->bind_result($kategorieId);
        $existuje = false;
        while ($stmt->fetch()) {
            $existuje = true;
        }
        $stmt->close();



        if (!$existuje) {

            //nalezení id nadkategorie
            $stmt = $conn->prepare("SELECT Id FROM kategorie WHERE nazev = ?");
            $stmt->bind_param('s', $nazev);
            $nazev = $line[2];

            $stmt->execute();

            $stmt->bind_result($kategorieId);
            $idNadkategorie = 0;
            while ($stmt->fetch()) {
                $idNadkategorie = $kategorieId;
            }
            $stmt->close();



            if ($idNadkategorie != 0) {

                $stmt = $conn->prepare("INSERT INTO kategorie (nazev, nadkategorie) VALUES(?,?)");
                $stmt->bind_param('si', $nazev, $nadkategorie);
                $nazev = $line[3];
                $nadkategorie = $idNadkategorie;
                $stmt->execute();

                $stmt->close();



                echo "přidáno " . $line[3] . " k " . $line[2] . "<br>";
            }
        }
    }
}


fclose($file);
?>