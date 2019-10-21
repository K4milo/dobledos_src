{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{*if $elements}
  <div id="block-reassurance">
    <ul>
      {foreach from=$elements item=element}
        <li class="reassurance-id-{$element.id_reassurance}"><img src="{$element.image}" alt="{$element.text|escape:'quotes'}" /> 
        	<p>{$element.text}></p>
        </li>
      {/foreach}
    </ul>
  </div>
{/if*}
{if $elements}
	<div id="block-reassurance">
		<div class="panel-group panel-group--reassurance">
			{foreach from=$elements item=element}
				<div class="panel panel-default">
					<div class="panel-heading">
					  <h4 class="panel-title">
					    <a data-toggle="collapse" href="#collapse-{$element.id_reassurance}">
					    	<img src="{$element.image}" alt="{$element.text|escape:'quotes'}" />
					    	{if $element.id_reassurance == 1}
					    		<span class="h6">Políticas de Garantía</span>
					    	{elseif $element.id_reassurance == 2}
					    		<span class="h6">Políticas de Envío</span>
					    	{else}
								<span class="h6">Políticas de Devolución</span>
					    	{/if}
					    </a>
					  </h4>
					</div>
					<div id="collapse-{$element.id_reassurance}" class="panel-collapse collapse">
					  <div class="panel-body">
					  	<p>{$element.text}</p>
					  	<a href="https://dobledos.com/img/cms/Pol%C3%ADticas%20de%20Doble%20Dos%20.pdf" target="_blank" class="btn black-btn btn-primary">Ver Más</a>
					  </div>
					</div>
				</div>
			{/foreach}
		</div>
	</div>
{/if}