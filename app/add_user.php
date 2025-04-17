<?php
global $pdo;
require_once 'includes/dbconnect.php';

$username = 'yves';
$email = 'saint@laurent.cd';


$add_user = 'INSERT INTO users(username, email) VALUES(:username, :email)';


$stmt = $pdo->prepare($add_user);
$exec = $stmt->execute([
    'username' => $username,
    'email' => $email
]);
if($exec){
    echo '<p>Inscription réussie</p>';
}