<!-- odkazováno z forms/sablona.php   -->


<?php
require_once './connect.php';

$stmt = $conn->prepare("SELECT def.Id, def.sekce, def.zobrazeni, def.nazev, def.volby, def.jednotky, hodnota FROM definicekategorie as def LEFT JOIN polozkycondefinice ON def.Id = polozkycondefinice.definiceId WHERE polozkyId = ?");
$stmt->bind_param('i', $polozkaId);
$polozkaId = $_GET['polozkaId'];
$stmt->execute();




$stmt->bind_result($IdDefinice, $sekce, $zobrazeni, $nazev, $volby, $jednotky, $hodnota);
$existuje = false;
$predchozisekce = "";

while ($stmt->fetch()) {
    $existuje = true;
    if ($sekce != $predchozisekce) {
        echo "<h1>" . ucfirst($sekce) . "</h1>";
        $predchozisekce = $sekce;
    }

    echo $hodnota;
           
    if ($zobrazeni == "počet") {
        include './parts/numberBox.php';
    } elseif ($zobrazeni == "multivolba") {
        echo "<h3>".$nazev."</h3><br>";
        foreach (explode(",", $volby) as $volba) {
            include './parts/multiBox.php';
        }
        echo "<br>";
    } elseif ($zobrazeni == "volba") {
        include './parts/volbaBox.php';
    } elseif ($zobrazeni == "text") {
        include './parts/textBox.php';
    } elseif ($zobrazeni == "ano/ne") {
        include './parts/boolBox.php';
    }
}
$stmt->close();


if (!$existuje) {
    echo "Definice pro tuto kategorii neexistuje, vytvoře jí!";
}
?>

