<?php /* Smarty version Smarty-3.1.20, created on 2014-10-21 07:37:49
         compiled from "./templates/getNews.tpl" */ ?>
<?php /*%%SmartyHeaderCode:45281177054460d4dcaa5e6-69181814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33e390ae604a719164a7c438c49e42c6f5eab80c' => 
    array (
      0 => './templates/getNews.tpl',
      1 => 1413813323,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45281177054460d4dcaa5e6-69181814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'picture' => 0,
    'comments' => 0,
    'hasPrev' => 0,
    'curr' => 0,
    'hasNext' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54460d4dce70c3_08238923',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54460d4dce70c3_08238923')) {function content_54460d4dce70c3_08238923($_smarty_tpl) {?><!-- <?php  $_config = new Smarty_Internal_Config("test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?> -->
<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['news']->value->title), 0);?>


<div class="row clearfix">
    <div class="col-md-12">
        <div class="well">
        <h2>
            <?php echo $_smarty_tpl->tpl_vars['news']->value->title;?>

        </h2>
        <div class="thumbnail">
            <img src="<?php echo $_smarty_tpl->tpl_vars['picture']->value;?>
">
        </div>
        <p>
            <?php echo $_smarty_tpl->tpl_vars['news']->value->data;?>

        </p>
        <p class="text-right">
            <?php echo $_smarty_tpl->tpl_vars['news']->value->date;?>

        </p>
        </div>
    </div>
</div>

<?php if ($_smarty_tpl->tpl_vars['comments']->value) {?>
<div class="row clearfix">
    <div class="col-md-8 col-md-offset-1" id="comments">
        <div class="list-group">
            <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['name'] = 'outer';
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['comments']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['outer']['total']);
?>
                <a href="#comments " class="list-group-item">
                <h4 class="list-group-item-heading">
                   <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]->author, ENT_QUOTES, 'UTF-8', true);?>

                </h4>
                <p class="list-group-item-text">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]->data, ENT_QUOTES, 'UTF-8', true);?>

                </p><p class="list-group-item-text text-right">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comments']->value[$_smarty_tpl->getVariable('smarty')->value['section']['outer']['index']]->date, ENT_QUOTES, 'UTF-8', true);?>

                </p>

                </a>
            <?php endfor; endif; ?>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-4  col-md-offset-4 column">
       <ul class="pager">
            <?php if ($_smarty_tpl->tpl_vars['hasPrev']->value) {?>
                <li><a href="?action=getnews&id=<?php echo $_smarty_tpl->tpl_vars['news']->value->id;?>
&page=<?php echo $_smarty_tpl->tpl_vars['curr']->value-1;?>
">Previous</a></li>
            <?php } else { ?>
                <li class="disabled"><a href="#">Previous</a></li>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['hasNext']->value) {?>
                <li><a href="?action=getnews&id=<?php echo $_smarty_tpl->tpl_vars['news']->value->id;?>
&page=<?php echo $_smarty_tpl->tpl_vars['curr']->value+1;?>
">Next</a></li>
            <?php } else { ?>
                <li class="disabled"><a href="">Next</a></li>
            <?php }?>
        </ul>
    </div>
</div>
<?php }?>
<?php }} ?>
