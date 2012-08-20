<?php

function __autoload($class) {
    $file = LIB_PATH.DS.$class.'.php';
    if(file_exists($file)) {
        require_once $file;
    }
    else {
        die("The file {$class}.php could not found.");
    }
}

function show_error() {
    if(SHOW_ERROR) {
        return mysql_error();
    }
}

function print_array($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

function redirect_to($location) {
    if($location) {
        header("Location: {$location}");
        exit();
    }
}

function output_message($message) {
    if(!empty($message)) {
        return '<p clas="message">'.$message.'</p>';
    }
}

function log_action($action, $message) {
    $log_file = SITE_ROOT.DS.'logs'.DS.'log.txt';
    $new = (file_exists($log_file)) ? false : true;
    if($handle = fopen($log_file, 'a')) {
        $timestamp = strftime("%Y-%m-%d %H:%M:%S", time() + (60 * 60 * 3));
        $output = "{$timestamp} | {$action} : {$message}".PHP_EOL;
        fwrite($handle, $output);
        fclose($handle);
        if($new) {
            chmod($log_file, 0755);
        }
    }
}

function strip_some_tags($string, $tags) {
    return strip_tags($string, $tags);
}

function date_as_text($datetime) {
    $unixtime = strtotime($datetime);
    return strftime("%#d %B, %Y at %H:%M", $unixtime + (60 * 60 * 3));
}