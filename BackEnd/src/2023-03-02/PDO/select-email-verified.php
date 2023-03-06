<?php

require_once 'connection.php';

$query = 'SELECT * FROM `users` WHERE `email_verified_at` IS NOT NULL';

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($users);