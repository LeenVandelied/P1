<?php /* Smarty version Smarty-3.0.7, created on 2011-11-10 09:15:59
         compiled from "/home/www/site3/themes/prestashop/./category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12824268064ebb883f1f1f28-04179058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daeec4d5845c59923981cdfccf6c1b7becd71641' => 
    array (
      0 => '/home/www/site3/themes/prestashop/./category-count.tpl',
      1 => 1315934548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12824268064ebb883f1f1f28-04179058',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php if ($_smarty_tpl->getVariable('category')->value->id==1||$_smarty_tpl->getVariable('nb_products')->value==0){?><?php echo smartyTranslate(array('s'=>'There are no products.'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'There is'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'There are'),$_smarty_tpl);?>
<?php }?>
	<?php echo $_smarty_tpl->getVariable('nb_products')->value;?>

	<?php if ($_smarty_tpl->getVariable('nb_products')->value==1){?><?php echo smartyTranslate(array('s'=>'product.'),$_smarty_tpl);?>
<?php }else{ ?><?php echo smartyTranslate(array('s'=>'products.'),$_smarty_tpl);?>
<?php }?>
<?php }?>