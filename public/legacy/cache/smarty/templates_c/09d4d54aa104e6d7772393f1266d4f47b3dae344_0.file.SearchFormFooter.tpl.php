<?php
/* Smarty version 4.5.3, created on 2025-01-11 10:50:16
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\cache\themes\suite8\modules\Rn777_ResumeEvaluator\SearchFormFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67823ed85b54f1_31391517',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09d4d54aa104e6d7772393f1266d4f47b3dae344' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\cache\\themes\\suite8\\modules\\Rn777_ResumeEvaluator\\SearchFormFooter.tpl',
      1 => 1736589016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/SearchForm/tpls/footerPopup.tpl' => 1,
  ),
),false)) {
function content_67823ed85b54f1_31391517 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),1=>array('file'=>'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\include\\Smarty\\plugins\\function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

</form>

<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';

        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
';
        document.getElementById('up_down_img').setAttribute('alt',"<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_HIDE_OPTIONS'),$_smarty_tpl);?>
");

    }else{

        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
';
        document.getElementById('up_down_img').setAttribute('alt',"<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
");
			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['searchFormInPopup']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender('file:include/SearchForm/tpls/footerPopup.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
