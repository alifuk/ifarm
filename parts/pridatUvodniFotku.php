<button type="button" class="btn btn-default" aria-label="Left Align" style="position: relative; left: -40px; top: 240px;z-index: 5;">






    <?php
    require_once './connect.php';

    $stmt = $conn->prepare("SELECT profilovafotka, uvodnifotka FROM users WHERE Id = ? LIMIT 1");
    $stmt->bind_param('i', $Id);

    $Id = $_SESSION['user'];

    $stmt->execute();

    $stmt->bind_result($profilovafotka, $uvodnifotka);
    $glyphicon = "glyphicon glyphicon-cog";
    $text = "Změnit úvodní fotku";
    while ($stmt->fetch()) {

        if ($profilovafotka == "clanwood.png") {
            $glyphicon = "glyphicon glyphicon-plus";
            $text = "Přidat úvodní fotku";
        }
    }
    $stmt->close();
    ?>



    <span class="<?php echo $glyphicon; ?>" aria-hidden="true"><?php echo $text; ?></span>


</button>





