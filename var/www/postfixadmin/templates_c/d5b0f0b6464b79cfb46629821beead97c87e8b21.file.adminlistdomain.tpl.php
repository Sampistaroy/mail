<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 19:10:39
         compiled from "/var/www/postfixadmin/templates/adminlistdomain.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17077230445564a90f23c358-00809201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5b0f0b6464b79cfb46629821beead97c87e8b21' => 
    array (
      0 => '/var/www/postfixadmin/templates/adminlistdomain.tpl',
      1 => 1384122142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17077230445564a90f23c358-00809201',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select_options' => 0,
    'PALANG' => 0,
    'domain_properties' => 0,
    'CONF' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5564a90f4e4fd5_23284559',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564a90f4e4fd5_23284559')) {function content_5564a90f4e4fd5_23284559($_smarty_tpl) {?><div id="overview">
<form name="frmOverview" method="post" action="">
	<select name="fUsername" onchange="this.form.submit();">
	<?php echo $_smarty_tpl->tpl_vars['select_options']->value;?>

	</select>
	<input class="button" type="submit" name="go" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['go'];?>
" />
</form>
<?php echo $_smarty_tpl->getConfigVariable('form_search');?>

</div>
<?php if ($_smarty_tpl->tpl_vars['domain_properties']->value) {?>
	<table id="admin_table">
		<?php echo $_smarty_tpl->getConfigVariable('tr_header');?>

			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['domain'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['description'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['aliases'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['mailboxes'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['quota']=='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_get_quota'];?>
</td><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['domain_quota']=='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminList_domain_quota'];?>
</td><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['transport']=='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['transport'];?>
</td><?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminList_domain_backupmx'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['last_modified'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['active'];?>
</td>
			<td colspan="2">&nbsp;</td>
		</tr>
<?php  $_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['domain']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['domain_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['domain']->key => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
?>
		<?php echo $_smarty_tpl->getConfigVariable('tr_hilightoff');?>

			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_list_virtual');?>
?domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['domain']->value['domain']);?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
</a></td>
			<td><?php echo $_smarty_tpl->tpl_vars['domain']->value['description'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['domain']->value['alias_count'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['aliases'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['domain']->value['mailbox_count'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['mailboxes'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['quota']=='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['domain']->value['maxquota'];?>
</td><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['domain_quota']==='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['domain']->value['total_quota'];?>
 / <?php echo $_smarty_tpl->tpl_vars['domain']->value['quota'];?>
</td><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['transport']=='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['domain']->value['transport'];?>
</td><?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['domain']->value['_backupmx'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['domain']->value['modified'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_editactive');?>
domain&amp;id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['domain']->value['domain']);?>
&amp;active=<?php if (($_smarty_tpl->tpl_vars['domain']->value['active']==0)) {?>1<?php } else { ?>0<?php }?>&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"><?php echo $_smarty_tpl->tpl_vars['domain']->value['_active'];?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_edit_domain');?>
&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['domain']->value['domain']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['edit'];?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_delete');?>
?table=domain&amp;delete=<?php echo rawurlencode($_smarty_tpl->tpl_vars['domain']->value['domain']);?>
&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
" 
				onclick="return confirm ('<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['confirm_domain'];
echo $_smarty_tpl->tpl_vars['PALANG']->value['domain'];?>
: <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
')"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['del'];?>
</a></td>
		</tr>
<?php } ?>
	</table>
<?php }?>
<br /><a href="<?php echo $_smarty_tpl->getConfigVariable('url_edit_domain');?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_create_domain'];?>
</a><br />
<?php }} ?>
