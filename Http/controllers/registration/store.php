<?php

use Core\App;
use Core\Validator;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address';
}

if (!Validator::string($password, 7, 20)) {
    $errors['password'] = 'Please provide a valid password';
}

if (!empty($errors)) {
    return view('registration/create.view.php', ['errors' => $errors]);
}

$db = App::resolve('Core\Database');

$user = $db->query('select * from users where email = ?', [$email])->find();

if($user) {
    login($user);
    header('location: /');
    exit();
} else {
    $db->query('insert into users (email, password, name) values (?, ?, ?)', [$email, password_hash($password, PASSWORD_BCRYPT), $name]);
    login(['email' => $email, 'name' => $name]);

    header('location: /');
    exit();
}