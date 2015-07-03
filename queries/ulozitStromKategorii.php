

<?php

session_start();

$pole = explode(" ", str_replace("p", "", $_POST['retezec']));

$kategorie = "usersconkategorie";
if ($_POST['typ'] == "nabidka") {
    $kategorie = "usersconkategorienabidky";
}

include_once '../connect.php';

$stmt = $conn->prepare("DELETE FROM ".$kategorie." WHERE userId = ? ");
$stmt->bind_param('i', $userId);
$userId = $_SESSION['user'];
$stmt->execute();

$stmt->close();

foreach ($pole as $kategorieId) {


    $stmt = $conn->prepare("INSERT INTO ".$kategorie." (userId, kategorieId) VALUES (?,?)");
    $stmt->bind_param('ii', $userId, $kategorieId);
    $stmt->execute();
}

echo "uloženo";
?>





