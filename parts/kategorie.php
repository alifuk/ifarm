
<div class="container">


    <a href="./queries/priradKategorie.php?oblastiId=2"><button type="button" class="btn btn-info"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Přidat kategorie z oblasti rostlinná výroba</button></a>
    <button type="button" class="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Přidat kategorie z oblasti masná výroba</button>
    <button type="button" class="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Přidat kategorie z oblasti obchody</button>
    <button type="button" class="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Přidat kategorie z oblasti služby</button><br>

    <br>

    <?php
    print_r($_SESSION['kategorie']);
    for ($i = 0; $i < count($_SESSION['kategorie']); $i++) {
        $level = $i;
        include './parts/kategorieRad.php';
    }
    ?>















</div>

