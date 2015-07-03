


<div id="" class="iboxshadow">
    <table class="table table-striped table-condensed table-hover">
        <thead>
            <tr>
                <th>ID poptávky</th>
                <th>Kategorie</th>
                <th>Datum</th>
                <th>Poptávající</th>
                <th></th>
            </tr>
        </thead>
        <tbody>



            <?php
            //albiIndex.php

            $limitRows = 10;

            require './connect.php';
            $stmt = $conn->prepare('SELECT users.jmeno, polozky.userId, kategorie.nazev, polozky.Id, polozky.datum
FROM usersconkategorie as con
INNER JOIN polozky ON con.kategorieId = polozky.kategorieId
INNER JOIN kategorie ON kategorie.Id = polozky.kategorieId
INNER JOIN users ON users.Id = polozky.userId
WHERE con.userId = ?
ORDER BY polozky.Id DESC
LIMIT ?, ?');
            $stmt->bind_param('sss', $user, $pagi, $limitRows);
            $user = $_SESSION['user'];
            
            $pagi = 0;
            if(isset($_GET['strana'])){
               $pagi =  $_GET['strana'] * $limitRows;
            }
            

            $stmt->execute();

            $stmt->bind_result($userJmeno, $userId, $kategorieName, $polozkaId, $polozkaDatum);

            while ($stmt->fetch()) {
                $prihlasen = true;
                include './parts/verejneSablonyRadekTabulkyPoptavky.php';
            }
            
            $stmt->close();
            ?>



        </tbody>    
    </table>
    
    <?php 
    
    $stmt = $conn->prepare('SELECT kategorie.nazev, polozky.Id, polozky.datum, SUM( (nab.Id IS NOT NULL) )AS pocetNabidek
FROM polozky 
INNER JOIN kategorie ON kategorie.Id = polozky.kategorieId 
LEFT JOIN 
(
SELECT * 
FROM polozky
WHERE polozky.nabidka <> 0      
) as nab ON nab.nabidka = polozky.Id 
WHERE polozky.userId = ? AND polozky.nabidka = 0
GROUP BY kategorie.nazev, polozky.Id, polozky.datum');
            $stmt->bind_param('s', $user);
            $user = $_SESSION['user'];
            
            $stmt->execute();
            $stmt->bind_result($kategorieName, $polozkaId, $polozkaDatum, $pocetNabidek);

            while ($stmt->fetch()) {
            }
            
            $pocetVysledku = $stmt->num_rows;
            $stmt->close();
    
    
    
    if($pocetVysledku > $limitRows){
        echo "Strana: ";
        $paginatoru = $pocetVysledku / $limitRows;
        for($i = 0; $i < $paginatoru; $i++){
            
            $adresa = $_SERVER['REQUEST_URI'];
            if(strpos($adresa,"?") != FALSE){
                $adresa = substr($adresa, 0, strpos($adresa,"?"));
            }
            
            $trida = "";
            if(isset($_GET['strana'])){
                if($_GET['strana'] == $i){
                    
                    $trida = "style='background-color: #D9EDF7;'";
                }
            }
            
            
            echo " <a ".$trida."href='".$adresa."?strana=".$i."'>".$i."</a> ";
        }
        
        
    }
    
    
    ?>



</div>






