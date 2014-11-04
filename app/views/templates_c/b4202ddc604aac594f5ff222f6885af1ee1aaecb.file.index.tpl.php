<?php /* Smarty version Smarty-3.1.20, created on 2014-10-20 21:44:19
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3035954410ec54896f6-81465213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4202ddc604aac594f5ff222f6885af1ee1aaecb' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1413812657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3035954410ec54896f6-81465213',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54410ec5f009d9_97242679',
  'variables' => 
  array (
    'newses' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54410ec5f009d9_97242679')) {function content_54410ec5f009d9_97242679($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Goodline blog"), 0);?>

    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <a class="btn btn-default" id="sort">Sort by date(js)</a>
            <a class="btn btn-default" href="?sort=asc">Sort by date(php)</a>
            <a class="btn btn-default" href="?sort=desc">Sort by date(php)</a>
        </div>
    </div>
    <div class="row newses">
        <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['newses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value) {
$_smarty_tpl->tpl_vars["news"]->_loop = true;
?>
            <div class="col-md-4 news-item">
                <h2>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value->title, ENT_QUOTES, 'UTF-8', true);?>

                </h2>
                <p>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value->data, ENT_QUOTES, 'UTF-8', true);?>

                </p>
                <p class="date">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value->date, ENT_QUOTES, 'UTF-8', true);?>

                    <a class="btn" href="?action=getnews&id=<?php echo $_smarty_tpl->tpl_vars['news']->value->id;?>
">View details...</a>
                </p>
            </div>
        <?php }
if (!$_smarty_tpl->tpl_vars["news"]->_loop) {
?>
            <div class="col-md-4"><h2>Newses not found</h2></div>
        <?php } ?>
    </div>
   
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
