

<br>
<div class="container-fluid">
    <div class="row">


        <div class="col-md-3"></div>  

        <?php
        if (isset($_SESSION['kategorie'])) {
            //echo $_SESSION['kategorie'];

            include './queries/nabidky.php';
        }
        ?>





    </div>
</div>




