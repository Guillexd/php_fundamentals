<?php 

namespace Core\Middleware;

class Guest {
    public function handle() {
        if($_SESSION['users'] ?? false) {
            header('location: /');
            exit();
        }
    }
}