<?php 

/**
* 
*/
class DbModel
{

    public static function get($id)
    {
        $db = Db::getInstance();
        $className = static::class;
        settype($id, "integer");
        $db->query("SELECT * FROM ? WHERE id = ? LIMIT 1", strtolower($className), $id);
        $row = $db->assoc();
        return new $className($row);
    }

    public static function getAll()
    {

        $db = Db::getInstance();
        $className = static::class;
        $objects = array();
        $db->query("SELECT * FROM ?", strtolower($className));
        $resultsFromDb = $db->all();
        foreach ($resultsFromDb as $row) {
           $objects[] = new $className($row); 
        }
        return $objects;
    }
}