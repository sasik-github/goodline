<?php 

require_once 'SmartySingleton.php';
/**
* 
*/
class Controller {

    public function __construct()
    {
        $this->smarty = SmartySingleton::instance();
    }

    public function model($model = '')
    {
        require_once '../app/models/' . $model . '.php';

        return $model;

    }

    public function view($view, $data = [])
    {

        $smarty = $this->smarty;

        $smarty->assign('doc_root', MAIN_URL);

        foreach ($data as $key => $value) {
            $smarty->assign($key, $value);
        }

        $smarty->display(strtolower(static::class) . '/' .$view . '.tpl');
    }
}