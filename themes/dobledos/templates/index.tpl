{**
 * 2007-2018 PrestaShop
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
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
{extends file='page.tpl'}



    {block name='page_content_container'}
    <section id="counter">
      <div class="counterContainer"style="background-image: url(https://dobledos.com/img/cms/Asset%203_1.png);">
        <div id="countdownContainer" class="countdownContainer">
          <div>
            <img src="https://dobledos.com/img/cms/Asset 4.png" alt="">
            <div class="info-title">
              <hr>
              <h2>BLACK FRIDAY</h2>
              <hr>
            </div>
            <div class="info-numeros">
              <div class="">
                <h3 id="days">29</h3>
                <h2>DÍAS</h2>
              </div>
              <div class="">
                <h3 id="hours">11</h3>
                <h2>HORAS</h2>
              </div>
              <div class="">
                <h3 id="minutes">13</h3>
                <h2>MIN</h2>
              </div>
              <div class="">
                <h3 id="seconds">27</h3>
                <h2>SEG</h2>
              </div>

            </div>
            <div class="esperalo">
              <h3>¡ESPÉRALO!</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script language="JavaScript" type="text/javascript">
   {literal}
   function countdown(){
   				var now = new Date();
   				var eventDate = new Date(2019, 10, 29);

   				var currentTiime = now.getTime();
   				var eventTime = eventDate.getTime();

   				var remTime = eventTime - currentTiime;

   				if(remTime <= 0) {
   					document.getElementById('countdownContainer').style.display = 'none';
   					document.getElementById('greetingMsg').style.display = '';
   					return;
   				}
          var puntos = ":";
   				var s = Math.floor(remTime / 1000);
   				var m = Math.floor(s / 60);
   				var h = Math.floor(m / 60);
   				var d = Math.floor(h / 24);

   				h %= 24;
   				m %= 60;
   				s %= 60;

   				h = (h < 10) ? "0" + h : h;
   				m = (m < 10) ? "0" + m : m;
   				s = (s < 10) ? "0" + s : s;

   				document.getElementById("days").textContent = d+ puntos;
   				document.getElementById("days").innerText = d+ puntos;

   				document.getElementById("hours").textContent = h+ puntos;
   				document.getElementById("minutes").textContent = m+ puntos;
   				document.getElementById("seconds").textContent = s;

   				setTimeout(countdown, 1000);
   			}

   			countdown();
   {/literal}
</script>

      <section id="content" class="page-home">
        {block name='page_content_top'}{/block}

        {block name='page_content'}
          {block name='hook_home'}
            {$HOOK_HOME nofilter}
          {/block}
        {/block}
      </section>
    {/block}
