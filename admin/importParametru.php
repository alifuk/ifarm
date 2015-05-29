<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>

        <meta charset="UTF-8">
    </head>

    <body>



        <?php
        $file = fopen("../files/parametry_sablon.csv", "r");


        require_once '../connect.php';

        fgets($file);
        while (!feof($file)) {
            $line = explode(",", fgets($file));
            if (isset($line[0]) && $line[0] != "") {



                $stmt = $conn->prepare("INSERT INTO definicekategorie (kategorie,sekce,zobrazeni,nazev,volby,jednotky) VALUES(?,?,?,?,?,?)");
                $stmt->bind_param('ssssss', $kategorie, $sekce, $zobrazeni, $nazev, $volby, $jednotky);
                $kategorie = $line[0];
                $sekce = $line[1];
                $zobrazeni = $line[2];
                $nazev = $line[3];
                $volby = "";
                $jednotky = "";
                for($i = 4; $i < 11; $i++){
                    if(isset($line[$i]) && trim($line[$i]) != ""){
                        if($i == 4){
                            $volby = $line[$i];
                        } else{
                            $volby = $volby .",". $line[$i];
                        }
                    }
                }
                
                for($i = 11; $i < 16; $i++){
                    if(isset($line[$i]) && trim($line[$i]) != ""){
                        if($i == 11){
                            $jednotky = $line[$i];
                        } else{
                            $jednotky = $jednotky .",". $line[$i];
                        }
                    }
                }

                $stmt->execute();
                $stmt->close();
                
                
            }








            /*
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
             * 
             * 
             * 
             */
        }


        fclose($file);
        ?>



    </body>

</html>