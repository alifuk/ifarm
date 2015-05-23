
<div class="col-md-3">

    <form action="./queries/login.php" method="POST" class="form-horizontal register" id="login">


        <?php
        for ($i = 0; $i < count($parametr_s); $i++) {

            if ($parametr_s[$i] != null && $parametr_s[$i] != "") {
                
                include './sablony/textBox.php';
            }
        }
        
        for ($i = 0; $i < count($parametr_i); $i++) {

            if ($parametr_i[$i] != null && $parametr_i[$i] != "") {
                
                include './sablony/numberBox.php';
            }
        }
        
        
        for ($i = 0; $i < count($parametr_b); $i++) {

            if ($parametr_b[$i] != null && $parametr_b[$i] != "") {
                
                include './sablony/boolBox.php';
            }
        }
        
        
        
        
        ?>


        

        <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('login').submit();"> Přidat poptávku</submit>
    </form>
</div>
</div>


