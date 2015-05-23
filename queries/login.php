<?php
session_start();

require_once '../connect.php';
echo "heslo: ".$_POST['heslo'];
$stmt = $conn->prepare('SELECT Id, jmeno, prijmeni FROM users WHERE email = ? AND heslo = ?');
$stmt->bind_param('ss', $nick, $password);
$nick = $_POST['email'];



$password = crypt($_POST['heslo'], '$2a$07$somesillystringforsalt'); 
//echo "pass " . $password;
$stmt->execute();

$stmt->bind_result($Idecko, $jmeno, $prijmeni);

$prihlasen = false;

while ($stmt->fetch()) {
    //echo $Idecko;
    $prihlasen = true;
    $_SESSION['user'] = $Idecko;
    $_SESSION['name'] = $jmeno . " " . $prijmeni;
    
    header('Location: ' . $_SERVER['HTTP_REFERER']  );
    
    $stmt->close();
    exit();
}
$stmt->close();

if($prihlasen){
    echo "přihlášení úspěšné";
} else {
    echo "neúspěšné přihlášení";
}


?>