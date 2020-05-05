<?php /* Smarty version Smarty-3.1.19, created on 2020-05-04 18:58:45
         compiled from "C:\xampp\htdocs\Acuario_Marbel\modules\welcome\views\templates\tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11481470595eb0ac354872d1-86330528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26fc7b1cad80f375707285110202ec08d6136a92' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Acuario_Marbel\\modules\\welcome\\views\\templates\\tooltip.tpl',
      1 => 1588634597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11481470595eb0ac354872d1-86330528',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5eb0ac354a6aa2_36468607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5eb0ac354a6aa2_36468607')) {function content_5eb0ac354a6aa2_36468607($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
