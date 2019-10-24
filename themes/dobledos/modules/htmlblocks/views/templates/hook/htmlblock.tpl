{foreach $htmlBlocks as $htmlBlock}
	<div class="block-html__item block-html__item--{$htmlBlock.id_hook}">
  		{$htmlBlock.content nofilter}
	</div>
{/foreach}
