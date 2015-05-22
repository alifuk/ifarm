


<div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
        Přidat kategorii
        <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">              
        <?php 
        
        include './queries/nepridanyKategorie.php'; 
        
        ?>
    </ul>
</div>


<ul class="nav nav-tabs center-block">
    <?php
    include './queries/mojeKategorie.php';
    ?>
</ul>






