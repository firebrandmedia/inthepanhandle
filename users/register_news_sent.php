<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create an InThePanhandle.com User Account | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
</head>
<body id="more">
{embed="embeds/iphone"}
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
<div id="advertising"><div id="ads">

</div></div>
<div id="body_content">
<div id="edit_user_profile">
<h1>Your news has been sent. Thanks!</h1>
<img src="http://www.inthepanhandle.com/images/ui/citizen_journalism-fancy-hat.png" align="right" />
<p>We believe in citizen journalism. We believe that information should be democratized.  We believe that everyone needs a voice.  We believe we can help.</p>
<p>You've taken the time to send us news, why not create an Author Account and get direct access to add your news, opinions, press releases and events to our news stream? The registration process is simple, free and you can begin adding news and images immediately.</p>
<p>Think it's too complicated? We've got an ever expanding tutorial library - over on the right side of the page, or on our <a href="{path='SITE_INDEX'}/support/tutorials/" title="InThePanhandle.com Video Tutorials">official tutorial page</a> - where you can watch video demonstrations showing how to add your information to the site.</p>
{exp:user:register form_name="registration" return="/users/registration_successful" required="accept_terms" group_id="8"}
<p>* Indicates a required field</p>
<input type='hidden' name='mailinglist_subscribe' value='1' />
<p><label for="username">Username / Email:*</label> <input class="txt" id="username" name="username" size="20" type="text" /></p>
<p><label for="password">Password:*</label> <input class="txt" id="password" name="password" size="20" type="password" /></p>
<p><label for="password_confirm">Confirm Password:*</label> <input class="txt" id="password_confirm" name="password_confirm" size="20" type="password" /></p>
<p><label for="first_name">First Name:*</label> <input class="txt" id="first_name" name="first_name" size="20" type="text" /></p>
<p><label for="last_name">Last Name:*</label> <input class="txt" id="last_name" name="last_name" size="20" type="text" /></p>
<p><label for="captcha">Anti-Spam text:</label>&nbsp;{captcha}</p>
<p><label for="captcha">Input the text that you see above:</label>&nbsp;<input type="text" name="captcha" value="" /></p>
<p><label for="terms"><a href="{path='SITE_INDEX'}/advertise/form_privacy_policy?height=500&width=400" class="thickbox" title="InThePanhandle.com Terms of Service"">Read over our privacy policy / terms of service</a></label><input type="checkbox" name="accept_terms" value="y"  /> Accept Terms?</p>
<input class="btn" type="submit" value="Create User Account" />
{if no_results}<p>You are currently logged in and cannot create another membership account.</p>{/if}
{/exp:user:register}
</div>
<div id="related_content">
<div class="related_content_box">
<h3>Help: Tutorial Library</h3>
<ul>
{exp:weblog:entries weblog="video_tutorials" orderby="date" sort="desc" limit="25" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=support/tutorial_details}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
</div>
</div>
<div class="clear_both"></div>
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
