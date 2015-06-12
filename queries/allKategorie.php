<?php


require_once './connect.php';

$stmt = $conn->prepare("SELECT kategorie.Id, nazev, count(polozky.Id) as nove, kategorie.tooltip FROM kategorie LEFT JOIN polozky ON polozky.kategorieId = kategorie.Id WHERE kategorie.nadkategorie = ? GROUP BY nazev");
$stmt->bind_param('i', $nadkategorie);

$nadkategorie = $_SESSION['kategorie'][$level];

$stmt->execute();

$stmt->bind_result($kategorieId, $nazevKategorie, $nove, $tooltip);
while ($stmt->fetch()) {    
    include './parts/mojeKategorieE.php';
}
$stmt->close();



?>