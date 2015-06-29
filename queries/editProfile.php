<?php

session_start();

require_once '../connect.php';
echo "heslo: " . $_POST['heslo'];
$stmt = $conn->prepare('UPDATE users SET jmeno=?, adresa1=?, adresa2=?, telefon=?, nastavenProfil=1 WHERE Id=?');
$stmt->bind_param('sssss', $jmeno, $adresa1, $adresa2, $telefon, $userId);
$jmeno = $_POST['jmeno'];
$adresa1 = $_POST['adresa1'];
$adresa2 = $_POST['adresa2'];
$telefon = $_POST['telefon'];
$userId = $_SESSION['user'];


$_SESSION['nastavenProfil'] = true;



$stmt->execute();
$stmt->close();


header('Location: ' . $_SERVER['HTTP_REFERER']);
?>


