<?php
/* Smarty version 4.5.3, created on 2025-01-07 08:34:30
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\Emails\templates\displayHasAttachmentField.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_677cd906b76f86_05185075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56817d3f63b88f0a8e6ff99e52dde0d7708ef950' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\Emails\\templates\\displayHasAttachmentField.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_677cd906b76f86_05185075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<div class="email-has-attachement">
    <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value)) {?>
        <?php if (!empty($_smarty_tpl->tpl_vars['bean']->value['has_attachment'])) {?>
            <div class="email-has-attachment"><span class="glyphicon"><img src="<?php echo smarty_function_sugar_getimagepath(array('directory'=>'','file_name'=>'attachment-indicator','file_extension'=>"svg",'file'=>'attachment-indicator.svg'),$_smarty_tpl);?>
"/></span></div>
        <?php }?>

    <?php }?>
</div>
<?php }
}
