<?php

$stmt = $conn->prepare("SELECT jmeno, prijmeni, adresa1, adresa2, telefon, zobrazitAdresu FROM `users` WHERE Id = ?");
$stmt->bind_param('s', $userId);
$userId = $_SESSION['user'];

$stmt->execute();
$stmt->bind_result($jmeno, $prijmeni, $adresa1, $adresa2, $telefon, $zobrazitAdresu);


while ($stmt->fetch()) {
    
    include './forms/profileEditF.php';
    
}

$stmt->close();



?>

