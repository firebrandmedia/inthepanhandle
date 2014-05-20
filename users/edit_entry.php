{exp:weblog:entry_form weblog="default_site" return="site/index" preview="site/entry"}

{preview}
<h1>{title}</h1>

{display_custom_fields}

{/preview}


<table>
<tr>
<td>

<p>Title<br />
<input type="text" name="title" id="title" value="{title}" size="50" maxlength="100" onkeyup="liveUrlTitle();" /></p>

<p>URL Title<br />
<input type="text" name="url_title" id='url_title' value="{url_title}" maxlength="75" size="50" /></p>

{formatting_buttons}

<p><a href="{upload_url}" onclick="window.open(this.href, '_blank', 'width=400,height=600');return false;" onkeypress="this.onclick()">File Upload</a>

<a href="{smileys_url}" onclick="window.open(this.href, '_blank', 'width=600,height=440');return false;" onkeypress="this.onclick()">Smileys</a></p>

{custom_fields}
{if required}* {/if}{field_label}<br />
{field_instructions}
{if textarea}
<textarea id="{field_name}" name="{field_name}" dir="{text_direction}" cols="50" rows="{rows}" onclick="setFieldName(this.name)">{field_data}</textarea>
{/if}

{if textinput}
<input type="text" dir="{text_direction}" id="{field_name}" name="{field_name}" value="{field_data}" maxlength="{maxlength}" size="50" onclick="setFieldName(this.name)" />
{/if}

{if pulldown}
<select id="{field_name}" name="{field_name}">
{options}<option value="{option_value}"{selected}>{option_name}</option>{/options}
</select>
{/if}

{if date}
<input type="text" id="{field_name}" name="{field_name}" value="{field_data}" maxlength="{maxlength}" size="50" onclick="setFieldName(this.name)" />
{/if}

{if relationship}
<select id="{field_name}" name="{field_name}">
{options}<option value="{option_value}"{selected}>{option_name}</option>{/options}
</select>
{/if}
{/custom_fields}

<p>Trackback URLs<br />
<textarea name="trackback_urls" cols="50" rows="5">{trackback_urls}</textarea> </p>

</td>
<td valign="top">

<input type="submit" name="submit" value="Submit" />
<input type="submit" name="preview" value="Preview" />

{status_menu}
<p>Status<br />
<select name="status">
{select_options}
</select>
</p>
{/status_menu}

<p>Date <br />
<input type="text" name="entry_date" value="{entry_date}" maxlength="23" size="25" /></p>

<p>Expiration Date <br />
<input type="text" name="expiration_date" value="{expiration_date}" maxlength="23" size="25" /></p>

<p>Comment Expiration Date <br />
<input type="text" name="comment_expiration_date" value="{comment_expiration_date}" maxlength="23" size="25" /></p>

<p><input type="checkbox" name="sticky" value="y" {sticky} /> Make Entry Sticky</p>
<p><input type="checkbox" name="allow_comments" value="y" {allow_comments} /> Allow Comments</p>
<p><input type="checkbox" name="allow_trackbacks" value="y" {allow_trackbacks} /> Allow Trackbacks</p>
<p><input type='checkbox' name='dst_enabled' value='y' {dst_enabled} />DST Active on Date of Entry</p>

{ping_servers}
<p>Ping Servers<br />
{ping_row}
<input type="checkbox" name="ping[]" value="{ping_value}" {ping_checked} /> {ping_server_name}<br />
{/ping_row}
</p>
{/ping_servers}

{category_menu}
<p>Categories<br />
<select name="category[]" size="4" multiple="multiple">
{select_options}
</select>
</p>
{/category_menu}

</td>
</tr>
</table>

{/exp:weblog:entry_form}
