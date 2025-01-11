<?php
/* Smarty version 4.5.3, created on 2025-01-11 09:13:16
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\ModuleBuilder\tpls\exportcustomizations.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_6782281c75b539_75480575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a13c743d2c4b860c8df860cce737ee18422dce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\ModuleBuilder\\tpls\\exportcustomizations.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ModuleBuilder/tpls/assistantJavascript.tpl' => 1,
  ),
),false)) {
function content_6782281c75b539_75480575 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form name="exportcustom" id="exportcustom">
<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='ExportCustom'>
<div align="left">
<input type="submit" class="button" name="exportCustomBtn" value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EC_EXPORTBTN'];?>
" onclick="return check_form('exportcustom');">
</div>
<br>
    <table class="mbTable">
    <tbody>
    <tr>
    	<td class="mbLBL">
    		<b><font color="#ff0000">*</font> <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EC_NAME'];?>
 </b>
    	</td>
    	<td>
    		<input type="text" value="" size="50" name="name"/>
    	</td>
    </tr>
    <tr>
    	<td class="mbLBL">
    		<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EC_AUTHOR'];?>
 </b>
    	</td>
    	<td>
    		<input type="text" value="" size="50" name="author"/>
    	</td>
    </tr>
    <tr>
    	<td class="mbLBL">
    		<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EC_DESCRIPTION'];?>
 </b>
    	</td>
    	<td>
    		<textarea rows="3" cols="60" name="description"></textarea>
    	</td>
    </tr>
    <tr>
    	<td height="100%"/>
    	<td/>
    </tr>
    </tbody>
	</table>
    <div class="export-customization">
        <div>
            <input type="hidden" name="hiddenCount">
        </div>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modules']->value, 'i', false, 'k');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
            <div class="export-field">
                <div class="export-label">
                     <span style="margin-right: 0.5em;"><?php echo $_smarty_tpl->tpl_vars['moduleList']->value[$_smarty_tpl->tpl_vars['k']->value];?>
</span>
                </div>
                <div>
                    <?php if ($_smarty_tpl->tpl_vars['i']->value != '') {?>
                        <INPUT onchange="updateCount(this);" type="checkbox" name="modules[]" value=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
>
                    <?php }?> 
                </div>
                <div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['i']->value, 'j');
$_smarty_tpl->tpl_vars['j']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->do_else = false;
?>
                    <?php echo $_smarty_tpl->tpl_vars['j']->value;?>
<br>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
         <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?> 
    </div>
</form>


<?php echo '<script'; ?>
 type="text/javascript">
var boxChecked = 0;

function updateCount(box) {
   boxChecked = box.checked == true ? ++boxChecked : --boxChecked;
   document.exportcustom.hiddenCount.value = (boxChecked == 0 ? "" : "CHECKED");
}

ModuleBuilder.helpRegister('exportcustom');
ModuleBuilder.helpSetup('exportcustom','exportHelp');
addToValidate('exportcustom', 'hiddenCount', 'varchar', true, '<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EC_CHECKERROR'];?>
');
addToValidate('exportcustom', 'name', 'varchar', true, '<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_PACKAGE_NAME'];?>
');
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender('file:modules/ModuleBuilder/tpls/assistantJavascript.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
