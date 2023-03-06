<?php

require_once 'connection.php';

$query = 'SELECT * FROM `users` WHERE `email_verified_at` IS NULL LIMIT 100';

$stmt = $dbh->prepare($query);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($users);