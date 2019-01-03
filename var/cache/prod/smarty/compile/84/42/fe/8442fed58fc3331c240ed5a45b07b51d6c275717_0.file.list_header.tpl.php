<?php
/* Smarty version 3.1.33, created on 2018-12-19 05:49:57
  from '/home2/depuracr/public_html/dobledos/dob-adm/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a2255b851c3_36884948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8442fed58fc3331c240ed5a45b07b51d6c275717' => 
    array (
      0 => '/home2/depuracr/public_html/dobledos/dob-adm/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1545083148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a2255b851c3_36884948 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1777416095c1a2255b83545_39482844', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_1777416095c1a2255b83545_39482844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_1777416095c1a2255b83545_39482844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
