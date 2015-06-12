<?php

require_once '../connect.php';




echo $_POST['email'] . $_POST['heslo'] . $_POST['heslo2'] . $_POST['telefon'] . $_POST['jmeno'] . $_POST['prijmeni'];

if (isset($_POST['email']) && isset($_POST['heslo']) && isset($_POST['heslo2']) && isset($_POST['telefon']) && isset($_POST['jmeno']) && isset($_POST['prijmeni'])) {
    if ($_POST['heslo'] != $_POST['heslo2']) {
        echo "hesla nesouhlasí";
        die();
    }

    $stmt = $conn->prepare('INSERT INTO users (email, heslo, jmeno, prijmeni, telefon)
VALUES (?,?,?,?,?)');
    $stmt->bind_param('sssss', $email, $heslo, $jmeno, $prijmeni, $telefon);

    $email = $_POST['email'];
    $heslo = crypt($_POST['heslo'], '$2a$07$somesillystringforsalt'); 
    $jmeno = $_POST['jmeno'];
    $prijmeni = $_POST['prijmeni'];
    $telefon = $_POST['telefon'];



    $stmt->execute();





    /*
      $stmt->bind_result($lastId,$lastId1);
      while ($stmt->fetch()) {
      echo $lastId;
      }
     */
    $stmt = $conn->prepare('SELECT Id FROM users where email = ? AND heslo = ?');
    $stmt->bind_param('ss', $email, $heslo);

    $email = $_POST['email'];
    $heslo = crypt($_POST['heslo'], '$2a$07$somesillystringforsalt'); 
    $stmt->execute();
    $stmt->bind_result($lastId);

    while ($stmt->fetch()) {
        echo "aaaha";
        $_SESSION['user'] = $lastId;
        $_SESSION['name'] = $jmeno + " " + $prijmeni;
        $conn->close();
        exit();
    }



    $conn->close();
    echo "registrase úspěšná";
} else {
    echo "Nejsou vyplněna všechna pole";
}
?>