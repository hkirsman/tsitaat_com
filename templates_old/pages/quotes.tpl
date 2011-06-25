{extends file="layouts/default.tpl"}

{block name=mainContent}{strip}

{foreach item=r from=$quotes name=quotes} 
<div class="quote q">
	<div class="col1 lfloat">
		{if $section != "quotes-authors-%author%" &&
				$section != "quotes-authors-%author%-%page%" &&
				$section != "quotes-authors-%author%-%quote_id%"}
			{if strlen($r.author_name)==0}
				<p>{$r.waiting_author_name} <a class="add_author" href="javascript:void(0)">Lisa autor</a></p>
			{else}
				<p><a href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_authors_clean{/label}/{$r.url_friendly_author_name}"><b>{$r.author_name}{if $r.author_born_death}, {$r.author_born_death}{/if}</b></a></p>
				<p class="fs10">{$r.author_profession_parsed}</p>
			{/if}
		{/if}
		{if $section != "quotes-authors-%author%-%quote_id%" && isset($r.quotes_id)}<a class="quote" href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_authors_clean{/label}/{$r.url_friendly_author_name}/{$r.quotes_id}" rel="nofollow">{/if}{$r.quote}{if $section != "quotes-authors-%author%-%quote_id%" && isset($r.quotes_id)}</a>{/if}
		{if $r.source_parsed2}<p class="source">( {if $r.url_friendly_source_name}<a href="/{label}label_quotes_clean{/label}/{label}label_sources_clean{/label}/{$r.url_friendly_source_name_for_url}">{/if}{$r.source_parsed2}{if $r.url_friendly_source_name}</a>{/if} )</p>{/if}
	</div>
  <a class="col2 lfloat"  href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_authors_clean{/label}/{$r.url_friendly_author_name}" title="{$r.author_name|replace:'"':"'"}" rel="nofollow" >
	{if strlen($r.author_img.nice_name)==0}
	<img src="{$baseurl_static2}/img/noauthorimg.jpg" width="90" height="103" alt="" />
	{else}
	<img alt="" src="{$baseurl_static2}/cache/images/{$r.author_img.nice_name|replace:".jpg":"_90px.jpg"}" width="90" height="{math equation="floor(( x * (y / z ) ))" x=$r.author_img.height y=90 z=$r.author_img.width}" />
	{/if} 
  </a>
	{* .authorPhoto *}
	<div class="col3 lfloat">
		{if $admin}<span class="admin__edit_tags_{$r.quotes_id}">{/if}{label}label_tags{/label}{if $admin}</span>{/if}:&nbsp;
		{if $admin}<span class="admin__tags">{/if}{$r.tags_as_links}{if $admin}</span>{/if}<br/>
		{if $admin}<span class="admin__edit_category_{$r.quotes_id}">{/if}{label}label_categories{/label}{if $admin}</span>{/if}: {$r.category}<br/>
		{* Translations: none<br/>*}
		{if isset($r.rank)}
			{if $enable_voting}{label}label_vote{/label}: <a class="vote noUnderline" href="javascript:void(0);" onclick="vote_for(this, {$r.quotes_id})">+</a> (<span class="current_rank">{$r.rank}</span>) <a class="vote noUnderline" href="JavaScript:void(0);" onclick="vote_against(this, {$r.quotes_id})">-</a><br/>{/if}
	    <a class="share" href="javascript:void(0)" onclick="add_to_facebook({$r.quotes_id}, this);">{label}label_share_on_facebook{/label}</a>
		{/if}<br />
		{label}label_added_by{/label} <a rel="nofollow" href="/{$r.username}">{$r.username}</a>{*<br />
		<a class="add_to_favorites user_hannes q_id_11182" href="JavaScript:void(0)">Add to favorites</a><br />
		<a href="image_info_stalin.html" class="colorbox">Image info</a>*}
	</div>
</div>{* .quote *}

{/foreach}

{if $section == "quotes-authors-%author%-%quote_id%"}
<div class="like">
<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fdev.tsitaat.com%2Ftsitaadid%2Fautorid%2Ftoomas_hendrik_ilves%2F13977&amp;layout=standard&amp;show_faces=false&amp;width=450&amp;action=like&amp;colorscheme=light&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:35px;" allowTransparency="true"></iframe></div>

<h2>Kommentaarid</h2>

<form class="frm" action="/add_comment.php" method="post">
  <input type="hidden" name="user_id" value="{$user_id}" />
  <input type="hidden" name="quote_id" value="{$a_path.3}" />
  <input type="hidden" name="return" value="{$current_url}#commentlistEnd" />
  
  <div class="frmrow"><label class="textinput"><span class="frmcaption">Sinu nimi:</span><input {if $user_id!=1}disabled="disabled" {/if}type="text" name="username" value="{if $user_id!=1}{$username}{/if}" /></label></div>
  <div class="frmrow"><label class="textarea"><span class="frmcaption">Kommentaar:</span><textarea cols="50" rows="6" name="comment"></textarea></label></div>
  <div class="frmbuttons">
    <button type="submit" class="button1"><span>Lisa</span></button>
  </div>
</form>

<div class="commentlist">
  {foreach item=r from=$comments}
  <div class="comment">
    <div class="user">{if $r.user_id==1 && $r.not_logged_username==""}Anonüümne{elseif $r.user_id>1}<a href="/{$r.username_clean}">{$r.username}</a>{else}<span title="Registreerimata kasutaja">{$r.not_logged_username}</span>{/if}</div>
    <div class="content">{$r.comment_html}</div>
    <div class="date">
      {$r.datetime|date_format:"%e. %B %Y %H:%M:%S"}
    </div>
  </div>
  {/foreach}
  <a name="commentlistEnd"></a>
</div>

{/if}

{/strip}{/block}