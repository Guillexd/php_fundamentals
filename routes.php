<?php 
// return [
//     '/' => 'index.php',
//     '/about' => 'about.php',
//     '/contact' => 'contact.php',
//     '/movies' => 'movies/index.php',
//     '/movie' => 'movies/show.php',
//     '/movie/create' => 'movies/create.php',
// ];

$router->get('/', 'index.php');
$router->get('/about', 'about.php')->only('auth');
$router->get('/contact', 'contact.php')->only('guest');
$router->get('/movies', 'movies/index.php');
$router->get('/movie', 'movies/show.php');
$router->delete('/movie', 'movies/destroy.php');
$router->get('/movie/create', 'movies/create.php');
$router->post('/movie/create', 'movies/store.php');
$router->get('/movie/edit', 'movies/edit.php');
$router->patch('/movie/edit', 'movies/update.php');
$router->get('/register', 'registration/create.php');
$router->post('/register', 'registration/store.php');
$router->get('/login', 'sessions/create.php');
$router->post('/login', 'sessions/store.php');
$router->delete('/logout', 'sessions/destroy.php')->only('auth');
// $router->get('/about', 'about.php');
// $router->get('/about', 'about.php');
// $router->delete('/note', 'movies/destroy.php');
