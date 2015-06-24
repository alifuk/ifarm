<h2>Poptáváme:</h2>


<?php
require_once './connect.php';

$stmt = $conn->prepare("SELECT kategorie.nazev FROM usersconkategorie AS con INNER JOIN users ON  con.userId = users.Id INNER JOIN kategorie ON kategorie.Id = con.kategorieId WHERE users.jmeno = ? ");
$stmt->bind_param('s', $userName);

$userName = $_GET['spolecnost'];
$stmt->execute();
$stmt->bind_result($kategorie);
$counter = 0;
while ($stmt->fetch()) {
    if ($counter < 15) {
        echo "<span>" . $kategorie . "<br></span>";
    } else {

        echo "<span class='hidePoptavame'>" . $kategorie . "<br></span>";
    }
    $counter++;
}
$stmt->close();


if ($counter >= 15) {
    echo "<span class='showPoptavame'>Více</span>";
}
?>


<script>
    $(document).ready(function () {
        $(".hidePoptavame").hide();
    });
    
    $(".showPoptavame").click(function () {
            $(".showPoptavame").hide();
            $(".hidePoptavame").show(400);
        });

</script>