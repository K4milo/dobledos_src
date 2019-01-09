<section class="section custom-blocks">
	{foreach $htmlBlocks as $htmlBlock}
		<article class="custom-block-item position-{$htmlBlock.position nofilter} {$htmlBlock.name nofilter}">
			{$htmlBlock.content nofilter}
		</article>
	{/foreach}
</section>