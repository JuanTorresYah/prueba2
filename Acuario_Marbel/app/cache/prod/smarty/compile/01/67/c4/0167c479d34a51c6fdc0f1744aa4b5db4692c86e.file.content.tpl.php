<?php /* Smarty version Smarty-3.1.19, created on 2020-05-04 18:58:44
         compiled from "C:\xampp\htdocs\Acuario_Marbel\admin933goocf6\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7571241855eb0ac34057047-17992088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0167c479d34a51c6fdc0f1744aa4b5db4692c86e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Acuario_Marbel\\admin933goocf6\\themes\\default\\template\\content.tpl',
      1 => 1588634548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7571241855eb0ac34057047-17992088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0ac340e33a5_29230251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0ac340e33a5_29230251')) {function content_5eb0ac340e33a5_29230251($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
