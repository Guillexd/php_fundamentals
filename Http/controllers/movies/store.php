<?php 

use Core\Validator;
use Core\App;

$db = App::resolve('Core\Database');

$errors = [];

if(!Validator::string($_POST['title'], 1, 20)) {
    $errors['title'] = 'A title no more than 20 characters is required';
}

if(!empty($errors)) {
    return view('movies/create.view.php', ['errors' => $errors]);
}

$db->query('insert into posts (title, user_id) values (? , ?)', [$_POST['title'], 1]);
header('location: /movies');
die();

