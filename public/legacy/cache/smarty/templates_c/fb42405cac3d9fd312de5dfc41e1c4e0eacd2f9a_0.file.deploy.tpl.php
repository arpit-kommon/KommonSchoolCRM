<?php
/* Smarty version 4.5.3, created on 2025-01-07 09:20:45
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\ModuleBuilder\tpls\MBPackage\deploy.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_677ce3dd4c1df4_61177421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb42405cac3d9fd312de5dfc41e1c4e0eacd2f9a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\ModuleBuilder\\tpls\\MBPackage\\deploy.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677ce3dd4c1df4_61177421 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
echo smarty_function_sugar_getimage(array('name'=>"img_loading",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LOADING'],'ext'=>".gif",'other_attributes'=>'align="absmiddle" '),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['package']->value;?>

<?php echo '<script'; ?>
 type='text/javascript' language='Javascript'>ModuleBuilder.beginDeploy('<?php echo $_smarty_tpl->tpl_vars['package']->value;?>
');<?php echo '</script'; ?>
>	
<?php }
}
