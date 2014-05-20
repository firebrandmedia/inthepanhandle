<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Advanced Search | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
<script type='text/javascript' src='/js/lg_polls.js'></script>
</head>
<body id="more">
{search}
<div id="content">
<div id="header">
<div id="header_content">
{embed="embeds/logo"}
{embed="embeds/navigation_primary"}
<div class="clear_both"></div>
</div>
</div>
<div id="announcements">
<div id="announcements_content">
{embed="embeds/welcome_login"}
{embed="embeds/weather"}
</div>
</div>
<div id="body_content_background">
<div id="advertising">
<div id="ads">

</div>
</div>
<div id="body_content">
<div id="search_results_page">
<h1>Advanced Search…When a regular search just won't cut it!</h1>
<!--Begin Advanced Search-->
{exp:search:advanced_form result_page="search/results"}

<fieldset class="fieldset">
<legend>What: {lang:search_by_keyword}</legend>
<div class="search_area">
<input type="text" class="input" maxlength="100" size="40" name="keywords" />
<select name="search_in">
<option value="titles" selected="selected">{lang:search_in_titles}</option>
<option value="entries" selected="selected">{lang:search_in_entries}</option>
<option value="everywhere" >{lang:search_everywhere}</option>
</select>

<select name="where">
<option value="exact" selected="selected">{lang:exact_phrase_match}</option>
<option value="any">{lang:search_any_words}</option>
<option value="all" >{lang:search_all_words}</option>
<option value="word" >{lang:search_exact_word}</option>
</select>
</div>
<div class="help"><b>Search terms.</b>  You know how these work.  Type the word you are looking for.</div>
<div class="clear_both"></div>
</fieldset>


<fieldset class="fieldset">
<legend>Who: {lang:search_by_member_name}</legend>
<div class="search_area">
<input type="text" class="input" maxlength="100" size="40" name="member_name" />
<input type="checkbox" class="checkbox" name="exact_match" value="y" /> {lang:exact_name_match}
</div>
<div class="help"><b>Member Name:</b> Looking for something by a particular member or author?  Type their name here.</div>
<div class="clear_both"></div>
</fieldset>



<fieldset class="fieldset">
<legend>Where: {lang:weblogs}</legend>
<div class="search_area">

<select id="weblog_id" name='weblog_id[]' class='multiselect' size='12' multiple='multiple' onchange='changemenu(this.selectedIndex);'>
{weblog_names}
</select>

<select name='cat_id[]' size='12' class='multiselect' multiple='multiple'>
<option value='all' selected="selected">{lang:any_category}</option>
</select>
</div>
<div class="help"><p><b>Weblogs & Categories:</b> Every section of the site is a 'weblog' and within some of those weblogs, there are categories & sub-categories. The business directory is a good example.  Within the 'Business Directory' weblog, you have various categories and subcategories to help refine your search.</p><p>By default, the search is done in all weblogs and all categories.</p></div>
<div class="clear_both"></div>
</fieldset>

<fieldset class="fieldset">

<legend>When: {lang:search_entries_from}</legend>
<div class="search_area">
<select name="date" style="width:150px">
<option value="0" selected="selected">{lang:any_date}</option>
<option value="1" >{lang:today_and}</option>
<option value="7" >{lang:this_week_and}</option>
<option value="30" >{lang:one_month_ago_and}</option>
<option value="90" >{lang:three_months_ago_and}</option>
<option value="180" >{lang:six_months_ago_and}</option>
<option value="365" >{lang:one_year_ago_and}</option>
</select>

<input type='radio' name='date_order' value='newer' class='radio' checked="checked" />&nbsp;{lang:newer}
<input type='radio' name='date_order' value='older' class='radio' />&nbsp;{lang:older}
</div>
<div class="help"><p><b>When:</b> Here you can set a timeframe for your search.  Select the timeframe in the drop-down menu and then select if the search should be done on entries that are newer or older than that timeframe.</p></div>
<div class="clear_both"></div>
</fieldset>

<fieldset class="fieldset">
<legend>{lang:sort_results_by}</legend>
<div class="search_area">
<select name="orderby">
<option value="date" >{lang:date}</option>
<option value="title" >{lang:title}</option>
<option value="most_comments" >{lang:most_comments}</option>
<option value="recent_comment" >{lang:recent_comment}</option>
</select>

<input type='radio' name='sort_order' class="radio" value='desc' checked="checked" /> {lang:descending}
<input type='radio' name='sort_order' class="radio" value='asc' /> {lang:ascending}
</div>
<div class="help"><p><b>Sort Results:</b> Want to view results in a particular order?  Here you go.  Sort to your heart's delight.</p></div>
<div class="clear_both"></div>
</fieldset>
<fieldset class="fieldset">
<legend>Review</legend>
<div class="search_area">
<p>Ready to search?  Have you finished customizing your search to achieve the most accurate results known to man?</p>
</div>
<div class="help"><p><b>Review:</b> Nothing to explain here.  So why did we type this?</p></div>
<div class="clear_both"></div>
</fieldset>
<input type='submit' value='Let the fun begin! Search.' class=submit />
{/exp:search:advanced_form}
<!--End Advanced Search-->
</div>
</div>
<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both"}
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
{embed="embeds/footer"}
