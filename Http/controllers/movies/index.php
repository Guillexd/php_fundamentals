<?php 

use Core\App;

$db = App::resolve('Core\Database');

// $id = $_GET['id'];

// $query = 'select * from posts where id = ?';

$posts = $db->query('select * from posts where user_id = 1')->get();

// authorize($posts['user_id'] === 1);

// dd($posts);

view('movies/index.view.php', ['posts' => $posts]);