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
  {literal}
 <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '848478308683984');
fbq('track', 'PageView');
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=848478308683984&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->
{/literal}

 {literal}
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
 var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
 (function(){
 var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
 s1.async=true;
 s1.src='https://embed.tawk.to/5dc48eabd96992700fc663be/default';
 s1.charset='UTF-8';
 s1.setAttribute('crossorigin','*');
 s0.parentNode.insertBefore(s1,s0);
 })();
 </script>
 <!--End of Tawk.to Script-->

{/literal}
{block name='header_banner'}
  <div class="header-banner">

  </div>
{/block}

<!--{block name='header_copy'}
<div class="top-bar-copy">
  <p>ENVÍOS NACIONALES GRATIS POR COMPRAS SUPERIORES A $300.000 PESOS COP</p>
</div>
{/block}-->

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
      {block name='header_nav'}
        <div class="header-nav">
          {hook h='displayNav2'}
        </div>
      {/block}
    </nav>
  {/block}

  <div class="search-btn">
    <i class="fas fa-search"></i>
  </div>

  {block name='account_user'}
    {hook h='displayNavFullWidth'}
  {/block}

</div>


{block name='search'}
  <div class="main-search">
    {hook h='displaySearch'}
  </div>
{/block}
