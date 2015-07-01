<?php

session_start();

require_once '../connect.php';
//echo "heslo: " . $_POST['heslo'];
$stmt = $conn->prepare('SELECT Id, jmeno, prijmeni, nastavenProfil, nastavenPoptavky, nastavenNabidky, adresa1, adresa2, telefon, datum FROM users WHERE email = ? AND heslo = ?');
$stmt->bind_param('ss', $nick, $password);
$nick = $_POST['email'];



$password = crypt($_POST['heslo'], '$2a$07$somesillystringforsalt');
//echo "pass " . $password;
$stmt->execute();

$stmt->bind_result($Idecko, $jmeno, $prijmeni, $nastavenProfil, $nastavenPoptavky, $nastavenNabidky, $adresa1, $adresa2, $telefon, $datum);

$prihlasen = false;

while ($stmt->fetch()) {
    //echo $Idecko;
    $prihlasen = true;
    $_SESSION['user'] = $Idecko;
    $_SESSION['name'] = $jmeno;
    $_SESSION['nastavenProfil'] = $nastavenProfil;
    $_SESSION['nastavenPoptavky'] = $nastavenPoptavky;
    $_SESSION['nastavenNabidky'] = $nastavenNabidky;
    $_SESSION['adresa1'] = $adresa1;
    $_SESSION['adresa2'] = $adresa2;
    $_SESSION['telefon'] = $telefon;
    $_SESSION['datum'] = $datum;
    


}
$stmt->close();

if ($prihlasen) {
    echo "prihlaseni OK";
    
    header('Location: ../prehled.php');
} else {
    echo "neúspěšné přihlášení";
}
?>