<?php
/* Smarty version 4.5.3, created on 2025-01-11 10:50:48
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\cache\themes\suite8\modules\Rn777_ResumeEvaluator\EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67823ef87e75f5_26880443',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '362156e1545b129fd02ca07025566bd7950c52f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\cache\\themes\\suite8\\modules\\Rn777_ResumeEvaluator\\EditView.tpl',
      1 => 1736589048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67823ef87e75f5_26880443 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\modifier.escape.php','function'=>'smarty_modifier_escape',),1=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_include.php','function'=>'smarty_function_sugar_include',),2=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\block.minify.php','function'=>'smarty_block_minify',),4=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),5=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.html_options.php','function'=>'smarty_function_html_options',),7=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),8=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
?>

<div class="edit-border-bottom"></div>

<?php echo '<script'; ?>
>
    
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons action-buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->
<?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE"><?php }?> 
<?php if (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_REQUEST['return_id']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" type="button" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']))) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && ($_REQUEST['return_action'] == "DetailView" && empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) && empty($_REQUEST['return_id'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (!empty($_REQUEST['return_action']) && !empty($_REQUEST['return_module'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=<?php echo $_REQUEST['return_action'];?>
&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } elseif (empty($_REQUEST['return_action']) || empty($_REQUEST['return_id']) && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value'])) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Rn777_ResumeEvaluator'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php } else { ?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=<?php echo smarty_modifier_escape($_REQUEST['return_module'],"url");?>
&record=<?php echo smarty_modifier_escape($_REQUEST['return_id'],"url");?>
'); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL"> <?php }
if ($_smarty_tpl->tpl_vars['showVCRControl']->value) {?>
<button type="button" id="save_and_continue" class="button saveAndContinue" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="SUGAR.saveAndContinue(this);">
<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_AND_CONTINUE'];?>

</button>
<?php }
if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Rn777_ResumeEvaluator", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?>
</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</div>
</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_INFORMATION','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_ACCOUNT_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="name">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<span class="required">*</span>
<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' size='30'
maxlength='150'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="phone_office">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_OFFICE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_OFFICE','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_office"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_office']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_office']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_office']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_office']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_office']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="website">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_WEBSITE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_WEBSITE','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="url" field="website"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['website']['value'])) {?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' size='30' 
maxlength='255' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['value'];?>
' title='' tabindex='0'  >
<?php } else { ?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['website']['name'];?>
' size='30' 
maxlength='255'	   	   <?php if ($_smarty_tpl->tpl_vars['displayView']->value == 'advanced_search' || $_smarty_tpl->tpl_vars['displayView']->value == 'basic_search') {?>value=''<?php } else { ?>value='http://'<?php }?> 
title='' tabindex='0'  >
<?php }?>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="phone_fax">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_FAX">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_fax"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="ticker_symbol">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TICKER_SYMBOL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TICKER_SYMBOL','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="ticker_symbol"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['ticker_symbol']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ticker_symbol']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ticker_symbol']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['ticker_symbol']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['ticker_symbol']['name'];?>
' size='30'
maxlength='10'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="phone_alternate">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_PHONE_ALT">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_ALT','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="phone" field="phone_alternate"  class="phone">
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_alternate']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_alternate']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_alternate']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_alternate']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_alternate']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="rating">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_RATING">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_RATING','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="rating"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['rating']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['rating']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['rating']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['rating']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['rating']['name'];?>
' size='30'
maxlength='100'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="employees">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_EMPLOYEES">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEES','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="employees"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['employees']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['employees']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['employees']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['employees']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['employees']['name'];?>
' size='30'
maxlength='10'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="ownership">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_OWNERSHIP">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_OWNERSHIP','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="ownership"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['ownership']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ownership']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['ownership']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['ownership']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['ownership']['name'];?>
' size='30'
maxlength='100'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="industry">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_INDUSTRY">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INDUSTRY','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="industry"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['industry']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['industry']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['industry']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['industry']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="rn777_resumeevaluator_type">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_TYPE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TYPE','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="rn777_resumeevaluator_type"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['name'];?>
"
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['name'];?>
"
title=''              
>
<?php if ((isset($_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['value']))) {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['value']),$_smarty_tpl);?>

<?php } else {
echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['rn777_resumeevaluator_type']['default']),$_smarty_tpl);?>

<?php }?>
</select>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="annual_revenue">


<div class="col-xs-12 col-sm-4 label" data-label="LBL_ANNUAL_REVENUE">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ANNUAL_REVENUE','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="annual_revenue"  >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['annual_revenue']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['annual_revenue']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['annual_revenue']['value']);
}?>
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['annual_revenue']['name'];?>
'
id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['annual_revenue']['name'];?>
' size='30'
maxlength='100'        value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="assigned_user_name">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO_NAME">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['value'];?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
" 
id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
" 
value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_id']['value'];?>
">
<span class="id-ff multiple selectcrossbtn">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_TITLE"),$_smarty_tpl);?>
" class="firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
"<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['module'];?>
", 
600, 
400, 
"", 
true, 
false, 
{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}, 
"single", 
true
);' >
<?php echo smarty_function_sugar_getimage(array('name'=>"cursor",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
<button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_TITLE"),$_smarty_tpl);?>
"  class="lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['id_name'];?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_LABEL"),$_smarty_tpl);?>
" >
<?php echo smarty_function_sugar_getimage(array('name'=>"cross",'attr'=>'border="0"'),$_smarty_tpl);?>

</button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['name'];?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_INFORMATION','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_ADDRESS_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="billing_address_street">



<div class="col-xs-12 col-sm-12 edit-view-field " type="varchar" field="billing_address_street" colspan='2' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Address/SugarFieldAddress.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<fieldset id='BILLING_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS','module'=>''),$_smarty_tpl);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="billing_address_street_label" width='25%' scope='row'>
<label for="billing_address_street"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_STREET','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_street']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td width="*">
<textarea id="billing_address_street" name="billing_address_street" title='' maxlength="150"
                          rows="2" cols="30"
                          tabindex="0"><?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_street']['value'];?>
</textarea>
</td>
</tr>
<tr>
<td id="billing_address_city_label" width='%'
scope='row'>
<label for="billing_address_city"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CITY','module'=>''),$_smarty_tpl);?>
:
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_city']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_city" id="billing_address_city" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_city']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_city']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="billing_address_state_label" width='%'
scope='row'>
<label for="billing_address_state"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_state']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_state" id="billing_address_state" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_state']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_state']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="billing_address_postalcode_label"
width='%' scope='row'>
<label for="billing_address_postalcode"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_POSTAL_CODE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_postalcode" id="billing_address_postalcode" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode']['help'];?>
' size="30"
maxlength='150'                       value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_postalcode']['value'];?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="billing_address_country_label" width='%'
scope='row'>
<label for="billing_address_country"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COUNTRY','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['billing_address_country']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="billing_address_country" id="billing_address_country" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_country']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['billing_address_country']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td colspan='2' NOWRAP>&nbsp;</td>
</tr>
</table>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {
      billing_address = new SUGAR.AddressField("billing_checkbox", '', 'billing');
      });
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>


<div class="col-xs-12 col-sm-6 edit-view-row-item edit-view-bordered" data-field="shipping_address_street">



<div class="col-xs-12 col-sm-12 edit-view-field " type="varchar" field="shipping_address_street" colspan='2' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php echo '<script'; ?>
 src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Address/SugarFieldAddress.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<fieldset id='SHIPPING_address_fieldset'>
<legend><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS','module'=>''),$_smarty_tpl);?>
</legend>
<table border="0" cellspacing="1" cellpadding="0" class="edit" width="100%">
<tr>
<td valign="top" id="shipping_address_street_label" width='25%' scope='row'>
<label for="shipping_address_street"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_STREET','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_street']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td width="*">
<textarea id="shipping_address_street" name="shipping_address_street" title='' maxlength="150"
                          rows="2" cols="30"
                          tabindex="0"><?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_street']['value'];?>
</textarea>
</td>
</tr>
<tr>
<td id="shipping_address_city_label" width='%'
scope='row'>
<label for="shipping_address_city"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CITY','module'=>''),$_smarty_tpl);?>
:
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_city']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_city" id="shipping_address_city" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_city']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_city']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="shipping_address_state_label" width='%'
scope='row'>
<label for="shipping_address_state"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_state']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_state" id="shipping_address_state" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_state']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_state']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td id="shipping_address_postalcode_label"
width='%' scope='row'>
<label for="shipping_address_postalcode"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_POSTAL_CODE','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_postalcode" id="shipping_address_postalcode" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode']['help'];?>
' size="30"
maxlength='150'                       value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_postalcode']['value'];?>
' tabindex="0">
</td>
</tr>
<tr>
<td id="shipping_address_country_label" width='%'
scope='row'>
<label for="shipping_address_country"><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COUNTRY','module'=>''),$_smarty_tpl);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['fields']->value['shipping_address_country']['required'] || false) {?>
<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span>
<?php }?>
</td>
<td>
<input type="text" name="shipping_address_country" id="shipping_address_country" title='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_country']['help'];?>
' size="30"
maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['shipping_address_country']['value'];?>
'
tabindex="0">
</td>
</tr>
<tr>
<td scope='row' NOWRAP>
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COPY_ADDRESS_FROM_LEFT','module'=>''),$_smarty_tpl);?>
:
</td>
<td>
<input id="shipping_checkbox" name="shipping_checkbox" type="checkbox"
onclick="shipping_address.syncFields();">
</td>
</tr>
</table>
</fieldset>
<?php echo '<script'; ?>
 type="text/javascript">
  SUGAR.util.doWhen("typeof(SUGAR.AddressField) != 'undefined'", function () {
      shipping_address = new SUGAR.AddressField("shipping_checkbox", 'billing', 'shipping');
      });
<?php echo '</script'; ?>
>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>
</div>
</div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESSES','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_EMAIL_ADDRESSES">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="email1">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_EMAIL">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="email1" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>

<span id='email1_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email1']['value'];?>

</span>
</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION_INFORMATION','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);?>

</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_2" data-id="LBL_DESCRIPTION_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">



<div class="col-xs-12 col-sm-12 edit-view-row-item" data-field="description">


<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

<?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('minify', array());
$_block_repeat=true;
echo smarty_block_minify(array(), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Rn777_ResumeEvaluator'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:

<?php $_block_repeat=false;
echo smarty_block_minify(array(), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'print'=>false),$_smarty_tpl);?>


<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['description']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['value']);
}?>
<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
'
    rows="6"
    cols="80"
    title='' tabindex="0" 
     ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>

</div>
<div class="edit-dotted-border"></div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
</form>
<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>

<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^tab-content-(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(?<number>(.)*)$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    <?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_NAME','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'rn777_resumeevaluator_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TYPE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'industry', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INDUSTRY','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'annual_revenue', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANNUAL_REVENUE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_fax', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAX','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET_2','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET_3','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_street_4', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STREET_4','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_CITY','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_STATE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_POSTALCODE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'billing_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BILLING_ADDRESS_COUNTRY','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'rating', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RATING','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_office', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_OFFICE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_alternate', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PHONE_ALT','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'website', 'url', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_WEBSITE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ownership', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OWNERSHIP','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'employees', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEES','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'ticker_symbol', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TICKER_SYMBOL','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_street_2', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET_2','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_street_3', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET_3','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_street_4', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STREET_4','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_CITY','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_STATE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_POSTALCODE','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'shipping_address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHIPPING_ADDRESS_COUNTRY','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email1', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email_addresses_non_primary', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_NON_PRIMARY','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Rn777_ResumeEvaluator','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
>
<?php }
}
