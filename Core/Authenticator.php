<?php 

namespace Core;

class Authenticator {
    public function attempt($email, $password) {
        $user = App::resolve('Core\Database')->query('select * from users where email = ?', [$email])->find(); 

        if($user) {
            if(password_verify($password, $user['password'])) {
                $this->login($user);
                return true;
            }
        } 
        return false;
    }

    public function login($user) {
        $_SESSION['user'] = [
            'email' => $user['email'],
            'name' => $user['name'],
        ];
        session_regenerate_id(true);
    }
    
    public function logout() {
        Session::destroy(); 
    }
}