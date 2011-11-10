<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 17:03:32
         compiled from "/home/www/site3/themes/prestashop/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3174340594ebaa4546ba1e3-87869280%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d33f2df120d9cc0b395ab012ad56e4ee14d6ea7' => 
    array (
      0 => '/home/www/site3/themes/prestashop/footer.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3174340594ebaa4546ba1e3-87869280',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


		<?php if (!$_smarty_tpl->getVariable('content_only')->value){?>
				</div>

<!-- Right -->
				<div id="right_column" class="column">
					<?php echo $_smarty_tpl->getVariable('HOOK_RIGHT_COLUMN')->value;?>

				</div>
			</div>

<!-- Footer -->
			<div id="footer"><?php echo $_smarty_tpl->getVariable('HOOK_FOOTER')->value;?>
</div>
		</div>
	<?php }?>
	</body>
</html>
