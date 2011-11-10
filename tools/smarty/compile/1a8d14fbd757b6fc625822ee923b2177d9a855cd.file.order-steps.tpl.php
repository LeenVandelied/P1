<?php /* Smarty version Smarty-3.0.7, created on 2011-11-10 09:15:53
         compiled from "/home/www/site3/themes/prestashop/./order-steps.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4438359524ebb883935a176-01220064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a8d14fbd757b6fc625822ee923b2177d9a855cd' => 
    array (
      0 => '/home/www/site3/themes/prestashop/./order-steps.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4438359524ebb883935a176-01220064',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if (!$_smarty_tpl->getVariable('opc')->value){?>
<!-- Steps -->
<ul class="step" id="order_step">
	<li class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='summary'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'||$_smarty_tpl->getVariable('current_step')->value=='address'||$_smarty_tpl->getVariable('current_step')->value=='login'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'||$_smarty_tpl->getVariable('current_step')->value=='address'||$_smarty_tpl->getVariable('current_step')->value=='login'){?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)&&$_smarty_tpl->getVariable('back')->value){?>?back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>">
			<?php echo smartyTranslate(array('s'=>'Summary'),$_smarty_tpl);?>

		</a>
		<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'Summary'),$_smarty_tpl);?>

		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='login'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'||$_smarty_tpl->getVariable('current_step')->value=='address'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'||$_smarty_tpl->getVariable('current_step')->value=='address'){?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=1<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)&&$_smarty_tpl->getVariable('back')->value){?>&amp;back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>">
			<?php echo smartyTranslate(array('s'=>'Login'),$_smarty_tpl);?>

		</a>
		<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'Login'),$_smarty_tpl);?>

		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='address'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'||$_smarty_tpl->getVariable('current_step')->value=='shipping'){?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=1<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)&&$_smarty_tpl->getVariable('back')->value){?>&amp;back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>">
			<?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>

		</a>
		<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'Address'),$_smarty_tpl);?>

		<?php }?>
	</li>
	<li class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='shipping'){?>step_current<?php }else{ ?><?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'){?>step_done<?php }else{ ?>step_todo<?php }?><?php }?>">
		<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'){?>
		<a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('order.php',true);?>
?step=2<?php if (isset($_smarty_tpl->getVariable('back',null,true,false)->value)&&$_smarty_tpl->getVariable('back')->value){?>&amp;back=<?php echo $_smarty_tpl->getVariable('back')->value;?>
<?php }?>">
			<?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>

		</a>
		<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'Shipping'),$_smarty_tpl);?>

		<?php }?>
	</li>
	<li id="step_end" class="<?php if ($_smarty_tpl->getVariable('current_step')->value=='payment'){?>step_current<?php }else{ ?>step_todo<?php }?>">
		<?php echo smartyTranslate(array('s'=>'Payment'),$_smarty_tpl);?>

	</li>
</ul>
<!-- /Steps -->
<?php }?>