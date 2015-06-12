            
<!-- start header -->

<div class="radek shadow hlavicka">
    <h1><a href="#top" style="  float: left;
           width: 100%;
           height: 100%;">Energie pod kontrolou</a></h1>
    <nav>
        <ul>
            <li><a href="#videa">Projekt ifarm</a></li><li><a href="#ukazka">Ukázka z praxe</a></li>
            <li><a href="#jaktofunguje">Jak to funguje?</a></li>

            <li><a href="#kolik">Kolik to stojí?</a></li>
            <li><a href="#vyzkouset">Vyzkoušet</a></li>
            <li><a href="#reference">Reference</a></li>
            <li><a href="#podminky">Obchodní podmínky</a></li>
            <li><a href="#kontakt">Kontakt</a></li>	
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
