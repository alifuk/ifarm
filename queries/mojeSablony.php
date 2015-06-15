<h1>Moje poptávky</h1>

<?php
//albiIndex.php



require './connect.php';
$stmt = $conn->prepare('SELECT kategorie.nazev, polozky.Id, polozky.datum FROM polozky INNER JOIN kategorie ON kategorie.Id = polozky.kategorieId WHERE polozky.userId = ?');
$stmt->bind_param('s', $user );
$user = $_SESSION['user'];


$stmt->execute();

$stmt->bind_result($kategorieName, $polozkaId, $polozkaDatum);

while ($stmt->fetch()) {
    $prihlasen = true;
    
    echo "<a href='./queries/zobrazeniSablony.php?polozkaId=".$polozkaId."' target='_blank'>".$kategorieName. " " . $polozkaDatum."</a><br>";
    
    
    
}
$stmt->close();



?>









