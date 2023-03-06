<?php

require_once 'connection.php';

$limit = (int) ($_GET['limit'] ?? 10);
$limit = is_int($limit) && $limit < 50 ? $limit : 10;

$offset = (isset($_GET['page']) && $_GET['page'] > 1) ? intval($_GET['page']) : 0;

$offset = $offset * $limit;

$query = '
	SELECT 
		`id`,
		`first_name`,
		`last_name`,
		`gender`
	FROM 
		`users`
	WHERE 
		`gender` = :gender
	ORDER BY `id`
	LIMIT :offset, :limit';

$stmt = $dbh->prepare($query);

$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindValue(':gender', ($_GET['gender'] ?? NULL), PDO::PARAM_STR);

$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

dd($users);