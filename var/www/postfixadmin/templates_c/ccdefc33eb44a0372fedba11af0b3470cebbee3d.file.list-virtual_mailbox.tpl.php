<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 20:04:33
         compiled from "/var/www/postfixadmin/templates/list-virtual_mailbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17560767385564b5b15a91b6-78425912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ccdefc33eb44a0372fedba11af0b3470cebbee3d' => 
    array (
      0 => '/var/www/postfixadmin/templates/list-virtual_mailbox.tpl',
      1 => 1400452221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17560767385564b5b15a91b6-78425912',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONF' => 0,
    'PALANG' => 0,
    'display_mailbox_aliases' => 0,
    'colspan' => 0,
    'tMailbox' => 0,
    'i' => 0,
    'gen_show_status_mailbox' => 0,
    'search' => 0,
    'item' => 0,
    'item2' => 0,
    'boolconf_used_quotas' => 0,
    'divide_quota' => 0,
    'quota_level' => 0,
    'v_active' => 0,
    'authentication_has_role' => 0,
    'edit_aliases' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5564b5b1d04274_15153693',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564b5b1d04274_15153693')) {function content_5564b5b1d04274_15153693($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/postfixadmin/smarty/libs/plugins/modifier.replace.php';
?>	<?php echo $_smarty_tpl->getConfigVariable('tr_header');?>

		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status']==='YES') {?><td></td><?php }?>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_username'];?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['display_mailbox_aliases']->value==true) {?>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['to'];?>
</td>
		<?php }?>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['name'];?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['quota']==='YES') {?><td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_mailbox_quota'];?>
</td><?php }?>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['last_modified'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['active'];?>
</td>
		<?php $_smarty_tpl->tpl_vars["colspan"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['colspan']->value-6), null, 0);?>
		<td colspan="<?php echo $_smarty_tpl->tpl_vars['colspan']->value;?>
">&nbsp;</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tMailbox']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getConfigVariable('tr_hilightoff');?>

			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status']==='YES') {?>
				<td><?php echo $_smarty_tpl->tpl_vars['gen_show_status_mailbox']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</td>
			<?php }?>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>
					<?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>

				<?php } else { ?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['username'],$_smarty_tpl->tpl_vars['search']->value,"<span class='searchresult'>".((string)$_smarty_tpl->tpl_vars['search']->value)."</span>");?>

				<?php }?>
			</td>
			<?php if ($_smarty_tpl->tpl_vars['display_mailbox_aliases']->value==true) {?>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['goto_mailbox']==1) {?>
					Mailbox<br/>
				<?php } else { ?>
					Forward only<br/>
				<?php }?>
				<?php  $_smarty_tpl->tpl_vars['item2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item2']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['goto_other']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item2']->key => $_smarty_tpl->tpl_vars['item2']->value) {
