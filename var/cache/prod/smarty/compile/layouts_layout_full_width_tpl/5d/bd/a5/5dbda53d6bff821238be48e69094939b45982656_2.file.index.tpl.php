<?php
/* Smarty version 3.1.33, created on 2018-12-17 17:15:22
  from '/home2/depuracr/public_html/dobledos/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c181ffa661866_88713915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dbda53d6bff821238be48e69094939b45982656' => 
    array (
      0 => '/home2/depuracr/public_html/dobledos/themes/classic/templates/index.tpl',
      1 => 1545083148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c181ffa661866_88713915 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19736715505c181ffa65d4e8_38375248', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_8084602535c181ffa65df06_26360939 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_13086953135c181ffa65f7b4_35683257 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18106689825c181ffa65ee51_47606622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13086953135c181ffa65f7b4_35683257', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19736715505c181ffa65d4e8_38375248 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_19736715505c181ffa65d4e8_38375248',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_8084602535c181ffa65df06_26360939',
  ),
  'page_content' => 
  array (
    0 => 'Block_18106689825c181ffa65ee51_47606622',
  ),
  'hook_home' => 
  array (
    0 => 'Block_13086953135c181ffa65f7b4_35683257',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8084602535c181ffa65df06_26360939', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18106689825c181ffa65ee51_47606622', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
