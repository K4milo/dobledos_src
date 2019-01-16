{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{block name='header_banner'}
  <div class="header-banner">
    
  </div>
{/block}

{block name='header_copy'}
<div class="top-bar-copy">
  <p>ENVÍOS NACIONALES GRATIS POR COMPRAS SUPERIORES A $200.000 PESOS COP</p>
</div>
{/block}

<div class="main-navigation">

  {block name='header_logo'}
    <a class="logo" href="{$urls.base_url}" title="{$shop.name}">
      <img src="{$shop.logo}" alt="{$shop.name}">
    </a>
  {/block}

  {block name='nav_top'}
    <button class="mobile-button">
      <span class="bar-1"></span>
      <span class="bar-2"></span>
      <span class="bar-3"></span>
    </button>

    <nav class="navigation">
      {hook h='displayTop'}
    </nav>
  {/block}

  <div class="search-btn">
    <i class="fas fa-search"></i>
  </div>

  {block name='account_user'}
    {hook h='displayNavFullWidth'}
  {/block}



  {block name='header_nav'}
    <div class="header-nav">
      {hook h='displayNav2'}
    </div>
  {/block}

</div>

{block name='search'}
  <div class="main-search">
    {hook h='displaySearch'}
  </div>
{/block}

