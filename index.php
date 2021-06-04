<?php
date_default_timezone_set("Europe/Moscow");
require_once('functions.php');
require_once('data.php');

$page_content = include_template('templates/main.php', ['adverts' => $adverts]);
$layout_content = include_template('templates/layout.php', [
	'content' => $page_content,
	'categories' => $categories,
	'title' => 'GifTube - Главная страница',
    'user' => $user
]);

print($layout_content);

?>