<?php

require_once './connect.php';

$stmt = $conn->prepare("SELECT parametr_s_1, parametr_s_2, parametr_s_3,parametr_s_4,parametr_s_5,parametr_s_6,parametr_s_7,parametr_s_8,parametr_s_9,parametr_s_10, parametr_i_1,parametr_i_2,parametr_i_3,parametr_i_4,parametr_i_5,parametr_i_6,parametr_i_7,parametr_i_8,parametr_i_9,parametr_i_10,parametr_b_1,parametr_b_2,parametr_b_3,parametr_b_4,parametr_b_5,parametr_b_6,parametr_b_7,parametr_b_8,parametr_b_9,parametr_b_10 FROM definiceparametru WHERE kategorieId = ?   ");
$stmt->bind_param('i', $kategorieId);
$kategorieId = $_SESSION['kategorie'][count($_SESSION['kategorie']) - 1];
$stmt->execute();
$parametr_s = array();
$parametr_i = array();
$parametr_b = array();

$stmt->bind_result($parametr_s[0], $parametr_s[1], $parametr_s[2], $parametr_s[3], $parametr_s[4], $parametr_s[5], $parametr_s[6], $parametr_s[7], $parametr_s[8],$parametr_s[9], $parametr_i[0], $parametr_i[1], $parametr_i[2], $parametr_i[3], $parametr_i[4], $parametr_i[5], $parametr_i[6], $parametr_i[7], $parametr_i[8], $parametr_i[9], $parametr_b[0], $parametr_b[1], $parametr_b[2], $parametr_b[3], $parametr_b[4], $parametr_b[5], $parametr_b[6], $parametr_b[7], $parametr_b[8], $parametr_b[9]);
$existuje = false;

while ($stmt->fetch()) {
    $existuje = true;
}
$stmt->close();


if (!$existuje) {
    echo "Definice pro tuto kategorii neexistuje, vytvoře jí: <a href='./forms/vytvorDefinici.php?definicekategore=".$kategorieId."' target='_blank'>Vytvořit definici kategorie</a>";
} else {


    include './sablony/sloupec.php';



    
}









/*


$stmt = $conn->prepare("SELECT jmeno, cena, popis FROM polozky WHERE zobrazit = 1 AND smazano = 0 AND kategorieId = ?   ");
$stmt->bind_param('i', $kategorieId);
$kategorieId = $_SESSION['kategorie'];

$stmt->execute();

$stmt->bind_result($jmeno, $cena, $popis);
while ($stmt->fetch()) {

    include './forms/polozka.php';
}
$stmt->close();*/
?>
