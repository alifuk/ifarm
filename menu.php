            

<?php
$odkaz = "index"; // odkaz, na který se bude směřovat po kliknutí na horní logo
if( isset($_SESSION['user']) && $_SESSION['user'] != "" ){ 
    $odkaz= "prehled";    
}

?>
<!-- start header -->
<div class="radek shadow hlavicka">
    <h1><a href="<?php echo $odkaz; ?>.php" style="  float: left;
           width: 100%;
           height: 100%;">Energie pod kontrolou</a></h1>
    <nav>
        <ul>
            <li><a href="index.php#videa">Projekt ifarm</a></li>
            <li><a href="index.php#ukazka">Ukázka z praxe</a></li>
            <li><a href="index.php#jaktofunguje">Jak to funguje?</a></li>

            <li><a href="index.php#kolik">Kolik to stojí?</a></li>
            <li><a href="index.php#vyzkouset">Vyzkoušet</a></li>
            <li><a href="index.php#reference">Reference</a></li>
            <li><a href="index.php#podminky">Obchodní podmínky</a></li>
            <li><a href="index.php#kontakt">Kontakt</a></li>	
            <li><div id="footleft">

                    <?php
                    if (isset($_SESSION['user']) && $_SESSION['user'] != "") {
                        include './parts/odhlasitButton.php';
                    } else {
                        include './parts/prihlasitButton.php';
                    }
                    ?>

                </div> 

            </li>	
        </ul>			
    </nav>
</div>