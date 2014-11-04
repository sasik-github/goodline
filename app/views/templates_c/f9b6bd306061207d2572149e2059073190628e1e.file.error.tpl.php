<?php /* Smarty version Smarty-3.1.20, created on 2014-10-19 19:54:10
         compiled from ".\templates\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1911254428f9ce14571-61727529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9b6bd306061207d2572149e2059073190628e1e' => 
    array (
      0 => '.\\templates\\error.tpl',
      1 => 1413719643,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1911254428f9ce14571-61727529',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.20',
  'unifunc' => 'content_54428f9d248311_86881904',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54428f9d248311_86881904')) {function content_54428f9d248311_86881904($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>"Error"), 0);?>


<div class="row clearfix">
    <div class="col-md-4 column">
    	<p class="bg-danger">
	        <!-- <h2> -->
				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

	        <!-- </h2> -->
    	</p>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
