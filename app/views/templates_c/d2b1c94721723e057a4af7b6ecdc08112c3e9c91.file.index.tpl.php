<?php /* Smarty version Smarty-3.1.20, created on 2014-10-21 09:41:30
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28782285554460d3f8b6702-39488054%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2b1c94721723e057a4af7b6ecdc08112c3e9c91' => 
    array (
      0 => './templates/index.tpl',
      1 => 1413884413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28782285554460d3f8b6702-39488054',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54460d3f91e624_36873027',
  'variables' => 
  array (
    'homeurl' => 0,
    'newses' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54460d3f91e624_36873027')) {function content_54460d3f91e624_36873027($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Goodline blog"), 0);?>

    <div class="row">
        <div class="col-md-5 col-md-offset-1">
            <a class="btn btn-default" id="sort">Sort by date(js)</a>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?sort=asc">Sort by date(php)</a>
            <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?sort=desc">Sort by date(php)</a>
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

                    <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['homeurl']->value;?>
?action=getnews&id=<?php echo $_smarty_tpl->tpl_vars['news']->value->id;?>
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
