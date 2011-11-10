<?php /* Smarty version Smarty-3.0.7, created on 2011-11-09 17:03:30
         compiled from "/home/www/site3/modules/blockpermanentlinks/blockpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:685846194ebaa452d5fe26-97077346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ab05abd4c3d374d6314c408d327640a27f556b7' => 
    array (
      0 => '/home/www/site3/modules/blockpermanentlinks/blockpermanentlinks-header.tpl',
      1 => 1316563352,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '685846194ebaa452d5fe26-97077346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>


<!-- Block permanent links module HEADER -->
<ul id="header_links">
	<li id="header_link_contact"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('contact-form.php',true);?>
" title="<?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'contact','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_sitemap"><a href="<?php echo $_smarty_tpl->getVariable('link')->value->getPageLink('sitemap.php');?>
" title="<?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li id="header_link_bookmark">
		<script type="text/javascript">writeBookmarkLink('<?php echo $_smarty_tpl->getVariable('come_from')->value;?>
', '<?php echo addslashes(addslashes($_smarty_tpl->getVariable('meta_title')->value));?>
', '<?php echo smartyTranslate(array('s'=>'bookmark','mod'=>'blockpermanentlinks'),$_smarty_tpl);?>
');</script>
	</li>
</ul>
<!-- /Block permanent links module HEADER -->
