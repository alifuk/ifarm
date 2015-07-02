<!-- odkazováno z indexu    -->








<form action="./queries/pridatPoptavku.php" method="POST" class="form-inline" id="login" enctype="multipart/form-data">
    <?php
    if (isset($_SESSION['kategorie'])) {
        //echo $_SESSION['kategorie'];

        include './queries/nabidky.php';
    }
    ?>
    <h2>Přiložit foto</h2>        
    <input type="file" name="files[]" multiple value="Vyberte fotky" style="width: 300px; margin-bottom: 20px;"/>

    <submit class="btn btn-primary btn-block center-block" onclick="document.getElementById('login').submit();" style="margin-bottom: 100px;"> Přidat poptávku</submit>
</form>






