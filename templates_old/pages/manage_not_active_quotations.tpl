{extends file="layouts/default.tpl"}

{block name=mainContent}

<form class="frm" action="/?c=admin&action=manage_not_active_quotations" method="post">
  <input type="text" name="id" value="{$id}" class="hidden" />
  <input type="text" name="q_id" value="{$q_id}" class="hidden" />
  <input type="text" name="author_id" value="{$author_id}" class="hidden" />
  <table>
    <colgroup></colgroup>
    <colgroup></colgroup>
    <tbody>
      <tr>
        <td class="caption"><label>Author:</label></td>
        <td>{$author_name} ( {$author_born_death} )</td>
      </tr>
      <tr>
        <td class="caption"><label>author_name_freeform_et:</label></td>
        <td><input type="text" name="author_name_freeform_et" value="{$author_name_freeform_et}" class="text selectonclick" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_name_freeform_en:</label></td>
        <td><input type="text" name="author_name_freeform_en" value="{$author_name_freeform_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_name_freeform_de:</label></td>
        <td><input type="text" name="author_name_freeform_de" value="{$author_name_freeform_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_firstname_et:</label></td>
        <td><input type="text" name="author_firstname_et" value="{$author_firstname_et}" class="text selectonclick" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_firstname_en:</label></td>
        <td><input type="text" name="author_firstname_en" value="{$author_firstname_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_firstname_de:</label></td>
        <td><input type="text" name="author_firstname_de" value="{$author_firstname_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_midname_et:</label></td>
        <td><input type="text" name="author_midname_et" value="{$author_midname_et}" class="text selectonclick" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_midname_en:</label></td>
        <td><input type="text" name="author_midname_en" value="{$author_midname_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_midname_de:</label></td>
        <td><input type="text" name="author_midname_de" value="{$author_midname_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_lastname_et:</label></td>
        <td><input type="text" name="author_lastname_et" value="{$author_lastname_et}" class="text selectonclick" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_lastname_en:</label></td>
        <td><input type="text" name="author_lastname_en" value="{$author_lastname_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_lastname_de:</label></td>
        <td><input type="text" name="author_lastname_de" value="{$author_lastname_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_profession_et:</label></td>
        <td><input type="text" name="author_profession_et" value="{$author_profession_et}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_profession_en:</label></td>
        <td><input type="text" name="author_profession_en" value="{$author_profession_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_profession_de:</label></td>
        <td><input type="text" name="author_profession_de" value="{$author_profession_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_nationality:</label></td>
        <td><input type="text" name="author_nationality" value="{$author_nationality}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>url_friendly_author_name_et:</label></td>
        <td><input type="text" name="url_friendly_author_name_et" value="{$url_friendly_author_name_et}" class="text selectonclick" /></td>
      </tr>
      <tr>
        <td class="caption"><label>url_friendly_author_name_en:</label></td>
        <td><input type="text" name="url_friendly_author_name_en" value="{$url_friendly_author_name_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>url_friendly_author_name_de:</label></td>
        <td><input type="text" name="url_friendly_author_name_de" value="{$url_friendly_author_name_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_wiki_url_et:</label></td>
        <td><input type="text" name="author_wiki_url_et" value="{$author_wiki_url_et}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_wiki_url_en:</label></td>
        <td><input type="text" name="author_wiki_url_en" value="{$author_wiki_url_en}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>author_wiki_url_de:</label></td>
        <td><input type="text" name="author_wiki_url_de" value="{$author_wiki_url_de}" class="text" /></td>
      </tr>
      <tr>
        <td class="caption"><label>Quote:</label></td>
        <td><textarea cols="50" rows="6" name="quote">{$quote}</textarea></td>
      </tr>
      <tr>
        <td class="caption"><label>Category:</label></td>
        <td>
          <select name="category">
            {foreach item=r from=$categories name=categories}
              {if $category_id == $r.id}
              <option value="{$r.id}" selected>{$r.name}</option>
              {else}
              <option value="{$r.id}">{$r.name}</option>
              {/if}
            {/foreach}
          </select>
        </td>
      </tr>
      <tr>
        <td class="caption"><label>Tags:</label></td>
        <td><input type="text" class="text" value="{$tag}" name="tag" /></td>
      </tr>
      <tr>
        <td class="caption"><label>Source name:</label></td>
        <td><input type="text" class="text" value="{$source_title_original}" /></td>
      </tr>
      <tr>
        <td></td>
        <td>
        <div class="buttons">
          <button type="submit" name="manage_not_active_quotations">Activate and add new</button>
        </div>
        </td>
      </tr>
    </tbody>
  </table>
</form>

{/block}