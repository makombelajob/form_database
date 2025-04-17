<?php
<<<<<<< HEAD
global $pdo;
require_once 'includes/dbconnect.php';

$username = 'yves';
$email = 'saint@laurent.cd';
=======
require_once 'includes/dbconnect.php';

$username = 'makombela';
$email = 'makombela@test.cd';
>>>>>>> d7b8b52615c5a1a8e3c36f5a8dab6b1c58dd3b18


$add_user = 'INSERT INTO users(username, email) VALUES(:username, :email)';


$stmt = $pdo->prepare($add_user);
$exec = $stmt->execute([
    'username' => $username,
    'email' => $email
]);
if($exec){
    echo '<p>Inscription réussie</p>';
}