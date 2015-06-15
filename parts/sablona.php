<!-- odkazováno z indexu    -->

<br>
<div class="container-fluid">
    <div class="row">


        <div class="col-md-2"></div>  
        <div class="col-md-8" style="margin-top:20px;">

            <form action="./queries/pridatPoptavku.php" method="POST" class="form-inline" id="login">
                <?php
                if (isset($_SESSION['kategorie'])) {
                    //echo $_SESSION['kategorie'];

                    include './queries/nabidky.php';
                }
                ?>
                
                <submit class="btn btn-primary btn-block center-block" onclick="document.getElementById('login').submit();"> Přidat poptávku</submit>
            </form>
        </div>
    </div>


</div>




