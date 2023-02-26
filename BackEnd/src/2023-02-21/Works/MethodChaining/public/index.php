<?php

require_once '../vendor/autoload.php';

use App\Classes\Tag;

$tag = new Tag('a');

$tag->setBody("title 1\n");
$tag->setBody("title 2\n");
$tag->setBody('title 3');

$tag->setAttribute('href', 'index.html');
$tag->setAttribute('class', 'test-123');

echo $tag->get();

echo "\n<br>\n";

$tag->show();

echo "\n<br>\n";

$tag = new Tag('a');

$tag->setBody('title')
	->setBody(4)
	->setAttribute('href', 'index.html')
	->setAttribute('class', 'test-123')
	->show();

echo "\n<br>\n";

(new Tag('a'))->setBody('title-')
	->setBody(5)
	->setAttribute('href', 'index.html')
	->setAttribute('class', 'test-123')
	->show();

echo "\n<br>\n";

(new Tag('a'))->setBody('title-')
	->setBody(6)
	->setAttributes([
		'href' => 'index.html',
		'class' => 'test-123',
		'style' => 'color:red',
	])
	->setAttribute('id', 'go')
	->show();

echo "\n<br>\n";

$input = Tag::create('input', false)
	->setAttribute('name', 'username')
	->setAttribute('type', 'text')
	->get();

Tag::create('div')
	->setBody($input)
	->setBody(Tag::create('a')->setAttribute('href', 'index.html')->setBody('go')->get())
	->setAttributes([
		// 'href' => 'index.html',
		'class' => 'test-123',
		'style' => 'color:red',
	])
	->setAttribute('id', 'ddd')
	->show();

echo "\n<br>\n";
