<?php

/**
* 
*/
class Db
{

    private static $instance;
    
    private function __construct() {
        $this->mysqli = new mysqli(HOSTNAME, USERNAME, PASSWORD, DBNAME);
    }
    private function __clone(){}

    private function __wakeup(){}

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }
        return self::$instance;
    }

    public function query($sql) {
        
        $args = func_get_args();
        $sql = array_shift($args);
        $link = $this->mysqli;
        $args = array_map(function($param) use ($link) {
            return $link->escape_string($param);
        }, $args);

        $sql = str_replace(array('%', '?'), array('%%', '%s'), $sql);

        array_unshift($args, $sql);

        $sql = call_user_func_array('sprintf', $args);

        $this->last = $this->mysqli->query($sql);

        if ($this->last === false) throw new Exception("Database error: " . $this->mysqli->error);

        return $this;
        
    }

    public function assoc() {
        
        return $this->last->fetch_assoc();
    }

    public function all() {
        $result = array();
        while ($row = $this->last->fetch_assoc())
        { 
            $result[] = $row; 
        }
        return $result;
    }
}