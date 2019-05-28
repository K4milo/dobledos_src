<section class="section custom-blocks">
	{if isset($htmlBlocks)}
		{foreach $htmlBlocks as $htmlBlock}
			<article class="custom-block-item position-{$htmlBlock.position nofilter} {if isset($htmlBlock.name)}{$htmlBlock.name nofilter}{/if}">
				{$htmlBlock.content nofilter}
			</article>
		{/foreach}
	{/if}
</section>