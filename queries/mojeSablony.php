<?php

//albiIndex.php




require_once './connect.php';
$stmt = $conn->prepare('SELECT kategorie.nazev, polozky.Id, polozky.datum FROM polozky INNER JOIN kategorie ON kategorie.Id = polozky.kategorieId WHERE polozky.userId = ?');
$stmt->bind_param('s', $user);
$user = $_SESSION['user'];


$stmt->execute();

$stmt->bind_result($kategorieName, $polozkaId, $polozkaDatum);

while ($stmt->fetch()) {
    echo "<a href='./queries/zobrazeniSablony.php?polozkaId=" . $polozkaId . "' target='_blank'>" . $kategorieName . " " . $polozkaDatum . "</a><br>";
    
    $stmt2 = $conn2->prepare('SELECT polozky.Id, polozky.datum FROM polozky WHERE polozky.nabidka = ?');
    $stmt2->bind_param('s', $polozkaId);


    $stmt2->execute();

    $stmt2->bind_result($polozkaId, $polozkaDatum);

    while ($stmt2->fetch()) {
        echo "<a href='./queries/zobrazeniSablony.php?polozkaId=" . $polozkaId . "' target='_blank'>Nabídka: " . $kategorieName . " " . $polozkaDatum . "</a><br>";
    }
    $stmt2->close();
}


$stmt->close();
?>









