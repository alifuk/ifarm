<div style="background-color: #d9edf7; text-align: center;">
    
<?php

if (isset($_SESSION['nastavenProfil']) && $_SESSION['nastavenProfil'] == false) {
    echo "<h2>Zkontrolujte si prosím Vaše údaje v <a href='nastaveni.php'>nastavení</a>.</h2>";
    $_SESSION['nastavenProfil'] = true;
} else if (isset($_SESSION['nastavenPoptavky']) && $_SESSION['nastavenPoptavky'] == false) {
    echo "<h2>Tip: nastavte si kategorie, z kterých chcete <a href='poptavka.php'>poptávat</a></h2>";
    $_SESSION['nastavenPoptavky'] = true;
} else if (isset($_SESSION['nastavenNabidky']) && $_SESSION['nastavenNabidky'] == false){
    echo "<h2>Tip: dostávejte aktuální nabídky. Stačí si <a href='nabidka.php'>zvolit</a> kategorie nabídek.</h2>";
    $_SESSION['nastavenNabidky'] = true;
}


?>

    
</div>













