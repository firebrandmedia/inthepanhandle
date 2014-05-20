<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{lang}" lang="{lang}">

<head>
<title>{lang:search}</title>

<meta http-equiv="content-type" content="text/html; charset={charset}" />

<link rel='stylesheet' type='text/css' media='all' href='{stylesheet=search/search_css}' />
<style type='text/css' media='screen'>@import "{stylesheet=search/search_css}";</style>

</head>
<body>

<div id='pageheader'>
<div class="heading">{lang:search_engine}</div>
</div>

<div id="content">

<div class='breadcrumb'>
<span class="defaultBold">&nbsp; <a href="{homepage}">{site_name}</a>&nbsp;&#8250;&nbsp;&nbsp;{lang:search}</span>
</div>

<div class='outerBorder'>
<div class='tablePad'>

{exp:search:advanced_form result_page="search/results" cat_style="nested"}

<table cellpadding='4' cellspacing='6' border='0' width='100%'>
<tr>
<td width="50%">

<fieldset class="fieldset">
<legend>{lang:search_by_keyword}</legend>

<input type="text" class="input" maxlength="100" size="40" name="keywords" style="width:100%;" />

<div class="default">
<select name="search_in">
<option value="titles" selected="selected">{lang:search_in_titles}</option>
<option value="entries">{lang:search_in_entries}</option>
<option value="everywhere" >{lang:search_everywhere}</option>
</select>

</div>

<div class="default">
<select name="where">
<option value="exact" selected="selected">{lang:exact_phrase_match}</option>
<option value="any">{lang:search_any_words}</option>
<option value="all" >{lang:search_all_words}</option>
<option value="word" >{lang:search_exact_word}</option>
</select>
</div>

</fieldset>

<div class="default"><br /></div>

<table cellpadding='0' cellspacing='0' border='0'>
<tr>
<td valign="top">

<div class="defaultBold">{lang:weblogs}</div>

<select id="weblog_id" name='weblog_id[]' class='multiselect' size='12' multiple='multiple' onchange='changemenu(this.selectedIndex);'>
{weblog_names}
</select>

</td>
<td valign="top" width="16">&nbsp;</td>
<td valign="top">

<div class="defaultBold">{lang:categories}</div>

<select name='cat_id[]' size='12'  class='multiselect' multiple='multiple'>
<option value='all' selected="selected">{lang:any_category}</option>
</select>

</td>
</tr>
</table>



</td><td width="50%" valign="top">


<fieldset class="fieldset">
<legend>{lang:search_by_member_name}</legend>

<input type="text" class="input" maxlength="100" size="40" name="member_name" style="width:100%;" />
<div class="default"><input type="checkbox" class="checkbox" name="exact_match" value="y"  /> {lang:exact_name_match}</div>

</fieldset>

<div class="default"><br /></div>


<fieldset class="fieldset">
<legend>{lang:search_entries_from}</legend>

<select name="date" style="width:150px">
<option value="0" selected="selected">{lang:any_date}</option>
<option value="1" >{lang:today_and}</option>
<option value="7" >{lang:this_week_and}</option>
<option value="30" >{lang:one_month_ago_and}</option>
<option value="90" >{lang:three_months_ago_and}</option>
<option value="180" >{lang:six_months_ago_and}</option>
<option value="365" >{lang:one_year_ago_and}</option>
</select>

<div class="default">
<input type='radio' name='date_order' value='newer' class='radio' checked="checked" />&nbsp;{lang:newer}
<input type='radio' name='date_order' value='older' class='radio' />&nbsp;{lang:older}
</div>

</fieldset>

<div class="default"><br /></div>

<fieldset class="fieldset">
<legend>{lang:sort_results_by}</legend>

<select name="orderby">
<option value="date" >{lang:date}</option>
<option value="title" >{lang:title}</option>
<option value="most_comments" >{lang:most_comments}</option>
<option value="recent_comment" >{lang:recent_comment}</option>
</select>

<div class="default">
<input type='radio' name='sort_order' class="radio" value='desc' checked="checked" /> {lang:descending}
<input type='radio' name='sort_order' class="radio" value='asc' /> {lang:ascending}
</div>
</fieldset>

</td>
</tr>
</table>


<div class='searchSubmit'>

<input type='submit' value='Search' class='submit' />

</div>

{/exp:search:advanced_form}

<div class='copyright'><a href="http://expressionengine.com/">Powered by ExpressionEngine</a></div>


</div>
</div>
</div>

</body>
</html>
