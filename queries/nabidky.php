<!-- odkazováno z forms/sablona.php   -->


<?php
require_once './connect.php';

$stmt = $conn->prepare("SELECT def.Id, def.sekce, def.zobrazeni, def.nazev, def.volby, def.jednotky FROM `kategorie` INNER JOIN definicekategorie as def ON LCASE(kategorie.nazev) = LCASE(def.kategorie) WHERE kategorie.Id = ?   ");
$stmt->bind_param('i', $kategorieId);
$kategorieId = $_SESSION['kategorie'][count($_SESSION['kategorie']) - 1];
$stmt->execute();




$stmt->bind_result($IdDefinice, $sekce, $zobrazeni, $nazev, $volby, $jednotky);
$existuje = false;
$predchozisekce = "";

while ($stmt->fetch()) {
    $existuje = true;
    if ($sekce != $predchozisekce) {
        echo "<h1>" . ucfirst($sekce) . "</h1>";
        $predchozisekce = $sekce;
    }

    
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

