<?php
/* Smarty version 4.5.3, created on 2025-01-07 08:34:21
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\themes\suite8\tpls\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_677cd8fd2ba410_33672604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51e0d04c823b6f8a54bc604c6ac3fbf49e93d475' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\themes\\suite8\\tpls\\header.tpl',
      1 => 1730388414,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:custom/themes/suite8/tpls/_head.tpl' => 1,
    'file:themes/suite8/tpls/_head.tpl' => 1,
  ),
),false)) {
function content_677cd8fd2ba410_33672604 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists('custom/themes/suite8/tpls/_head.tpl')) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:custom/themes/suite8/tpls/_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:themes/suite8/tpls/_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>
<body onMouseOut="closeMenus();">


<input id='ajaxUI-history-field' type='hidden'>
<?php echo '<script'; ?>
 type='text/javascript'>
    if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded) {
        YAHOO.util.History.register('ajaxUILoc', "", SUGAR.ajaxUI.go);
        <?php if ((isset($_REQUEST['module'])) && $_REQUEST['module'] != "ModuleBuilder") {?>        YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
        <?php }?>
    }
<?php echo '</script'; ?>
>

<!-- Start of page content -->
<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
<div id="bootstrap-container">
    <div id="content" class="content">
        <div id="pagecontent" class="pagecontent view-module-<?php echo (($tmp = $_REQUEST['module'] ?? null)===null||$tmp==='' ? 'default' ?? null : $tmp);?>
 view-action-<?php echo (($tmp = $_REQUEST['action'] ?? null)===null||$tmp==='' ? 'default' ?? null : $tmp);?>
">
<?php }
}
}
