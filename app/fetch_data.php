<?php
global $pdo;
require_once 'includes/dbconnect.php';

$id_user = 3;
$sql = 'SELECT * FROM users;';

$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();
var_dump($users);
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
       <table>
           <thead>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
           </thead>
           <tbody>
                <?php foreach($users as $user) : ?>
                    <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['username']; ?></td>
                        <td><?= $user['email']; ?></td>
                    </tr>
                <?php endforeach ;?>
           </tbody>
       </table>
    </main>
</body>
</html>
