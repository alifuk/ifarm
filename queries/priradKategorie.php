<?php
session_start();

require_once '../connect.php';

$stmt = $conn->prepare("SELECT kategorieId FROM priradkategorie WHERE oblastiId = ?");
$stmt->bind_param('i', $oblastiId);
$oblastiId = $_GET['oblastiId'];

$stmt->execute();

$stmt->bind_result($kategorieId);
$i = 0;
$poleKategorii = array();
while ($stmt->fetch()) {
    $poleKategorii[$i] = $kategorieId;
    $i++;
}
$stmt->close();

print_r($poleKategorii);

for ($a = 0; $a < count($poleKategorii); $a++) {


    $stmt = $conn->prepare("SELECT kategorieId FROM usersconkategorie WHERE userId = ? AND kategorieId = ?");
    $stmt->bind_param('ii', $userId, $kategorieId);
    $userId = $_SESSION['user'];
    $kategorieId = $poleKategorii[$a];
    
    $stmt->execute();


    $stmt->bind_result($kategorieId);


    $prirazeno = false;

    while ($stmt->fetch()) {
        $prirazeno = true;
    }
    $stmt->close();



    if (!$prirazeno) {

        $stmt = $conn->prepare("INSERT INTO usersconkategorie (userId, kategorieId) VALUES(?,?)");
        $stmt->bind_param('ii', $userId, $kategorieId);
        $userId = $_SESSION['user'];
        $kategorieId = $poleKategorii[$a];
        $stmt->execute();

        $stmt->close();
    }
}
?>
