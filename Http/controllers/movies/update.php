<?php 

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');

$id = $_POST['id'];

$movie = $db->query('select * from posts where id = ?', [$id])->findOrFail();

authorize($movie['user_id'] === 1);

$errors = [];

if(!Validator::string($_POST['title'], 1, 20)) {
    $errors['title'] = 'A title no more than 20 characters is required';
}

if(!empty($errors)) {
    return view('movies/edit.view.php', ['errors' => $errors]);
}

$db->query('update posts set title = ? where id = ?', [$_POST['title'], $_POST['id']]);
header('location: /movies');
die();

