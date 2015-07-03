<?php

$stmt = $conn->prepare("SELECT jmeno, prijmeni, adresa1, adresa2, telefon, zobrazitAdresu, ico, dic FROM `users` WHERE Id = ?");
$stmt->bind_param('s', $userId);
$userId = $_SESSION['user'];

$stmt->execute();
$stmt->bind_result($jmeno, $prijmeni, $adresa1, $adresa2, $telefon, $zobrazitAdresu, $ico, $dic);


while ($stmt->fetch()) {
    
    include './parts/profileEditF.php';
    
}

$stmt->close();



?>

