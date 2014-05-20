<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Registration Successful | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
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
<div id="advertising"><div id="ads">

</div></div>
<div id="body_content">
<div id="edit_user_profile">
{if logged_in}
<h1>Success! You now have a User Account</h1>
<p>Now that you have a user account you can start adding news articles, press releases, upcoming events, etc. to InThePanhandle.com.  To help you get started, we have created a series of video tutorials.  (See the help library to the right on this page.) </p>
<p>Before you do that, you may want to edit your profile by adding an image (avatar), location, short bio, occupation, etc.  The avatar dimensions need to be 100px x 100px and less than 50K.  Need help adding your avatar?  <a href="{path=''support/help_request"}?height=400&width=380" class="thickbox" title="Get Help!"">Let us know, we can help</a></p>
{exp:user:edit return="users/edit_profile"}
<div id="avatar_image">
<p>Did you know that adding a profile image increases click through rates by 78%? Err, we just made that up, but we're pretty sure that people would like to see your image or business logo as opposed to a blank white space. And, there is some correlation between avatar usage and brand awareness. <b><a href="{path=''users/edit_avatar"}?height=220&width=400" class="thickbox" title="Edit Your Profile Image"">How about adding or editing your profile image (avatar).</a></b></p>
{if avatar_url != ''}
<img class="avatar" src="{avatar_url}{avatar_filename}" />
{/if}

{if avatar_url == ''}
<img class="avatar" src="http://www.inthepanhandle.com/images/ui/background_avatar.png" />
{/if}
<div class="clear_both"></div>
</div>
<p class="instructions">Hey there {username}, to edit your profile, simply edit the fields below, input your current password and click the Submit Profile Changes button.</p>
<p><label for="email">Email:</label> <input class="txt" name="email" value="{email}" /></p>
<p><label for="username">Username:</label> <input class="txt" name="username" value="{username}" /></p>
<p><label for="screen_name">Screen Name:</label> <input class="txt" name="screen_name" value="{screen_name}" /></p>
<p><label for="url">Website:</label> <input class="txt" name="url" value="{url}" /></p>
<p><label for="bio">Bio:</label> <textarea name="bio" class="txt" cols="46" rows="10" >{bio}</textarea></p>
<p><label for="location">Location:</label> <input class="txt" name="location" value="{location}" /></p>
<p><label for="occupation">Occupation:</label> <input class="txt" name="occupation" value="{occupation}" /></p>
<p><label for="password">Current Password:</label> <input class="txt" type="password" name="current_password" /></p>
<p><label for="password">Create a New Password?:</label> <input class="txt" type="password" name="password" /></p>
<p><label for="password">Password Confirm:</label> <input class="txt" type="password" name="password_confirm" /></p>
<p><label for="accept_user_email">Join ITP Email List:</label> <input type="checkbox" name="accept_user_email" value="y" {if accept_user_email == "y"}checked="checked"{/if} /></p>
<p><input type="submit" class="btn" value="Submit Profile Changes" /></p>
{/exp:user:edit}
{/if}
</div>
{if logged_out}
<h1>Who goes there? Sorry, you have to be logged in to access your profile.</h1>
<p>To edit your profile, please <a href="{path=''users/login"}?height=220&width=400" class="thickbox" title="InThePanhandle.com Account Log-in"">log-in</a>.</p>
{/if}
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
