<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once '../connect.php';

$stmt = $conn->prepare('INSERT INTO usersconkategorie (kategorieId, userId) VALUES (?,?)');
$stmt->bind_param('ss', $kategorie, $user);
$kategorie = $_GET['kategorieId'];
$user = $_SESSION['user'];


$stmt->execute();

$stmt->close();

header('Location: ' . $_SERVER['HTTP_REFERER']  );
?>