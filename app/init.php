<?php 

define('MAIN_URL', '/mvc/public/');

define('HOSTNAME', 'localhost');
define('USERNAME', 'goodline');
define('PASSWORD', 'goodline');
define('DBNAME', 'goodline');

date_default_timezone_set('Asia/Novokuznetsk');

require_once 'core/Db.php';
require_once 'core/DbModel.php';
require_once 'vendor/Smarty-3.1.20/libs/Smarty.class.php';
require_once 'core/App.php';
require_once 'core/Controller.php';

$app = new App();