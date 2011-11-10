<?php /*%%SmartyHeaderCode:7916353404ebaa453258fd1-89402590%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ca50a073df503608250e8e3fe4cfe0af215140a' => 
    array (
      0 => '/home/www/site3/modules/blockcategories/blockcategories.tpl',
      1 => 1306507748,
      2 => 'file',
    ),
    '1ff5940bea6c87a3707f28f992cf70bf4c17411a' => 
    array (
      0 => '/home/www/site3/modules/blockcategories/category-tree-branch.tpl',
      1 => 1306138304,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7916353404ebaa453258fd1-89402590',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$no_render) {?>

<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<h4>Cat&eacute;gories</h4>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://site3.ip-formation.local/category.php?id_category=2"  title="Il est temps, pour le meilleur lecteur de musique, de remonter sur scène pour un rappel. Avec le nouvel iPod, le monde est votre scène.">iPods</a>
	</li>
												
<li >
	<a href="http://site3.ip-formation.local/category.php?id_category=3" class="selected" title="Tous les accessoires à la mode pour votre iPod">Accessoires</a>
	</li>
												
<li class="last">
	<a href="http://site3.ip-formation.local/category.php?id_category=4"  title="Le tout dernier processeur Intel, un disque dur plus spacieux, de la mémoire à profusion et d&#039;autres nouveautés. Le tout, dans à peine 2,59 cm qui vous libèrent de toute entrave. Les nouveaux portables Mac réunissent les performances, la puissance et la connectivité d&#039;un ordinateur de bureau. Sans la partie bureau.">Portables</a>
	</li>
							</ul>
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php } ?>