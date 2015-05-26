<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 19:10:56
         compiled from "/var/www/postfixadmin/templates/list-virtual_alias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12029140975564a920f3fe20-40832973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21378288ca0685daa5b0261b95ed36700933c194' => 
    array (
      0 => '/var/www/postfixadmin/templates/list-virtual_alias.tpl',
      1 => 1384122142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12029140975564a920f3fe20-40832973',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONF' => 0,
    'PALANG' => 0,
    'tAlias' => 0,
    'i' => 0,
    'gen_show_status' => 0,
    'search' => 0,
    'item' => 0,
    'singlegoto' => 0,
    'check_alias_owner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5564a92122d503_31906514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564a92122d503_31906514')) {function content_5564a92122d503_31906514($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/postfixadmin/smarty/libs/plugins/modifier.replace.php';
?>	<?php echo $_smarty_tpl->getConfigVariable('tr_header');?>

		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status']==='YES') {?>
			<td></td>
		<?php }?>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pOverview_alias_address'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['to'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['last_modified'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['active'];?>
</td>
		<td colspan="2">&nbsp;</td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['tAlias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
		<?php echo $_smarty_tpl->getConfigVariable('tr_hilightoff');?>

		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['show_status']==='YES') {?>
			<td><?php echo $_smarty_tpl->tpl_vars['gen_show_status']->value[$_smarty_tpl->tpl_vars['i']->value];?>
</td>
		<?php }?>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>
				<?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>

			<?php } else { ?>
				<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['item']->value['address'],$_smarty_tpl->tpl_vars['search']->value,"<span class='searchresult'>".((string)$_smarty_tpl->tpl_vars['search']->value)."</span>");?>

			<?php }?>
		</td>
		<?php if ($_smarty_tpl->tpl_vars['CONF']->value['alias_goto_limit']>0) {?>
			<td><i>sorry, alias_goto_limit > 0 not handled</i></td>
		<?php } else { ?>
			<td>
				<?php  $_smarty_tpl->tpl_vars['singlegoto'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['singlegoto']->_loop = false;
 $_smarty_tpl->tpl_vars['key2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item']->value['goto']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['singlegoto']->key => $_smarty_tpl->tpl_vars['singlegoto']->value) {
$_smarty_tpl->tpl_vars['singlegoto']->_loop = true;
 $_smarty_tpl->tpl_vars['key2']->value = $_smarty_tpl->tpl_vars['singlegoto']->key;
?>

				<?php if ($_smarty_tpl->tpl_vars['search']->value=='') {?>
					<?php echo $_smarty_tpl->tpl_vars['singlegoto']->value;?>
<br />
				<?php } else { ?>
					<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['singlegoto']->value,$_smarty_tpl->tpl_vars['search']->value,"<span class='searchresult'>".((string)$_smarty_tpl->tpl_vars['search']->value)."</span>");?>
<br />
				<?php }?>

				<?php } ?>
			</td>
		<?php }?>
		<td><?php echo $_smarty_tpl->tpl_vars['item']->value['modified'];?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['check_alias_owner']->value[$_smarty_tpl->tpl_vars['i']->value]==true) {?>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_editactive');?>
alias&amp;id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['address']);?>
&amp;active=<?php if (($_smarty_tpl->tpl_vars['item']->value['active']==0)) {?>1<?php } else { ?>0<?php }?>&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"
				><?php if ($_smarty_tpl->tpl_vars['item']->value['active']==1) {
echo $_smarty_tpl->tpl_vars['PALANG']->value['YES'];
} else {
echo $_smarty_tpl->tpl_vars['PALANG']->value['NO'];
}?></a></td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_create_alias');?>
&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['address']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['edit'];?>
</a></td>
			<td><a href="delete.php?table=alias&amp;delete=<?php echo rawurlencode($_smarty_tpl->tpl_vars['item']->value['address']);?>
&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
" 
				onclick="return confirm ('<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['confirm'];
echo $_smarty_tpl->tpl_vars['PALANG']->value['aliases'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['address'];?>
');"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['del'];?>
</a></td>
		<?php } else { ?>
			<td><?php if ($_smarty_tpl->tpl_vars['item']->value['active']==1) {
echo $_smarty_tpl->tpl_vars['PALANG']->value['YES'];
} else {
echo $_smarty_tpl->tpl_vars['PALANG']->value['NO'];
}?></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		<?php }?>
		</tr>
	<?php } ?>

<?php }} ?>
