<?php  

header("Content-Type: application/json; charset=UTF-8"); 
$url = 'http://wwwinfo.mfcr.cz/cgi-bin/ares/darv_bas.cgi?ico='; 
$ico = (int)trim(str_replace(' ', '', $_GET['ico'])); 
$url = $url . $ico; 

$curl = curl_init(); 
curl_setopt($curl, CURLOPT_URL, $url); 
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($curl, CURLOPT_HEADER, false); 
$data = curl_exec($curl); 
curl_close($curl); 

if ($data) $xml = simplexml_load_string($data); 

$a = array(); 

if (isset($xml)) { 
    $ns = $xml->getDocNamespaces(); 
    $data = $xml->children($ns['are']); 
    $el = $data->children($ns['D'])->VBAS; 
     
    if (strval($el->ICO) == $ico) { 
        $a['ico']     = strval($el->ICO); 
        $a['dic']     = strval($el->DIC); 
        $a['firma'] = strval($el->OF); 
        
        
        $aa = $el->children($ns['D'])->AA;
        $a['ulice']    = strval($aa->AT);
        if($a['ulice'] == ""){
           $a['ulice']  = strval($el->AD->UC) . " " . strval($el->AD->PB);
        }
        
        $a['mesto']    = strval($el->RRZ->FU->NFU); 
        
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
        $a['stav']     = 'ok'; 
    } else { 
        $a['stav']     = 'IČ firmy nebylo v databázi ARES nalezeno'; 
    } 
} else { 
    $a['stav']     = 'Databáze ARES není dostupná'; 
} 

echo json_encode($a); 

?>