<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Přidat definici kategorie</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

        <link rel="stylesheet" href="../bootstrap-3.1.1-dist/css/bootstrap.min.css">

        <link rel="stylesheet" href="../bootstrap-3.1.1-dist/css/bootstrap-theme.min.css">


        <script src="./bootstrap-3.1.1-dist/js/jquery-2.1.4.min.js"></script>  
    </head>

    <body><?php
                
                session_start();
                
                $_SESSION['definicekategore'] = $_GET['definicekategore'];
                
                ?>
        <h1>Přidat definici kategorie <?php echo $_SESSION['definicekategore']; ?></h1>
        <div class="col-md-3">

            <form action="../queries/pridatDefinici.php" method="POST" class="form-horizontal register" id="definiceForm">


                <?php
                
                
                
                for ($i = 0; $i < 30; $i++) {
                    $str = "";
                    if ($i > 19) {
                        $str = "parametr_b_" . ($i - ((int)($i/10)*10));
                    } else if ($i > 9) {

                        $str = "parametr_i_" . ($i - ((int)($i/10)*10));
                    } else {

                        $str = "parametr_s_" . ($i - ((int)($i/10)*10));
                    }


                    include '../sablony/textDefinition.php';
                }
                ?>

                <submit class="btn btn-primary btn-lg btn-block center-block" onclick="document.getElementById('definiceForm').submit();"> Přidat definici kategorie</submit>
            </form>
        </div>







    </body>

</html>











