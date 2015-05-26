<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 19:10:56
         compiled from "/var/www/postfixadmin/templates/list-virtual.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17775782785564a920849d34-28351794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa497e0a55e04e4073c14bdef51e5f339f9dfc1c' => 
    array (
      0 => '/var/www/postfixadmin/templates/list-virtual.tpl',
      1 => 1375135687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17775782785564a920849d34-28351794',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'select_options' => 0,
    'PALANG' => 0,
    'fDomain' => 0,
    'limit' => 0,
    'tab' => 0,
    'search' => 0,
    'boolconf_alias_domain' => 0,
    'nav_bar_alias' => 0,
    'tAlias' => 0,
    'tCanAddAlias' => 0,
    'nav_bar_mailbox' => 0,
    'CONF' => 0,
    'colspan' => 0,
    'tMailbox' => 0,
    'tCanAddMailbox' => 0,
    'i' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5564a920c8b377_05296468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564a920c8b377_05296468')) {function content_5564a920c8b377_05296468($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["file"] = new Smarty_variable($_smarty_tpl->getConfigVariable('url_list_virtual'), null, 0);?>
<div id="overview">
<form name="frmOverview" method="get" action="<?php echo $_smarty_tpl->getConfigVariable('url_list_virtual');?>
">
	<select name="domain" onchange="this.form.submit();">
		<?php echo $_smarty_tpl->tpl_vars['select_options']->value;?>

	</select>
	<input type="hidden" name="limit" value="0" />
	<input class="button" type="submit" name="go" value="<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['go'];?>
" />
</form>
<h4><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_welcome'];
echo $_smarty_tpl->tpl_vars['fDomain']->value;?>
</h4>
<p><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['aliases'];?>
: <?php echo $_smarty_tpl->tpl_vars['limit']->value['alias_count'];?>
 / <?php echo $_smarty_tpl->tpl_vars['limit']->value['aliases'];?>
</p>
<p><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['mailboxes'];?>
: <?php echo $_smarty_tpl->tpl_vars['limit']->value['mailbox_count'];?>
 / <?php echo $_smarty_tpl->tpl_vars['limit']->value['mailboxes'];?>
</p>
<?php echo $_smarty_tpl->getConfigVariable('form_search');?>

</div>
<div class='subnav'><p><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['show'];?>

	<?php if ($_smarty_tpl->tpl_vars['tab']->value=='all') {?><span class='active'><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['all'];?>
</span>
	<?php } else { ?><a href="?domain=<?php echo $_GET['domain'];?>
&amp;tab=all<?php if ($_smarty_tpl->tpl_vars['search']->value!='') {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['all'];?>
</a><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tab']->value=='mailbox') {?><span class='active'><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_title'];?>
</span>
	<?php } else { ?><a href="?domain=<?php echo $_GET['domain'];?>
&amp;tab=mailbox<?php if ($_smarty_tpl->tpl_vars['search']->value!='') {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_title'];?>
</a><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['tab']->value=='alias') {?><span class='active'><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_alias_title'];?>
</span>
	<?php } else { ?><a href="?domain=<?php echo $_GET['domain'];?>
&amp;tab=alias<?php if ($_smarty_tpl->tpl_vars['search']->value!='') {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_alias_title'];?>
</a><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['boolconf_alias_domain']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['tab']->value=='alias_domain') {?><span class='active'><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_alias_domain_title'];?>
</span>
		<?php } else { ?><a href="?domain=<?php echo $_GET['domain'];?>
&amp;tab=alias_domain<?php if ($_smarty_tpl->tpl_vars['search']->value!='') {?>&search=<?php echo $_smarty_tpl->tpl_vars['search']->value;
}?>"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_alias_domain_title'];?>
</a><?php }?>
	<?php }?>
</p></div>
<br clear="all"/><br/>

<?php if ($_smarty_tpl->tpl_vars['boolconf_alias_domain']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['tab']->value=='alias_domain'||$_smarty_tpl->tpl_vars['tab']->value=='all') {?>
		<?php echo $_smarty_tpl->getSubTemplate ("list-virtual_alias_domain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tab']->value=='all') {?><br /><?php }?>

<?php if ($_smarty_tpl->tpl_vars['tab']->value=='alias'||$_smarty_tpl->tpl_vars['tab']->value=='all') {?>
	<?php echo $_smarty_tpl->tpl_vars['nav_bar_alias']->value['top'];?>

	<table id="alias_table">
		<tr>
			<th colspan="7"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_alias_title'];?>
</th>
		</tr>
	<?php if ($_smarty_tpl->tpl_vars['tAlias']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("list-virtual_alias.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	</table>
	<?php echo $_smarty_tpl->tpl_vars['nav_bar_alias']->value['bottom'];?>

	<?php if ($_smarty_tpl->tpl_vars['tCanAddAlias']->value) {?>
		<br /><a href="<?php echo $_smarty_tpl->getConfigVariable('url_create_alias');?>
&amp;domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['fDomain']->value);?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_alias'];?>
</a><br />
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['tab']->value=='all') {?><br /><?php }?>
<?php if ($_smarty_tpl->tpl_vars['tab']->value=='mailbox'||$_smarty_tpl->tpl_vars['tab']->value=='all') {?>
	<?php echo $_smarty_tpl->tpl_vars['nav_bar_mailbox']->value['top'];?>

	<?php $_smarty_tpl->tpl_vars["colspan"] = new Smarty_variable(9, null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['CONF']->value['vacation_control_admin']==='YES') {
$_smarty_tpl->tpl_vars["colspan"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['colspan']->value+1), null, 0);
}?>
	<?php if ($_smarty_tpl->tpl_vars['CONF']->value['alias_control_admin']==='YES') {
$_smarty_tpl->tpl_vars["colspan"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['colspan']->value+1), null, 0);
}?>
	<table id="mailbox_table">
		<tr>
			<th colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_title'];?>
</th>
		</tr>
	<?php if ($_smarty_tpl->tpl_vars['tMailbox']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ("list-virtual_mailbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?></table>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['nav_bar_mailbox']->value['bottom'];?>

	<?php if ($_smarty_tpl->tpl_vars['tCanAddMailbox']->value) {?>
		<br /><a href="<?php echo $_smarty_tpl->getConfigVariable('url_create_mailbox');?>
&amp;domain=<?php echo rawurlencode($_smarty_tpl->tpl_vars['fDomain']->value);?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['add_mailbox'];?>
</a><br />
	<?php }?>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status']==='YES'&&$_smarty_tpl->tpl_vars['CONF']->value['show_status_key']==='YES') {?>
	<br/><br/>
	<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_undeliverable']==='YES') {?>
		&nbsp;<span style='background-color:<?php echo $_smarty_tpl->tpl_vars['CONF']->value['show_undeliverable_color'];?>
;'><?php echo $_smarty_tpl->tpl_vars['CONF']->value['show_status_text'];?>
</span>=<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pStatus_undeliverable'];?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_popimap']==='YES') {?>
		&nbsp;<span style='background-color:<?php echo $_smarty_tpl->tpl_vars['CONF']->value['show_popimap_color'];?>
;'><?php echo $_smarty_tpl->tpl_vars['CONF']->value['show_status_text'];?>
</span>=<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pStatus_popimap'];?>

	<?php }?>
	<?php if (count($_smarty_tpl->tpl_vars['CONF']->value['show_custom_domains'])>0) {?>
		<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONF']->value['show_custom_domains']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			&nbsp;<span style='background-color:<?php echo $_smarty_tpl->tpl_vars['CONF']->value['show_custom_colors'][$_smarty_tpl->tpl_vars['i']->value];?>
;'><?php echo $_smarty_tpl->tpl_vars['CONF']->value['show_status_text'];?>
</span>=<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pStatus_custom'];
echo $_smarty_tpl->tpl_vars['item']->value;?>

		<?php } ?>
	<?php }?>
<?php }?>
<?php }} ?>
