<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 19:11:09
         compiled from "/var/www/postfixadmin/templates/adminlistadmin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8278927025564a92d523b05-56003157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e9d51e3be98ef10ee5ecf1b07f8640ef27f8b83' => 
    array (
      0 => '/var/www/postfixadmin/templates/adminlistadmin.tpl',
      1 => 1384468436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8278927025564a92d523b05-56003157',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_properties' => 0,
    'PALANG' => 0,
    'admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5564a92d6aca69_66946455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5564a92d6aca69_66946455')) {function content_5564a92d6aca69_66946455($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['admin_properties']->value) {?>
	<table id="admin_table">
		<?php echo $_smarty_tpl->getConfigVariable('tr_header');?>

			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['admin'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminList_admin_count'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['last_modified'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['active'];?>
</td>
			<td colspan="2">&nbsp;</td>
		</tr>
<?php  $_smarty_tpl->tpl_vars['admin'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['admin']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['admin_properties']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['admin']->key => $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->_loop = true;
?>
		<?php echo $_smarty_tpl->getConfigVariable('tr_hilightoff');?>

			<td><a href="list-domain.php?username=<?php echo rawurlencode($_smarty_tpl->tpl_vars['admin']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
</a></td>
			<td>
				<?php if ($_smarty_tpl->tpl_vars['admin']->value['superadmin']==1) {?>
					<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['super_admin'];?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['admin']->value['domain_count'];?>

				<?php }?>
			</td>
			<td><?php echo $_smarty_tpl->tpl_vars['admin']->value['modified'];?>
</td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_editactive');?>
admin&amp;id=<?php echo rawurlencode($_smarty_tpl->tpl_vars['admin']->value['username']);?>
&amp;active=<?php if (($_smarty_tpl->tpl_vars['admin']->value['active']==0)) {?>1<?php } else { ?>0<?php }?>&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['_active'];?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_edit_admin');?>
&amp;edit=<?php echo rawurlencode($_smarty_tpl->tpl_vars['admin']->value['username']);?>
"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['edit'];?>
</a></td>
			<td><a href="<?php echo $_smarty_tpl->getConfigVariable('url_delete');?>
?table=admin&amp;delete=<?php echo rawurlencode($_smarty_tpl->tpl_vars['admin']->value['username']);?>
&amp;token=<?php echo rawurlencode($_SESSION['PFA_token']);?>
" 
				onclick="return confirm ('<?php echo $_smarty_tpl->tpl_vars['PALANG']->value['confirm'];
echo $_smarty_tpl->tpl_vars['PALANG']->value['admin'];?>
: <?php echo $_smarty_tpl->tpl_vars['admin']->value['username'];?>
');"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['del'];?>
</a></td>
		</tr>
<?php } ?>
	</table>
	<br /><a href="<?php echo $_smarty_tpl->getConfigVariable('url_create_admin');?>
" class="button"><?php echo $_smarty_tpl->tpl_vars['PALANG']->value['pAdminMenu_create_admin'];?>
</a><br />
<?php }?>
<?php }} ?>
