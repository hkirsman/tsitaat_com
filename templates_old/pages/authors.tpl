{extends file="layouts/default.tpl"}

{block name=mainContent}

<div class="authorlist">
{foreach item=r from=$authors_list name=authors_list}
  {if $smarty.foreach.authors_list.first}
    <div class="col">
  {/if}
    <a href="{$baseurl}/{label}label_quotes_clean{/label}/{label}label_authors_clean{/label}/{$r.url_friendly_author_name}">{$r.author_name}</a> {if $r.author_born_death}({$r.author_born_death}){/if}<br />
  {if $smarty.foreach.authors_list.last}
    </div>
  {/if}
{/foreach}
</div>

{/block}