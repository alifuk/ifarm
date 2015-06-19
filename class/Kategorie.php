<?php
class Kategorie {    
    
    public function vygenerovaneMenu() {
        /* echo "<div id='cssmenu'><ul>";
          echo $this->getSubmenu(0);
          echo "</ul></div>"; */

        include './parts/vygenerovaneMenu.php';
    }

    private function hasSubmenu($nadKategorie) {
        require './connect.php';

        $stmt = $conn->prepare("SELECT kategorie.Id, nazev, count(polozky.Id) as nove, kategorie.tooltip FROM kategorie LEFT JOIN polozky ON polozky.kategorieId = kategorie.Id WHERE kategorie.nadkategorie = ? GROUP BY nazev");
        $stmt->bind_param('i', $nadKategorie);

        $stmt->execute();

        $stmt->bind_result($kategorieId, $nazevKategorie, $nove, $tooltip);
        $existuje = false;
        while ($stmt->fetch()) {
            $existuje = true;
        }
        $stmt->close();
        return $existuje;
    }

    public function getSubmenu($nadKategorie) {

        require './connect.php';

        $stmt = $conn->prepare("SELECT kategorie.Id, nazev, count(polozky.Id) as nove, kategorie.tooltip FROM kategorie LEFT JOIN polozky ON polozky.kategorieId = kategorie.Id WHERE kategorie.nadkategorie = ? GROUP BY nazev");
        $stmt->bind_param('i', $nadKategorie);

        $stmt->execute();

        $stmt->bind_result($kategorieId, $nazevKategorie, $nove, $tooltip);
        while ($stmt->fetch()) {
            //$this->vykresliPolozku($nazevKategorie, $kategorieId);
            $this->vykresliCheckboxy($nazevKategorie, $kategorieId);
            
            
        }
        $stmt->close();
    }

    private function vykresliPolozku($nazevKategorie, $kategorieId) {

        if ($this->hasSubmenu($kategorieId)) {
            echo "<li class='has-sub'><a href='#'><span>";
            echo $nazevKategorie;
            echo "</span></a><ul>";
            echo $this->getSubmenu($kategorieId);
            echo "</ul></li>";
        } else {

            echo "<li><a href='./queries/setCategory.php?kategorie=" . $kategorieId . "&level=1'><span>";
            echo $nazevKategorie;
            echo "</span></a></li>";
        }
    }
    
    private function vykresliCheckboxy($nazevKategorie, $kategorieId) {

        if ($this->hasSubmenu($kategorieId)) {
            echo '<li id="l'.$kategorieId.'"><input type="checkbox" id="p'.$kategorieId.'" ><label>';
            echo $nazevKategorie;
            echo "</label><ul>";
            echo $this->getSubmenu($kategorieId);
            echo "</ul>";
        } else {

            echo '<li id="l'.$kategorieId.'"><input type="checkbox" id="p'.$kategorieId.'"><label>' . $nazevKategorie . "</label>";
            /*echo $nazevKategorie;
            echo "</span></a></li>";*/
        }
    }

    public function checkBoxTree() {

        require './connect.php';

        $this->getTree(0);
    }

    
    public function generujJs(){
        
        require './connect.php';

        $stmt = $conn->prepare("SELECT kategorieId FROM `usersconkategorie` WHERE userId = ?");
        $stmt->bind_param('i', $userId);
        $userId = $_SESSION['user'];
        $stmt->execute();

        $stmt->bind_result($kategorieId);
        while ($stmt->fetch()) {
            //$this->vykresliPolozku($nazevKategorie, $kategorieId);
            
            echo "$('#tree1').checkboxTree('check', $('#p".$kategorieId."'));";
            //echo "$('#tree1').checkboxTree('expand', $('#l".$kategorieId."'));";
            
            
        }
        $stmt->close();
        
        
        
        
        
    }
    
    
    
    

}
?>


<!--
<div id='cssmenu'>
    <ul>
        <li><a href='#'><span>Nabízet</span></a></li>
        <li class='active has-sub'><a href='#'><span>Šablony poptávky</span></a>
            <ul>


                <li class='has-sub'><a href='#'><span>Product 1</span></a>
                    <ul>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                        <li class='has-sub'><a href='#'><span>Product 1</span></a>
                            <ul>
                                <li><a href='#'><span>Sub Product</span></a></li>
                                <li class='last'><a href='#'><span>Sub Product</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </li>


                <li class='has-sub'><a href='#'><span>Product 2</span></a>
                    <ul>
                        <li><a href='#'><span>Sub Product</span></a></li>
                        <li class='last'><a href='#'><span>Sub Product</span></a></li>
                    </ul>
                </li>


            </ul>
        </li>
        <li><a href='#'><span>Dotace</span></a></li>
        <li class='last'><a href='#'><span>Můj profil</span></a></li>
    </ul>
</div>


-->