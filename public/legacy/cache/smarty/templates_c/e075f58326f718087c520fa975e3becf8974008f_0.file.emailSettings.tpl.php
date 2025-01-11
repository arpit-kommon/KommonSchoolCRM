<?php
/* Smarty version 4.5.3, created on 2025-01-07 11:53:07
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\Emails\templates\emailSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_677d0793ace8e8_75326620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e075f58326f718087c520fa975e3becf8974008f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\Emails\\templates\\emailSettings.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Emails/templates/emailSettingsGeneral.tpl' => 1,
    'file:modules/Emails/templates/emailSettingsAccounts.tpl' => 1,
  ),
),false)) {
function content_677d0793ace8e8_75326620 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ydlg-bd">
    <div id="tab_general" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsGeneral.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
    <div id="tab_accounts" class="tab-content">
        <?php $_smarty_tpl->_subTemplateRender("file:modules/Emails/templates/emailSettingsAccounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>


</div><?php }
}
