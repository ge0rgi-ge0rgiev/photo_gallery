<?php

require_once 'DatabaseObject.php';

class Comment extends DatabaseObject {
    
    protected static $table_name = 'comments';
    protected static $db_fields = array('id', 'photograph_id', 'created', 'author', 'body');
    
    public $id;
    public $photograph_id;
    public $created;
    public $author;
    public $body;
    
    public static function make($photo_id, $author = 'Anonymous', $body) {
        
        if(!empty($photo_id) && !empty($author) && !empty($body)) {
            $comment = new Comment();
            $comment->photograph_id = $photo_id;
            $comment->created = strftime("%#d-%B-%Y, %H:%M:%S");
            $comment->author = $author;
            $comment->body = $body;

            return $comment;
        }
        else {
            return false;
        }
    }
    
    public static function find_comments_on($photo_id) {
        global $db;
        $id = $db->escape_value($photo_id);
        
        $sql = "SELECT * FROM comments WHERE ";
        $sql .= "photograph_id = {$id} ";
        $sql .= "ORDER BY created ASC ";
        
        return self::find_by_sql($sql);
    }
}