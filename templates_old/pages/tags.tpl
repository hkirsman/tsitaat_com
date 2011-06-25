{extends file="layouts/default.tpl"}

{block name=mainContent}

<div class="taglist">
{foreach item=r from=$taglist name=taglist}
  {if $smarty.foreach.taglist.first}
    <div class="col col01">
  {/if}
    <a href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_tags_clean{/label}/{$r.tag_for_url}">{$r.tag_for_user}</a><br />
  {if floor($smarty.foreach.taglist.total/2) == $smarty.foreach.taglist.index}
    </div>
    <div class="col col01">
  {/if}
  {if $smarty.foreach.taglist.last}
    </div>
  {/if}
{/foreach}
</div>

{/block}