<?php


session_start();

require_once '../connect.php';

$stmt = $conn->prepare("SELECT Id, nazev FROM kategorie WHERE LOWER(nazev) LIKE ? ");
$stmt->bind_param('s',  $nazev);
$nazev = "%{$_POST['nazev']}%";

$stmt->execute();

$stmt->bind_result($Idecko, $nazev);

$nalezeno = false;

while ($stmt->fetch()) {
    $nalezeno = true;
    echo "<a href='./queries/setCategory.php?kategorie=" . $Idecko . "&level=1'><div class='nalezenaPolozka'>".$nazev."</div></a>";
    
}
$stmt->close();

if(!$nalezeno){
    echo "<div style='margin:5px;'> Nic nenalezeno</div>";
}




?>