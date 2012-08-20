<?php

require_once 'DatabaseObject.php';

class User extends DatabaseObject {
    
    protected static $table_name = 'users';
    protected static $db_fields = array('id', 'username', 'password', 'first_name', 'last_name');
    
    public $id;
    public $username;
    public $password;
    public $first_name;
    public $last_name;
    
    public function full_name() {
        if(isset($this->first_name) && isset($this->last_name)) {
            return $this->first_name.' '.$this->last_name;
        }
    }
    
    public static function authenticate($username, $password) {
        
        $username = trim($username);
        $password = trim(md5($password));
        
        $sql = "SELECT * FROM users WHERE ";
        $sql .= "username = '{$username}' AND ";
        $sql .= "password = '{$password}' ";
        
        $found_user = self::find_by_sql($sql);
        return ($found_user) ? array_shift($found_user) : false;
    }
    
    public static function register($username, $password, $rpassword, $fname, $lname) {
        global $db;
        
        $username = trim($db->escape_value($username));
        $password = trim($db->escape_value($password));
        $rpassword = trim($db->escape_value($rpassword));
        $fname = trim($db->escape_value($fname));
        $lname = trim($db->escape_value($lname));
        
        
        if($password != $rpassword) {
            return false;
        }
        
        if(empty($username) || empty($password) || empty($fname) || empty($lname)) {
            return false;
        }
        
        if(self::check_user_exists($username)) {
            return false;
        }
        
        $user = new User();
        $user->username = $username;
        $user->password = md5($password);
        $user->first_name = $fname;
        $user->last_name = $lname;
        
        return ($user->save()) ? true : false;
     }
    
    private static function check_user_exists($username) {
        global $db;
        $sql = "SELECT * FROM users WHERE username = '{$username}' ";
        $result = $db->query($sql);
        $found = $db->num_rows($result);
        return ($found == 1) ? true : false;
    }
}