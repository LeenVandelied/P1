<?php /* Smarty version Smarty-3.0.7, created on 2011-11-10 09:21:07
         compiled from "/home/www/site3/modules/cheque/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17116919274ebb89734c6231-09756553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '537ae1bae838f41f26838562dbfdfc32e8a2940a' => 
    array (
      0 => '/home/www/site3/modules/cheque/payment.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17116919274ebb89734c6231-09756553',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<p class="payment_module">
	<a href="<?php echo $_smarty_tpl->getVariable('this_path_ssl')->value;?>
payment.php" title="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
">
		<img src="<?php echo $_smarty_tpl->getVariable('this_path')->value;?>
cheque.jpg" alt="<?php echo smartyTranslate(array('s'=>'Pay by cheque','mod'=>'cheque'),$_smarty_tpl);?>
" width="86" height="49" />
		<?php echo smartyTranslate(array('s'=>'Pay by cheque (order process will be longer)','mod'=>'cheque'),$_smarty_tpl);?>

	</a>
</p>