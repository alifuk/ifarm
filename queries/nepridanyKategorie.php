

<?php

require_once './connect.php';




$stmt = $conn->prepare("SELECT kategorie.Id, kategorie.nazev FROM kategorie
LEFT JOIN (SELECT * FROM usersconkategorie WHERE userId = ?) as con ON kategorie.Id = con.kategorieId
WHERE con.userId IS NULL AND nadkategorie = ?");
$stmt->bind_param('si', $user, $nadkategorie);
$user = $_SESSION['user'];
$nadkategorie = $_SESSION['kategorie'][$level];

$stmt->execute();

$stmt->bind_result($Idecko, $jmeno);



while ($stmt->fetch()) {
    
    include './forms/nepridanaKategorieListPolozka.php';

    
}
$stmt->close();
?>