$_smarty_tpl->tpl_vars['item2']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['item2']->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>
						<?php echo $_smarty_tpl->tpl_vars['item2']->value;?>

					<?php } else { ?>
						<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item2']->value,$_smarty_tpl->tpl_vars['search']->value,"<span class='searchresult'>".((string)$_smarty_tpl->tpl_vars['search']->value)."</span>");?>

					<?php }?>
					<br/>
				<?php } ?>
				</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['quota']==='YES') {?>
				<td>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['quota']==0) {?>
					<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_unlimited'];?>

				<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['quota']<0) {?>
					<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_disabled'];?>

				<?php } else { ?>
					<?php if ($_smarty_tpl->tpl_vars['boolconf_used_quotas']->value) {?>

						
						<?php if ($_smarty_tpl->tpl_vars['divide_quota']->value['quota_width'][$_smarty_tpl->tpl_vars['i']->value]>90) {?>
							<?php $_smarty_tpl->tpl_vars["quota_level"] = new Smarty_variable("high", null, 0);?>
						<?php } elseif ($_smarty_tpl->tpl_vars['divide_quota']->value['quota_width'][$_smarty_tpl->tpl_vars['i']->value]>55) {?>
							<?php $_smarty_tpl->tpl_vars["quota_level"] = new Smarty_variable("mid", null, 0);?>
						<?php } else { ?> 
							<?php $_smarty_tpl->tpl_vars["quota_level"] = new Smarty_variable("low", null, 0);?>
						<?php }?>
						<div class="quota quota_<?php echo $_smarty_tpl->tpl_vars['quota_level']->value;?>
" style="width:<?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['quota_width'][$_smarty_tpl->tpl_vars['i']->value];?>
px;"></div>
						<div class="quota_bg"></div></div>
						<div class="quota_text quota_text_<?php echo $_smarty_tpl->tpl_vars['quota_level']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['current'][$_smarty_tpl->tpl_vars['i']->value];?>
 / <?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['quota'][$_smarty_tpl->tpl_vars['i']->value];?>
</div>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['divide_quota']->value['quota'][$_smarty_tpl->tpl_vars['i']->value];?>

					<?php }?>
				<?php }?>
				</td>
			<?php }?>
			<td><?php echo $_smarty_tpl->tpl_vars['item']->value['modified'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_editactive');?>
mailbox&amp;id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
&amp;active=<?php if (($_smarty_tpl->tpl_vars['item']->value['active']==0)) {?>1<?php } else { ?>0<?php }?>&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"
				><?php if ($_smarty_tpl->tpl_vars['item']->value['active']==1) {
echo $_smarty_tpl->tpl_vars['PALANG']->value['YES'];
} else {
echo $_smarty_tpl->tpl_vars['PALANG']->value['NO'];
}?></a></td>
			<?php if ($_smarty_tpl->tpl_vars['CONF']->value['vacation_control_admin']==='YES'&&$_smarty_tpl->tpl_vars['CONF']->value['vacation']==='YES') {?>
				<?php if ($_smarty_tpl->tpl_vars['item']->value['v_active']!==-1) {?>
					<?php if ($_smarty_tpl->tpl_vars['item']->value['v_active']==1) {?>
						<?php $_smarty_tpl->tpl_vars["v_active"] = new Smarty_variable($_smarty_tpl->tpl_vars['PALANG']->value['pOverview_vacation_edit'], null, 0);?>
					<?php } else { ?>
						<?php $_smarty_tpl->tpl_vars["v_active"] = new Smarty_variable($_smarty_tpl->tpl_vars['PALANG']->value['pOverview_vacation_option'], null, 0);?>
					<?php }?>
					<td><a href="vacation.php?username=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['v_active']->value;?>
</a></td>
				<?php }?>
			<?php } else { ?>
					<td>&nbsp;</td>
			<?php }?>
			<?php $_smarty_tpl->tpl_vars["edit_aliases"] = new Smarty_variable(0, null, 0);?>
			<?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin']!==true&&$_smarty_tpl->tpl_vars['CONF']->value['alias_control_admin']==='YES') {
$_smarty_tpl->tpl_vars["edit_aliases"] = new Smarty_variable(1, null, 0);
}?>
			<?php if ($_smarty_tpl->tpl_vars['authentication_has_role']->value['global_admin']==true&&$_smarty_tpl->tpl_vars['CONF']->value['alias_control']==='YES') {
$_smarty_tpl->tpl_vars["edit_aliases"] = new Smarty_variable(1, null, 0);
}?>
			<?php if ($_smarty_tpl->tpl_vars['edit_aliases']->value==1) {?>
				<td><a href="edit.php?table=alias&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['alias'];?>
</a></td>
			<?php }?>
			<td><a href="edit.php?table=mailbox&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['edit'];?>
</a></td>
			<td><a href="delete.php?table=mailbox&amp;delete=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['username']);?>
&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"
				onclick="return confirm ('<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['confirm'];
echo $_smarty_tpl->tpl_vars['PALANG']->value['mailboxes'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['username'];?>
');"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['del'];?>
</a></td>
		</tr>
	<?php } ?>
</table>
<?php }} ?>
