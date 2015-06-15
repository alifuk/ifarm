<?php

class MenuSablon {

    public function vykresliMenu() {
        echo "<div id='cssmenu'><ul>";

        echo $this->getSubmenu(0);


        echo "</ul></div>";
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

    private function getSubmenu($nadKategorie) {

        require './connect.php';

        $stmt = $conn->prepare("SELECT kategorie.Id, nazev, count(polozky.Id) as nove, kategorie.tooltip FROM kategorie LEFT JOIN polozky ON polozky.kategorieId = kategorie.Id WHERE kategorie.nadkategorie = ? GROUP BY nazev");
        $stmt->bind_param('i', $nadKategorie);

        $stmt->execute();

        $stmt->bind_result($kategorieId, $nazevKategorie, $nove, $tooltip);
        while ($stmt->fetch()) {
            $this->vykresliPolozku($nazevKategorie, $kategorieId);
            //include './parts/mojeKategorieE.php';
        }
        $stmt->close();
    }

    private function vykresliPolozku($nazevKategorie, $kategorieId) {

        if ($this->hasSubmenu($kategorieId)) {
            echo "<li class='has-sub'><a href='#'><span>";
            echo $nazevKategorie;
            echo "</span></a>";
            echo $this->getSubmenu($kategorieId);
            echo "</li>";
            
        } else {

            echo "<li><a href='#'><span>";
            echo $nazevKategorie;
            echo "</span></a></li>";
        }
    }

}

$menuSablon = new menuSablon();
echo $menuSablon->vykresliMenu();
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