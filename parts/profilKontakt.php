
<?php

require_once './connect.php';

$stmt = $conn->prepare("SELECT jmeno, adresa1, telefon FROM users WHERE Id = ?");
$stmt->bind_param('i', $user);

$user = $_SESSION['user'];

$stmt->execute();

$stmt->bind_result($jmeno);
while ($stmt->fetch()) {
    echo "<a href='profil.php?spolecnost=" . $jmeno . "'>Odkaz na profil</a>";
}
$stmt->close();
?>