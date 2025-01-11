<?php
/* Smarty version 4.5.3, created on 2025-01-07 09:18:30
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\ModuleBuilder\tpls\assistantJavascript.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_677ce3565b22a1_10753282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9458ed65291ccf25982e9b69f4e7c9d975505dc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\ModuleBuilder\\tpls\\assistantJavascript.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677ce3565b22a1_10753282 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>

if(typeof(Assistant)!="undefined" && Assistant.mbAssistant){
	//Assistant.mbAssistant.render(document.body);

<?php if ($_smarty_tpl->tpl_vars['userPref']->value) {?>
	Assistant.processUserPref("<?php echo $_smarty_tpl->tpl_vars['userPref']->value;?>
");
<?php }
if ($_smarty_tpl->tpl_vars['assistant']->value['key'] && $_smarty_tpl->tpl_vars['assistant']->value['group']) {?>
	Assistant.mbAssistant.setBody(SUGAR.language.get('ModuleBuilder','assistantHelp').<?php echo $_smarty_tpl->tpl_vars['assistant']->value['group'];?>
.<?php echo $_smarty_tpl->tpl_vars['assistant']->value['key'];?>
);
<?php }?>

	if(Assistant.mbAssistant.visible){
		Assistant.mbAssistant.show();
		}
}

<?php echo '</script'; ?>
><?php }
}
