{extends file='page.tpl'}

{block name='page_content_container'}
  <section id="content" class="page-content page-cms page-cms-{$cms.id} custom-page-medida">
    
    <div class="block-top-content">
      {block name='cms_content'}
        {$cms.content nofilter}
      {/block}
    </div>
    
    <div class="middle-blocks">
      {block name="size_content"}
      	{hook h='displayCmsSizes'}
      {/block}
    </div>
    
    <div class="blocks-contact-info">
      {block name="size_content"}
      	{hook h='displayContactSizes'}
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
