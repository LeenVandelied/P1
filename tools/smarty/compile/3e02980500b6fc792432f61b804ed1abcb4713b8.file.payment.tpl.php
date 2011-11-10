<?php /* Smarty version Smarty-3.0.7, created on 2011-11-10 09:21:07
         compiled from "/home/www/site3/modules/bankwire/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12962045944ebb8973524886-98438150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e02980500b6fc792432f61b804ed1abcb4713b8' => 
    array (
      0 => '/home/www/site3/modules/bankwire/payment.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12962045944ebb8973524886-98438150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
bankwire.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
" width="86" height="49"/>
		<?php echo smartyTranslate(array('s'=>'Pay by bank wire (order process will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>

	</a>
</p>