<?php

class Pictures extends DbModel {

    public $newsId;

    public $path;

    function __construct($array) {
        $this->newsId = $array['newsId'];
        $this->path = $array['path'];
    }

    public function __toString() {
        return "$this->newsId </br> $this->path</br></br>";
    }

    public static function get($newsId)
    {
        $db = Db::getInstance();
        $className = static::class;
        settype($id, "integer");
        $db->query("SELECT * FROM ? WHERE newsId = ? LIMIT 1", strtolower($className), $newsId);
        $row = $db->assoc();
        return new $className($row);
    }
}