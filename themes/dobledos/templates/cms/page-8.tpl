{extends file='page.tpl'}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id} custom-page-medida">
    
    <div class="bonus-blocks">
      {block name="size_content"}
      	{hook h='displayBonusBlocks'}
      {/block}
    </div>

    {block name='hook_cms_dispute_information'}
      {hook h='displayCMSDisputeInformation'}
    {/block}

    {block name='hook_cms_print_button'}
      {hook h='displayCMSPrintButton'}
    {/block}

  </section>
{/block}