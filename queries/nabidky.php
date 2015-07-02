<!-- nabidky.php odkazováno z forms/sablona.php   -->


<?php
require_once './connect.php';

$stmt = $conn->prepare("SELECT kategorie.nazev,def.Id, def.sekce, def.zobrazeni, def.nazev, def.volby, def.jednotky FROM `kategorie` INNER JOIN definicekategorie as def ON LCASE(kategorie.nazev) = LCASE(def.kategorie) WHERE kategorie.Id = ?   ");
$stmt->bind_param('i', $kategorieId);
$kategorieId = $_SESSION['kategorie'];
$stmt->execute();




$stmt->bind_result($nazevKategorie, $IdDefinice, $sekce, $zobrazeni, $nazev, $volby, $jednotky);
$existuje = false;
$predchozisekce = "";

while ($stmt->fetch()) {
    if ($existuje == false) {
        echo "<h1>Chci poptat ".  $nazevKategorie  ."</h1>";
    }
    $existuje = true;
    if ($sekce != $predchozisekce) {
        echo "<h2 style='font-size: 24px; margin: 19px 0 3px;'>" . ucfirst($sekce) . "</h2>";
        $predchozisekce = $sekce;
    }


    if ($zobrazeni == "počet") {
        include './parts/numberBox.php';
    } elseif ($zobrazeni == "multivolba") {
        echo "<div style='margin-bottom: 5px;'>";
        echo "<h3 style='color: #000; margin-bottom: 3px; font-weight: 700; font-size: 14px;'>" . $nazev . "</h3>";
        foreach (explode(",", $volby) as $volba) {
            include './parts/multiBox.php';
        }
        echo "</div>";
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

