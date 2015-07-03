<?php
include '../php-image-resize-master/src/ImageResize.php';
?>
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

        $kategorieId = $_SESSION['kategorie'][count($_SESSION['kategorie']) - 1];

        $stmt = $conn->prepare("INSERT INTO polozky (nabidka,smazano,zobrazit,kategorieId, userId) VALUES(?,?,?,?,?)");
        $stmt->bind_param('sssss', $nabidka, $smazano, $zobrazit, $kategorieId, $userId);
        $nabidka = 0;
        $smazano = 0;
        $zobrazit = 1;
        $kategorieId = $_SESSION['kategorie'];
        $userId = $_SESSION['user'];

        $stmt->execute();
        $stmt->close();

        $polozkaId = $conn->insert_id;







        $error = array();
        $extension = array("jpeg", "jpg", "png", "gif", "doc", "docx", "xls", "xlsx", "mp3", "mp4");
        print_r($_FILES);
        foreach ($_FILES["files"]["tmp_name"] as $key => $tmp_name) {
            $file_name = $_FILES["files"]["name"][$key];
            $file_tmp = $_FILES["files"]["tmp_name"][$key];
            $ext = pathinfo($file_name, PATHINFO_EXTENSION);
            if (in_array($ext, $extension)) {


                $stmt = $conn->prepare("INSERT INTO soubory (soubor, polozkaId) VALUES(?,?)");
                $stmt->bind_param('ss', $file_name, $polozkaId);

                $stmt->execute();
                $stmt->close();
                $fileId = $conn->insert_id;


                if ($ext == "png") {
                    $image = new ImageResize($_FILES["files"]["tmp_name"][$key]);
                    $image->resizeToHeight(200);
                    $image->save($_FILES["files"]["tmp_name"][$key]);
                }



                move_uploaded_file($file_tmp = $_FILES["files"]["tmp_name"][$key], "../uploads/" . $fileId . "." . $ext);
            } else {
                array_push($error, "$file_name, ");
            }
        }



















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