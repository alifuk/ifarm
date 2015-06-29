<?php

include './class/Kategorie.php';

$menuSablon = new Kategorie();
echo "<h2 style='  padding-bottom: 0px;'>Zadat poptávku:</h2>";

include './parts/naseptavac.php';
echo $menuSablon->vygenerovaneMenu();
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