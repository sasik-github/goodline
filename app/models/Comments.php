<?php

class Comments extends DbModel
{

    public $newsId;
    public $author;
    public $data;
    public $date;

    function __construct($array)
    {
        $this->newsId = $array['newsId'];
        $this->author = $array['author'];
        $this->data = $array['data'];
        $this->date = $array['date'];
    }

    public function __toString()
    {
        return "$this->newsId </br> $this->author  </br> $this->data </br> $this->date </br></br>";
    }

    public static function getAll($newsId)
    {
        $db = Db::getInstance();
        $className = static::class;
        $objects = array();
        $db->query("SELECT * FROM ? WHERE newsId = ?",
            strtolower($className),
            $newsId
        );
        $resultsFromDb = $db->all();
        foreach ($resultsFromDb as $row) {
           $objects[] = new $className($row);
        }
        return $objects;
    }
}
