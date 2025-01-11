<?php
/* Smarty version 4.5.3, created on 2025-01-11 09:25:33
  from 'C:\xampp\htdocs\SuiteCRM-8\public\legacy\modules\Administration\AOSAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.3',
  'unifunc' => 'content_67822afd736188_29873513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec1cd0b957bc281e5c8e867afea0d1473566d94' => 
    array (
      0 => 'C:\\xampp\\htdocs\\SuiteCRM-8\\public\\legacy\\modules\\Administration\\AOSAdmin.tpl',
      1 => 1730388413,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67822afd736188_29873513 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form id="ConfigureSettings" name="ConfigureSettings" enctype='multipart/form-data' method="POST"
      action="index.php?module=Administration&action=AOSAdmin&do=save">

    <span class='error'><?php echo $_smarty_tpl->tpl_vars['error']->value['main'];?>
</span>

    <table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
        <tr>
            <td class="action-button">
                <?php echo $_smarty_tpl->tpl_vars['BUTTONS']->value;?>

            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_CONTRACT_SETTINGS'];?>
</h4></th>
        <tr>
            <td  scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_CONTRACT_RENEWAL_REMINDER'];?>
: </td>
            <td  >
                <input type='number' size='10' name='aos_contracts_renewalReminderPeriod' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['aos']['contracts']['renewalReminderPeriod'];?>
' > <span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_DAYS'];?>
</span>
            </td>
        </tr>
    </table>


    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_INVOICE_SETTINGS'];?>
</h4></th>
        </tr>
        <tr>
            <td  scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_INITIAL_INVOICE_NUMBER'];?>
: </td>
            <td  >
                <input type='number' size='10' name='aos_invoices_initialNumber' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['aos']['invoices']['initialNumber'];?>
' >
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_QUOTE_SETTINGS'];?>
</h4></th>
        </tr>
        <tr>
            <td  scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_INITIAL_QUOTE_NUMBER'];?>
: </td>
            <td  >
                <input type='number' size='10' name='aos_quotes_initialNumber' value='<?php echo $_smarty_tpl->tpl_vars['config']->value['aos']['quotes']['initialNumber'];?>
' >
            </td>
        </tr>
    </table>

    <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
        <tr><th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_LINE_ITEM_SETTINGS'];?>
</h4></th>
        </tr>
        <tr>
            <td  scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_ENABLE_LINE_ITEM_GROUPS'];?>
: </td>
            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['aos']['lineItems']['enableGroups'])) && $_smarty_tpl->tpl_vars['config']->value['aos']['lineItems']['enableGroups'] != "true") {?>
                <?php $_smarty_tpl->_assignInScope('lineItems_enableGroups', '');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('lineItems_enableGroups', 'CHECKED');?>
            <?php }?>
            <td>
                <input type='hidden' name='aos_lineItems_enableGroups' value='false'>
                <input name='aos_lineItems_enableGroups'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['lineItems_enableGroups']->value;?>
>
            </td>

            <td  scope="row" width="200"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AOS_ADMIN_ENABLE_LINE_ITEM_TOTAL_TAX'];?>
: </td>
            <?php if ((isset($_smarty_tpl->tpl_vars['config']->value['aos']['lineItems']['totalTax'])) && $_smarty_tpl->tpl_vars['config']->value['aos']['lineItems']['totalTax'] != "true") {?>
                <?php $_smarty_tpl->_assignInScope('lineItems_totalTax', '');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('lineItems_totalTax', 'CHECKED');?>
            <?php }?>
            <td>
                <input type='hidden' name='aos.lineItems.totalTax' value='false'>
                <input name='aos.lineItems.totalTax'  type="checkbox" value="true" <?php echo $_smarty_tpl->tpl_vars['lineItems_totalTax']->value;?>
>
            </td>
        </tr>
    </table>

    <div class="hide-btn">
        <?php echo $_smarty_tpl->tpl_vars['BUTTONS']->value;?>

    </div>
    <?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>

</form>
<?php }
}
