<?php


require_once './connect.php';

$stmt = $conn->prepare("SELECT kategorie.Id, nazev, count(polozky.Id) as nove, kategorie.tooltip FROM usersconkategorie as con INNER JOIN kategorie ON kategorie.Id = con.kategorieId LEFT JOIN polozky ON polozky.kategorieId = kategorie.Id WHERE con.userId = ? AND kategorie.nadkategorie = ? GROUP BY nazev");
$stmt->bind_param('si', $user, $nadkategorie);
$user = $_SESSION['user'];

$nadkategorie = $_SESSION['kategorie'][$level];

$stmt->execute();

$stmt->bind_result($kategorieId, $nazevKategorie, $nove, $tooltip);
while ($stmt->fetch()) {    
    include './parts/mojeKategorieE.php';
}
$stmt->close();



?>