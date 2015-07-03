<?php

session_start();
include_once '../connect.php';

$stmt = $conn->prepare("UPDATE users SET jmeno = ?, telefon = ?, dic = ?, adresa1 = ?, adresa2 = ? WHERE Id = ? ");
$stmt->bind_param('sssssi', $jmeno, $telefon, $dic, $adresa1, $adresa2, $userId);
$userId = $_SESSION['user'];
$jmeno = $_POST['jmeno'];
$telefon = $_POST['telefon'];
$dic = $_POST['dic'];
$adresa1 = $_POST['adresa1'];
$adresa2 = $_POST['adresa2'];


$stmt->execute();
$stmt->close();
?>





