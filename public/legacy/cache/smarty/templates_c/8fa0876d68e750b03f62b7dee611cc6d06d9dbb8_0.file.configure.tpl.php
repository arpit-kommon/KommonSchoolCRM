<?php
/* Smarty version 4.5.3, created on 2025-01-11 09:04:32
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\Home\Dashlets\iFrameDashlet\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_678226107215f3_08096896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8fa0876d68e750b03f62b7dee611cc6d06d9dbb8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\Home\\Dashlets\\iFrameDashlet\\configure.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_678226107215f3_08096896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),));
?>


<div style='width:100%'>
<form name='configure_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
' action="index.php" method="post" onSubmit='return SUGAR.dashlets.postForm("configure_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
", SUGAR.mySugar.uncoverPage);'>
<input type='hidden' name='id' value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'>
<input type='hidden' name='module' value='Home'>
<input type='hidden' name='action' value='ConfigureDashlet'>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='configure' value='true'>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="edit view" align="center">
<tr>
    <td scope='row'><?php echo $_smarty_tpl->tpl_vars['titleLBL']->value;?>
</td>
    <td>
    	<input type="text" class="text" name="title" size='20' maxlength='80' value='<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
'>
    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['isRefreshable']->value) {?>
<tr>
    <td scope='row'>
        <?php echo $_smarty_tpl->tpl_vars['autoRefresh']->value;?>

    </td>
    <td>
        <select name='autoRefresh'>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['autoRefreshOptions']->value,'selected'=>$_smarty_tpl->tpl_vars['autoRefreshSelect']->value),$_smarty_tpl);?>

        </select>
    </td>
</tr>
<?php }?>
<tr>
    <td scope='row'><?php echo $_smarty_tpl->tpl_vars['urlLBL']->value;?>
</td>
    <td>
    	<input type="text" class="text" name="url" size='20' maxlength='2000' value='<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
'>
    </td>
</tr>
<tr>
    <td scope='row'><?php echo $_smarty_tpl->tpl_vars['heightLBL']->value;?>
</td>
    <td>
    	<input type="text" class="text" name="height" size='20' maxlength='80' value='<?php echo $_smarty_tpl->tpl_vars['height']->value;?>
'>
    </td>
</tr>
<tr>
    <td align="right" colspan="2">
        <input type='submit' class='button' value='<?php echo $_smarty_tpl->tpl_vars['saveLBL']->value;?>
'>
   	</td>
</tr>
</table>
</form>
</div><?php }
}
