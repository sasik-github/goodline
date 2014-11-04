<?php /*%%SmartyHeaderCode:1584093194544c8db1759959-21238205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52fe0e261af88d1682a714e4c1c1af5bdc80c1d7' => 
    array (
      0 => '../app/views/templates/index.tpl',
      1 => 1413884413,
      2 => 'file',
    ),
    '50683254cc65c2fab676d2d02ec8e68bae5a9cfc' => 
    array (
      0 => '../app/views/templates/header.tpl',
      1 => 1413981215,
      2 => 'file',
    ),
    'd6a6f3d8dab6b3668c980029932f554ddb0e4725' => 
    array (
      0 => '../app/views/templates/footer.tpl',
      1 => 1413636290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1584093194544c8db1759959-21238205',
  'variables' => 
  array (
    'homeurl' => 0,
    'newses' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_544c8db17d89c8_21817815',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544c8db17d89c8_21817815')) {function content_544c8db17d89c8_21817815($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Goodline blog</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
    
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="vendor/bootstrap/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="vendor/bootstrap/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="vendor/bootstrap/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="vendor/bootstrap/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="vendor/bootstrap/img/favicon.png">
  
    <script type="text/javascript" src="vendor/jquery.min.js"></script> 
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script> 
</head>

<body>
<div class="container-fluid">
        <div class="col-md-12 column">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="">Blog</a>
                </div>


                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="/">Main</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
            </nav>
        </div>
        <div class="page-header"><h1>h3. Lorem ipsum dolor sit amet.</h1></div>
    <!-- </div> -->
    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <a class="btn btn-default" id="sort">Sort by date(js)</a>
            <a class="btn btn-default" href="?sort=asc">Sort by date(php)</a>
            <a class="btn btn-default" href="?sort=desc">Sort by date(php)</a>
        </div>
    </div>
    <div class="row newses">
                    <div class="col-md-4 news-item">
                <h2>
                    Heading of the Year
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="date">
                    2014-10-13
                    <a class="btn" href="?action=getnews&id=1">View details...</a>
                </p>
            </div>
                    <div class="col-md-4 news-item">
                <h2>
                    Heading of the Year2
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="date">
                    2014-10-14
                    <a class="btn" href="?action=getnews&id=2">View details...</a>
                </p>
            </div>
                    <div class="col-md-4 news-item">
                <h2>
                    Heading of the Year3
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="date">
                    2014-10-15
                    <a class="btn" href="?action=getnews&id=3">View details...</a>
                </p>
            </div>
                    <div class="col-md-4 news-item">
                <h2>
                    Heading of the Year4
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="date">
                    2014-10-16
                    <a class="btn" href="?action=getnews&id=4">View details...</a>
                </p>
            </div>
                    <div class="col-md-4 news-item">
                <h2>
                    Heading of the Year6
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p class="date">
                    2014-10-17
                    <a class="btn" href="?action=getnews&id=5">View details...</a>
                </p>
            </div>
                    <div class="col-md-4 news-item">
                <h2>
                    
                </h2>
                <p>
                    
                </p>
                <p class="date">
                    
                    <a class="btn" href="?action=getnews&id=">View details...</a>
                </p>
            </div>
            </div>
   
</div>
</body>
</html>
<?php }} ?>
