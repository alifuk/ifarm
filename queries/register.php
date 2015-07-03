<?php

require_once '../connect.php';
session_start();


echo $_POST['email'] . $_POST['heslo'] . $_POST['ico'];

if (isset($_POST['email']) && isset($_POST['heslo']) && isset($_POST['ico'])) {



    $url = 'http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico=';
    $ico = (int) trim(str_replace(' ', '', $_POST['ico']));
    $url = $url . $ico;

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);
    $data = curl_exec($curl);
    curl_close($curl);

    if ($data)
        $xml = simplexml_load_string($data);

    $a = array();

    if (isset($xml)) {
        $ns = $xml->getDocNamespaces();
        $data = $xml->children($ns['are']);
        $el = $data->children($ns['D'])->VBAS;

        if (strval($el->ICO) == $ico) {
            $a['ico'] = strval($el->ICO);
            $a['dic'] = strval($el->DIC);
            $a['firma'] = strval($el->OF);


            $aa = $el->children($ns['D'])->AA;
            $a['ulice'] = strval($aa->AT);
            if ($a['ulice'] == "") {
                $a['ulice'] = strval($el->AD->UC) . " " . strval($el->AD->PB);
            }

            $a['mesto'] = strval($el->RRZ->FU->NFU);

            /*
              $a['jmeno'] = "";
              $a['prijmeni'] = "";
              // detekce jména a firmy ..
              $firma = $a['firma'];
              $roz = explode(" ",$firma);
              $match = preg_match("/(s\.r\.o\.|s\. r\. o\.|spol\. s r\.o\.|a\.s\.|a\. s\.|v\.o\.s|v\. o\. s\.|o\.s\.|k\.s\.|kom\.spol\.)/",$firma);
              if (count($roz) == 2 AND !$match) {
              // nenašli jsme shodu s firmou, pravděpodobně se jedná o živnostníka se jménem ..
              $a['jmeno'] = $roz[0];
              $a['prijmeni'] = $roz[1];
              }

              $a['ulice']    = strval($el->AA->NU);
              if (!empty($el->AA->CO) OR !empty($el->AA->CD)) {
              // detekování popisného a orientačního čísla
              $a['ulice'] .= " ";
              if (!empty($el->AA->CD)) $a['ulice'] .= strval($el->AA->CD);
              if (!empty($el->AA->CO) AND !empty($el->AA->CD)) $a['ulice'] .= "/";
              if (!empty($el->AA->CO)) $a['ulice'] .= strval($el->AA->CO);
              }

              $a['mesto']    = strval($el->AA->N);
              $a['psc']    = strval($el->AA->PSC);


             */
            $a['stav'] = 'ok';
        } else {
            $a['stav'] = 'IČ firmy nebylo v databázi ARES nalezeno';
        }
    } else {
        $a['stav'] = 'Databáze ARES není dostupná';
    }





    print_r($a);





    $url = "https://maps.googleapis.com/maps/api/geocode/xml?address=" . urlencode($a['ulice']) . "&key=AIzaSyDmPjww9bGInAdOuHn7PzD5WtVT2fx-eP8";


    $xml = simplexml_load_string(file_get_contents($url));
    $lat = $xml->result->geometry->location->lat;
    $lng = $xml->result->geometry->location->lng;















    $stmt = $conn->prepare('INSERT INTO users (email, heslo, jmeno, ico, dic, adresa1, lat, lng) VALUES (?,?,?,?,?,?,?,?)');
    $stmt->bind_param('ssssssss', $email, $heslo, $firma, $ico, $dic, $ulice, $lat, $lng);

    
    $firma = "";
    if (isset($a['firma'])) {
        $firma = $a['firma'];
    }

    $dic = "";
    if (isset($a['dic'])) {
        $dic = $a['dic'];
    }

    $ulice = "";
    if (isset($a['ulice'])) {
        $ulice = $a['ulice'];
    }


    $email = $_POST['email'];
    $heslo = crypt($_POST['heslo'], '$2a$07$somesillystringforsalt');


    $stmt->execute();





    /*
      $stmt->bind_result($lastId,$lastId1);
      while ($stmt->fetch()) {
      echo $lastId;
      }
     */
    $stmt = $conn->prepare('SELECT Id FROM users where email = ? AND heslo = ?');
    $stmt->bind_param('ss', $email, $heslo);

    $email = $_POST['email'];
    $heslo = crypt($_POST['heslo'], '$2a$07$somesillystringforsalt');

    $stmt->execute();
    $stmt->bind_result($lastId);

    while ($stmt->fetch()) {
        echo "vlozene ID :::: " . $lastId;
        $_SESSION['user'] = $lastId;
        $_SESSION['name'] = $firma;

        echo "registrace uspesna";
    }



    $conn->close();

    echo "něco není v pořádku";
} else {
    echo "Nejsou vyplněna všechna pole";
}
?>