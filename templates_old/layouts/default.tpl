{*{strip}*}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{$lang}" lang="{$lang}"  xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />{if !$robots_index}

    <meta name="robots" content="noindex" />
    {else}

    {/if}
    <meta name="keywords" content="{$keywords}" />
    <meta name="description" content="{$description}" />
    <link rel="stylesheet" type="text/css" href="{$baseurl_static}/img/_style_screen_{$locale}.css" media="screen, projection, print" title="" />
    <link rel="shortcut icon" type="image/ico" href="{$baseurl_static}/favicon.ico" />
    <title>{$title}</title>
    {if $smarty.server.HTTP_HOST != "dev.tsitaat.com" &&
     $user_id != 2 && $config_q.analytics && $smarty.server.HTTP_HOST != "tsitaat.eestibattle.net"}
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', '{$config_q.analytics}']);
      _gaq.push(
        ['_addOrganic', 'Neti', 'query'],
        ['_addOrganic', 'Yammy', 'q'],
        ['_addOrganic', 'www.ee', 'query'],
        ['_addOrganic', 'Delfi', 'q'],
        ['_addOrganic', 'maailm.com', 'tekst'],
        ['_addOrganic', '1188.ee', 'kw'],
        ['_addOrganic', '1182.ee', 'nimi'],
        ['_addOrganic', '1182.ee', 'msona'],
        ['_addOrganic', 'blog.tr.ee', 'q']
      );
      _gaq.push(['_trackPageview']);

      {literal}(function() {{/literal}
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>{/if}
  </head>
  <body>

  {*<script src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/en_US" type="text/javascript"></script>*}

    <div id="h">
    <a id="l" href="{$baseurl}"></a>
    <div id="s">{label}label_slogan{/label}</div>
{*
		<!--
    <div class="search">
      <form action="{$search_return_url}" id="cse-search-box">
        <div>
          <input type="hidden" name="cx" value="{$config_q.search.cx}" />
          <input type="hidden" name="cof" value="FORID:9" />
          <input type="hidden" name="ie" value="UTF-8" />
          <input type="text" name="q" size="31" class="text" />
          <input type="submit" name="sa" value="Search" />
        </div>
      </form>
    </div>
    -->
*}
		<ul id="n">
			{foreach item=r from=$menu name=menu} 
			{if strpos( $r.link, "http" ) === FALSE && strpos( $r.link, "javascript" ) === FALSE}
      <li><a href="{$baseurl}{$r.link}" {if $r.class}class="{$r.class}"{/if}>{$r.name}</a>
				{if $r.sub}
					<ul class="hidden">
						{foreach item=o from=$r.sub name=submenu} 
							{if strpos( $o.link, "http" ) === FALSE && strpos( $o.link, "javascript" ) === FALSE}
								<li><a href="{$baseurl}{$o.link}" {if $o.class}class="{$o.class}"{/if}>{$o.name}</a>
							{else}
								<li><a href="{$o.link}" {if $o.class}class="{$o.class}"{/if}>{$o.name}</a>
							{/if}
						{/foreach}
					</ul>
				{/if}
      {else}
      <li><a href="{$r.link}" {if $r.class}class="{$r.class}"{/if}>{$r.name}</a>
				{if $r.sub}
					<ul class="hidden">
						{foreach item=o from=$r.sub name=submenu} 
							{if strpos( $o.link, "http" ) === FALSE && strpos( $o.link, "javascript" ) === FALSE}
								<li><a href="{$baseurl}{$o.link}" {if $o.class}class="{$o.class}"{/if}>{$o.name}</a>
							{else}
								<li><a href="{$o.link}" {if $o.class}class="{$o.class}"{/if}>{$o.name}</a>
							{/if}
						{/foreach}
					</ul>
				{/if}
			{/if}
			</li>
			{/foreach}
		</ul>
	</div>{* #header *}

	<div id="c">
    
    {if $show_sidecontent}
    <div id="sc" class="lfloat">
			
			{if $amazon_product_link}
			<div class="amazon_product">
				<iframe src="{$amazon_product_link}&fc1=000000&IS2=1&lt1=_blank&m=amazon&lc1=0000FF&bc1=000000&bg1=FFFFFF&f=ifr" style="width:120px;height:240px;" scrolling="no" marginwidth="0" marginheight="0" frameborder="0"></iframe>
			</div>{* .amazon_product *}
			{/if}

			<ul class="i">
				<li class="title">&laquo; {label}label_tags{/label} &raquo;</li>
				{foreach item=r from=$tag_index}
				{if $r == "-"}
	  			<li><a href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_tags_clean{/label}/-/" class="noUnderline{if $r==utf8_substr($a_path.2,0,1) && $a_path.1=="teemad"} active{/if}">-</a></li>
				{else}
  				<li><a {if $r==utf8_substr($a_path.2,0,1) && $a_path.1=="teemad"}class="active" {/if}href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_tags_clean{/label}/{$r}/">{$r}</a></li>
				{/if}
				{/foreach}
			</ul>{* .index *}

			<ul class="i">
				<li class="title">&laquo; {label}label_authors{/label} &raquo;</li>
				{foreach item=r from=$author_index name=author_index}
				<li><a {if $r==utf8_substr($a_path.2,0,1) && $a_path.1=="autorid"}class="active" {/if}href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_authors_clean{/label}/{$r}/">{$r}</a></li>
				{/foreach}
			</ul>{* .index *}

      <div class="i">
        <div class="title">&laquo; {label}label_categories{/label} &raquo;</div>
        <select name="">
          <option value=""></option>
          {foreach item=r from=$category_index name=category_index}
          <option value="">{$r.name}</option>
          {/foreach}
        </select>
			</div>{* .authorIndex *}

      {if !$logged}
      <div id="login">
        <div class="title">&laquo; {label}label_login{/label} &raquo;</div>
        <form method="post" action="/foorum/ucp.php?mode=login">
          <div>
            <input type="hidden" value="{$returnAddress}" name="redirect" />
            <input type="hidden" value="{$returnAddress}" name="current_url" />
          </div>
          <div class="frmrow"><label class="textinputLogin"><span class="frmcaption">Kasutaja:</span><span class="input"><input type="text" value="" name="username" /></span></label></div> 
          <div class="frmrow"><label class="textinputLogin"><span class="frmcaption">Parool:</span><span class="input"><input type="password" value="" name="password" /></span></label></div> 
          <div class="frmrow">
            <input type="checkbox" name="autologin"/> <label for="autologin"></label>
          </div>
          <div class="buttonsLogin">
            <input type="submit" class="submit" value="Sign in" name="login"/>
          </div>
        </form>
      </div>
      {else}
      <div id="logimenu">
        <div class="title">&laquo; {label}label_loginmenu{/label} &raquo;</div>
        <div class="item"><a class="item" href="/{$username_clean}">{label}label_profile{/label}</a></div>
        <div class="item"><a class="item" href="">{label}label_favorite_quotes{/label}</a></div>
        <div class="item"><a class="item" href="">{label}label_favorite_sources{/label}</a></div>
        <div class="item"><a class="item" href="">{label}label_user_added_quotes{/label}</a></div>
        <div class="item"><a class="item" href="/foorum/ucp.php?mode=logout&sid={$session_id}">{label}label_log_out{/label}</a></div>
      </div>
      {/if}


        
      {*
      <div class="facebook">
        {if $config_q.locale == "en"}
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FQuoteBook24&amp;width=190&amp;colorscheme=light&amp;connections=9&amp;stream=true&amp;header=true&amp;height=787" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:787px;" allowTransparency="true"></iframe>
        {/if}

        {if $config_q.locale == "de"}
          <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FZitate&amp;width=190&amp;colorscheme=light&amp;connections=9&amp;stream=true&amp;header=true&amp;height=787" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:190px; height:787px;" allowTransparency="true"></iframe>
        {/if}
      </div>
      *}

{*

      <div class="paypal">
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
        <input type="hidden" name="cmd" value="_s-xclick" />
        <input type="hidden" name="hosted_button_id" value="XN66L8B7K82WN" />
        <input type="image" src="{$baseurl_static}/img/paypal/btn_donateCC_LG.png" name="submit" alt="PayPal - The safer, easier way to pay online!" />
        <img alt="" border="0" src="{$baseurl_static}/img/paypal/pixel.gif" width="1" height="1" />
        </form>
      </div>
<!--
      <div class="login">
        <h3>&laquo; Login &raquo;</h3>
        <form method="post" action="#">
        <div>
          <input type="hidden" value="http://www.tsitaat.com/" name="redirect"/>
          <input type="hidden" value="http://www.tsitaat.com/" name="current_url"/>
        </div>
        <div class="row">
          <label for="username">{$username}:</label>
          <input type="text" value="" name="username" id="username" class="text" />
        </div>
        <div class="row">
          <label for="password">{$password}:</label>
          <input type="password" name="password" id="password" class="text" />
        </div>
        <div class="row">
          <input type="checkbox" id="autologin" name="autologin"/> <label for="autologin">{$stay_signed_in}</label>
        </div>
        <div class="row">
          <input type="submit" class="submit" value="Sign in" name="login"/>
        </div>
        </form>

        <a class="rpxnow" onclick="return false;" href="https://quotebook-24.rpxnow.com/openid/v2/signin?token_url={php}
        echo urlencode('http://devel.quotebook24.com/rpx_auth'); 
      {/php}">Sign In with OpenID</a>
      </div>

      <div class="newHere">
        <h3>&laquo; {$new_here} &raquo;</h3>
        <a href="javascript:void(0)" class="createAnAccount"><img src="{$baseurl_static}/img/createAnAccount_{$locale}.png" alt="" /></a>
        <a href="javascript:void(0)" class="aboutUs">{$about_quotebook}</a>
      </div>

      <div class="recentUsers">
        <h3>&laquo; {$user_activity} &raquo;</h3>
        <ul>
          <li><a href="/hannes/">hannes</a></li>
          <li><a href="/raunce/">raunce</a></li>
          <li><a href="/GriNg0/">GriNg0</a></li>
          <li><a href="/Pisarake/">Pisarake</a></li>
          <li><a href="/eliisas/">eliisas</a></li>
          <li><a href="/Jyka/">Jyka</a></li>
          <li><a href="/annelimanniste/">annelimanniste</a></li>
          <li><a href="/radikaalne/">radikaalne</a></li>
          <li><a href="/oliver24/">oliver24</a></li>
          <li><a href="/maarjak6ue/">maarjak6ue</a></li>
          <li><a href="/Nielander/">Nielander</a></li>
          <li><a href="/jacinth/">jacinth</a></li>
          <li><a href="/siim1706/">siim1706</a></li>
          <li><a href="/lizka/">lizka</a></li>
          <li><a href="/airika32/">airika32</a></li>
          <li><a href="/PilgrimEST/">PilgrimEST</a></li>
          <li><a href="/usumees/">usumees</a></li>
          <li><a href="/M.K/">M.K</a></li>
          <li><a href="/elenkurvits/">elenkurvits</a></li>
          <li><a href="/trish/">trish</a></li>
          <li><a href="/Liisuliisi/">Liisuliisi</a></li>
          <li><a href="/bluespider/">bluespider</a></li>
          <li><a href="/Sillerdis/">Sillerdis</a></li>
          <li><a href="/Armastyd/">Armastyd</a></li>
          <li><a href="/karukatz/">karukatz</a></li>
        </ul>
      </div>
			-->*}

		</div>{* .sideContent *}
    {/if}

		{*<div class="mainContent{if !$show_sidecontent} mainContent_w940{/if}">*}
    <div id="mc" class="lfloat2">
    
      <h1>{$h1}</h1>
			<span class="h1">{if $section == "quotes-authors-%author%" ||
				$section == "quotes-authors-%author%-%page%" ||
				$section == "quotes-authors-%author%-%quote_id%"}<a href="{$baseurl}/{$quotes2}/{$authors2}/{$a_path[2]}">{/if}{$fake_h1}{if $section == "quotes-authors-%author%" ||
				$section == "quotes-authors-%author%-%page%" ||
				$section == "quotes-authors-%author%-%quote_id%"}</a>{/if}{if strlen($profession)>0}<span>{$profession}</span>{/if}</span>

      {block name=mainContent}default body{/block}
      {$content}

			{if $navi}
			<div class="navi">
				
				{foreach item=r from=$navi name=navi}
          {if $r.previous_page}
            <a class="prev" href="{$r.link}">{$label_previous_page}</a>
          {elseif $r.next_page}
            <a class="next" href="{$r.link}">{$label_next_page}</a>
          {elseif $r.selected}
          <a href="{$r.link}" class="selected">{$r.caption}</a>
          {else}
          <a href="{$r.link}">{$r.caption}</a>
          {/if}
				{/foreach}
				
			</div>
			{/if}

		</div>{* .mainContent *}

	</div>{* .content *}

  <div class="clear"><!-- --></div>

	<div id="f">
		<p style="float: none;">{$for_nerds} </p>
		<p style="float: none;">{$page_load_took}</p>
		<p>
		<a href="http://validator.w3.org/check?uri=referer"><img height="31" width="88" alt="Valid XHTML 1.0 Strict" src="{$baseurl_static}/img/valid-xhtml10-blue.png"/></a>
		</p>
	</div>{* #footer *}

	{if $admin}
	<div id="change_category" class="hidden">
		<div class="change_category">
			<div>
				<select>
					{foreach item=r from=$categories name=categories} 
					<option value="{$r.id}">{$r.name}</option>
					{/foreach}
				</select>
			</div>
			<div class="buttons">
				<button>Salvesta</button>
			</div>
		</div>
	</div>
	{/if}
  
  {if $user_id==2 || ( $user_type == 0 && $group_id==2)}
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  {/if}

	{*
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	<script type="text/javascript" src="{$baseurl_static}/js/locale_{$lang}.js"></script>
	<script type="text/javascript" src="{$baseurl_static}/js/jquery.colorbox-min.js"></script>
	<script type="text/javascript" src="{$baseurl_static}/js/general.js"></script>
	<script type="text/javascript" src="{$baseurl_static}/js/php_javascript.js"></script>
  {if $admin}
  <script type="text/javascript" src="{$baseurl_static}/js/admin.js"></script>
  {/if}    
    {if $config_q.locale == "en" || $config_q.locale == "de"}
    <script src="{$baseurl_static}/js/hyphenator/Hyphenator.js" type="text/javascript"></script>
    {/if}
    {if $config_q.locale == "en"}
      <script src="{$baseurl_static}/js/hyphenator/patterns/en-gb.js" type="text/javascript"></script>
    {/if}
    {if $config_q.locale == "de"}
      <script src="{$baseurl_static}/js/hyphenator/patterns/de.js" type="text/javascript"></script>
    {/if}
    {if $config_q.locale != "et"}
    <script type="text/javascript">
      {literal} 
      Hyphenator.config({
      remoteloading : false,
      displaytogglebox : true,
      minwordlength : 4
      });
      Hyphenator.run();
      {/literal} 
    </script> 
    {/if}
    *}
	</body>
</html>{*{/strip}*}