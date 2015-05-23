

<br>
<div class="container-fluid">
    <div class="row">


        <div class="col-md-3"></div>        
        <div class="col-md-9">

                <?php
                if (isset($_SESSION['kategorie'])) {
                    //echo $_SESSION['kategorie'];
                    
                    include './queries/nabidky.php';
                    
                }
                ?>



        </div>



    </div>
</div>




