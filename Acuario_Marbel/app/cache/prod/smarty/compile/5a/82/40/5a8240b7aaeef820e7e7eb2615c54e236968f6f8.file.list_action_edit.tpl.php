<?php /* Smarty version Smarty-3.1.19, created on 2020-05-04 19:57:10
         compiled from "C:\xampp\htdocs\Acuario_Marbel\admin933goocf6\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20968305805eb0b9e65a9629-74214734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a8240b7aaeef820e7e7eb2615c54e236968f6f8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Acuario_Marbel\\admin933goocf6\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1588634552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20968305805eb0b9e65a9629-74214734',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0b9e65d1f77_22199337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0b9e65d1f77_22199337')) {function content_5eb0b9e65d1f77_22199337($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['href']->value,'html','UTF-8');?>
" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['action']->value,'html','UTF-8');?>

</a>
<?php }} ?>
