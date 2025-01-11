<?php
/* Smarty version 4.5.3, created on 2025-01-07 08:38:38
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\include\SugarFields\Fields\Base\ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_677cd9fea803d4_42739098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be42f46e0203d869f5c1c6f98701ba813c61f60b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\SugarFields\\Fields\\Base\\ListView.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677cd9fea803d4_42739098 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);?>

<?php }
}
