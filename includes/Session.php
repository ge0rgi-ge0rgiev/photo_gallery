<?php


class Session {
    
    private $logged_in = false;
    public $user_id;
    private $message;
    
    public function __construct() {
        session_start();
        $this->check_login();
        $this->check_message();
    }
    
    private function check_login() {
        if(isset($_SESSION['user_id'])) {
            $this->logged_in = true;
            $this->user_id = $_SESSION['user_id'];
        }
        else {
            $this->logged_in = false;
            unset($this->user_id);
        }
    }
    
    public function is_logged_in() {
        return $this->logged_in;
    }
    
    public function login(User $user) {
        if($user) {
            $this->logged_in = true;
            $this->user_id = $_SESSION['user_id'] = $user->id;
        }
    }
    
    public function logout() {
        if($this->logged_in) {
            session_destroy();
            $this->logged_in = false;
            unset($this->user_id);
            unset($_SESSION['user_id']);
        }
    }
    
    private function check_message() {
        if(isset($_SESSION['message'])) {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        }
        else {
            $this->message = '';
        }
    }
    
    public function message($message = '') {
        if($message != '') {
            $_SESSION['message'] = $message;
        }
        else {
            return $this->message;
        }
    }
    
}

$session = new Session();
$message = $session->message();