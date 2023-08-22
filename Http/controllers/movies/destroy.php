<?php 

use Core\App;

$db = App::resolve('Core\Database');

$id = $_POST['id'];

$movie = $db->query('select * from posts where id = ?', [$id])->findOrFail();

authorize($movie['user_id'] === 1);

$db->query('delete from posts where id = ?', [$id]);

header('location: /movies');
