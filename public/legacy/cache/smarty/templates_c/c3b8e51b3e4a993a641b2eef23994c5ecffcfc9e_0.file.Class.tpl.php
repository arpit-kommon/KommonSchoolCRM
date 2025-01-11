<?php
/* Smarty version 4.5.3, created on 2025-01-11 09:28:34
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\ModuleBuilder\tpls\MBModule\Class.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67822bb2183ba5_66349134',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3b8e51b3e4a993a641b2eef23994c5ecffcfc9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\ModuleBuilder\\tpls\\MBModule\\Class.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67822bb2183ba5_66349134 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value['requires'], 'require');
$_smarty_tpl->tpl_vars['require']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['require']->value) {
$_smarty_tpl->tpl_vars['require']->do_else = false;
?>
require_once('<?php echo $_smarty_tpl->tpl_vars['require']->value;?>
');
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

class <?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
 extends <?php echo $_smarty_tpl->tpl_vars['class']->value['extends'];?>

{
    public $new_schema = true;
    public $module_dir = '<?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
';
    public $object_name = '<?php echo $_smarty_tpl->tpl_vars['class']->value['name'];?>
';
    public $table_name = '<?php echo $_smarty_tpl->tpl_vars['class']->value['table_name'];?>
';
    public $importable = <?php if ($_smarty_tpl->tpl_vars['class']->value['importable']) {?>true<?php } else { ?>false<?php }?>;

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['class']->value['fields'], 'def', false, 'field');
$_smarty_tpl->tpl_vars['def']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value => $_smarty_tpl->tpl_vars['def']->value) {
$_smarty_tpl->tpl_vars['def']->do_else = false;
?>
    public $<?php echo $_smarty_tpl->tpl_vars['field']->value;?>
;
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
<?php if ($_smarty_tpl->tpl_vars['class']->value['acl']) {?>
    public function bean_implements($interface)
    {
        switch($interface)
        {
            case 'ACL':
                return true;
        }

        return false;
    }
<?php }?>
	
}
<?php }
}
