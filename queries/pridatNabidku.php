
<!DOCTYPE html>
<html>
    <head>
        <title>Title of the document</title>

        <meta charset="UTF-8">
    </head>

    <body>



        <?php
        session_start();
        print_r($_POST);


        require_once '../connect.php';

        $kategorieId = 0;

        $stmt = $conn->prepare("INSERT INTO polozky (nabidka,smazano,zobrazit,kategorieId, userId) VALUES(?,?,?,?,?)");
        $stmt->bind_param('sssss', $nabidka, $smazano, $zobrazit, $kategorieId, $userId);
        $nabidka = $_POST['polozkaId'];
        $smazano = 0;
        $zobrazit = 1;
        $kategorieId = 0;
        if (isset($_SESSION['user'])) {
            $userId = $_SESSION['user'];
        } else{
            $userId = 0;
        }

        $stmt->execute();
        $stmt->close();

        $polozkaId = $conn->insert_id;

        foreach ($_POST as $key => $value) {

            if (is_array($value)) {


                $volbyDef = "";

                $stmt = $conn->prepare('SELECT volby FROM definicekategorie WHERE Id = ?');
                $stmt->bind_param('s', $Iddefinice);
                $Iddefinice = $key;

                $stmt->execute();

                $stmt->bind_result($volby);

                while ($stmt->fetch()) {
                    $volbyDef = $volby;
                }
                $stmt->close();

                $volbyDef = explode(",", $volbyDef);

                $vyslednaValue = "";


                foreach ($value as $keyInner => $valueInner) {

                    if ($vyslednaValue == "") {

                        $vyslednaValue = $volbyDef[$keyInner];
                    } else {

                        $vyslednaValue = $vyslednaValue . "," . $volbyDef[$keyInner];
                    }
                }

                $value = $vyslednaValue;
            }


            if ($value == "on") {
                $value = "ano";
            }

            if (trim($value) != "") {
                $stmt = $conn->prepare("INSERT INTO polozkycondefinice (polozkyID,definiceID,hodnota) VALUES(?,?,?)");
                $stmt->bind_param('sss', $polozkyID, $definiceID, $hodnota);
                $polozkyID = $polozkaId;
                $definiceID = $key;
                $hodnota = $value;

                $stmt->execute();
                $stmt->close();
            }
        }



        //header('Location: ' . $_SERVER['HTTP_REFERER']);
        ?>
    </body>
</html>