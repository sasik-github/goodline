<?php /* Smarty version Smarty-3.1.20, created on 2014-10-26 07:56:37
         compiled from "/var/www/mvc/app/views/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:907181763544c8db17d0476-45573218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50683254cc65c2fab676d2d02ec8e68bae5a9cfc' => 
    array (
      0 => '/var/www/mvc/app/views/templates/header.tpl',
      1 => 1414310196,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907181763544c8db17d0476-45573218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_544c8db17d3c37_12911605',
  'variables' => 
  array (
    'title' => 0,
    'doc_root' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544c8db17d3c37_12911605')) {function content_544c8db17d3c37_12911605($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
    
    <link href="/mvc/public/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mvc/public/css/style.css" rel="stylesheet">


  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/mvc/public/vendor/bootstrap/img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/mvc/public/vendor/bootstrap/img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/mvc/public/vendor/bootstrap/img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="/mvc/public/vendor/bootstrap/img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="/mvc/public/vendor/bootstrap/img/favicon.png">
  
    <script type="text/javascript" src="/mvc/public/vendor/jquery.min.js"></script> 
    <script type="text/javascript" src="/mvc/public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/mvc/public/js/scripts.js"></script> 
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
                  <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['doc_root']->value;?>
">Blog</a>
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
    <!-- </div> --><?php }} ?>
