<?php

require_once './connect.php';

$stmt = $conn->prepare("SELECT jmeno, cena, popis FROM polozky WHERE zobrazit = 1 AND smazano = 0 AND kategorieId = ?   ");
$stmt->bind_param('i', $kategorieId);
$kategorieId = $_SESSION['kategorie'];

$stmt->execute();

$stmt->bind_result($jmeno, $cena, $popis);
while ($stmt->fetch()) {
    
    include './forms/polozka.php';
}
$stmt->close();
?>
