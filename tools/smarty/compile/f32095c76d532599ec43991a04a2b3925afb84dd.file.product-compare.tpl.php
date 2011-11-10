<?php /* Smarty version Smarty-3.0.7, created on 2011-11-10 09:15:59
         compiled from "/home/www/site3/themes/prestashop/./product-compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4029216324ebb883f4060f9-23874189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f32095c76d532599ec43991a04a2b3925afb84dd' => 
    array (
      0 => '/home/www/site3/themes/prestashop/./product-compare.tpl',
      1 => 1311601252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4029216324ebb883f4060f9-23874189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<?php if ($_smarty_tpl->getVariable('comparator_max_item')->value){?>
<script type="text/javascript">
// <![CDATA[
	var min_item = '<?php echo smartyTranslate(array('s'=>'Please select at least one product.','js'=>1),$_smarty_tpl);?>
';
	var max_item = "<?php echo smartyTranslate(array('s'=>'You cannot add more than','js'=>1),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->getVariable('comparator_max_item')->value;?>
 <?php echo smartyTranslate(array('s'=>'product(s) in the product comparator','js'=>1),$_smarty_tpl);?>
";
//]]>
</script>
	<form method="get" action="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('products-comparison.php',true);?>
" onsubmit="true">
		<p>
		<input type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Compare'),$_smarty_tpl);?>
" style="float:right" />
		<input type="hidden" name="compare_product_list" class="compare_product_list" value="" />
		</p>
	</form>
<?php }?>

