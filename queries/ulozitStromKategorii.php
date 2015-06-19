

<?php

session_start();

$pole = explode(" ", str_replace("p", "", $_POST['retezec']));
foreach ($pole as $kategorieId) {

    include_once '../connect.php';


    $stmt = $conn->prepare("SELECT Id FROM usersconkategorie WHERE userId = ? AND kategorieId = ?");
    $stmt->bind_param('ii', $userId, $kategorieId);
    $userId = $_SESSION['user'];
    $stmt->execute();

    $stmt->bind_result($idecko);
    $existuje = false;
    while ($stmt->fetch()) {
        $existuje = true;
    }
    $stmt->close();


    if (!$existuje) {
        $stmt = $conn->prepare("INSERT INTO usersconkategorie (userId, kategorieId) VALUES (?,?)");
        $stmt->bind_param('ii', $userId, $kategorieId);
        $stmt->execute();
    }
}

echo "uloženo";
?>





