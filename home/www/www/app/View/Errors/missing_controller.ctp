<?php
/**
 *
 *
 *
 *
 *
 *	https://github.com/mundoSICA/cakePHP-twBootstrap-ViewsErrors/blob/master/app/View/Errors/missing_controller.ctp
 *
 *
 *
 **
 *
 *
*
 *
 *
 *
 *
 **
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
$pluginDot = empty($plugin) ? null : $plugin . '.';
?>

<div class="col-md-12">
<h2><?php echo __d('cake_dev', 'Missing Controller'); ?></h2>
<p class="alert alert-error">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', '%s could not be found.', '<em>' . $pluginDot . $class . '</em>'); ?>
</p>
<p class="alert alert-error">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Error'); ?>: </strong>
	<?php echo __d('cake_dev', 'Create the class %s below in file: %s', '<em>' . $class . '</em>', (empty($plugin) ? APP_DIR . DS : CakePlugin::path($plugin)) . 'Controller' . DS . $class . '.php'); ?>
</p>
<pre>
&lt;?php
class <?php echo $class . ' extends ' . $plugin; ?>AppController {

}
</pre>
<p class="alert alert-info">
	<button class="close" data-dismiss="alert">×</button>
	<strong><?php echo __d('cake_dev', 'Notice'); ?>: </strong>
	<?php echo __d('cake_dev', 'If you want to customize this error message, create %s', APP_DIR . DS . 'View' . DS . 'Errors' . DS . 'missing_controller.ctp'); ?>
</p>

<?php echo $this->element('exception_stack_trace'); ?>
</div>