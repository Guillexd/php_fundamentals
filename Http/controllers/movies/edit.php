<?php 

use Core\App;

$db = App::resolve('Core\Database');

$id = $_GET['id'];

$movie = $db->query('select * from posts where id = ?', [$id])->findOrFail();

authorize($movie['user_id'] === 1);

view('movies/edit.view.php', ['movie' => $movie]);