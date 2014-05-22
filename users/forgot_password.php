<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Forgot Your InThePanhandle.com Password? | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
</head>
<body id="more">
<!-- Search Global Variable -->
    {if logged_in && member_group == "1"}
    <div style="position: absolute; top: 0; left: 0; position: fixed; background-color: #000; color: #fff; font-size: 9px; padding: 5px;">
        {elapsed_time} seconds / {total_queries} queries
    </div>
{/if}
<div id="search_box">
<div id="search">
{exp:search:simple_form weblog="news|bus_dir|event_cal|coupons|products|restaurant_menus" show_future_entries="yes" show_expired="yes" results="10" search_in="everywhere" where="all" no_result_page="search/noresults"}
<p><input class="txt" type="text" name="keywords" id="keywords" onfocus="if
(this.value==this.defaultValue) this.value='';" value="I'm looking for…" size="18" maxlength="100" /> <input type="image" src="/images/ui/search_btn.gif" align="right" value="Search" /></p>
{/exp:search:simple_form}
</div>
</div>
</div>
<!-- Search Global Variable -->
<div id="content">
<div id="header">
<div id="header_content">
<!--Logo Global Variable-->
    <div id="logo"><a href="{path='SITE_INDEX'}/" title="InThePanhandle.com is your Eastern WV Community Website."><img border="0" src="/images/ui/logo_header.jpg" alt="inthepanhandle.com - The eastern panhandle, West Virginia community website."/></a></div>
<!--Logo Global Variable-->
<!--Navigation Global Variable-->
    <div id="navigation">
<div id="nav">
<ul>
<li id="t-home"><a href="{path='SITE_INDEX'}/" title="The InThePanhandle.com Homepage">Home</a></li>
<li id="t-news"><a href="{path='SITE_INDEX'}/news/" title="Eastern WV News, Articles, Opinion">News</a></li>
<li id="t-event_cal"><a href="{path='SITE_INDEX'}/events/{current_time format="%Y"}/{current_time format="%m"}/{current_time format="%d"}/" title="Upcoming Events in Martinsburg, Berkeley Springs, Shepherdstown…">Events</a></li>
<!--<li id="t-shopping"><a href="{path='SITE_INDEX'}/shop_local/" title="Shop Local: Eastern Panhandle Marketplace">Shop Local</a></li>
<li id="t-movies"><a href="{path='SITE_INDEX'}/events/movie_showtimes?zipcode=25401" title="Local movie showtimes and online ticket ordering">Movies</a></li>-->
<li id="t-restaurant"><a href="{path='SITE_INDEX'}/business_directory/restaurant_menus/" title="View and Print Local Restaurant Menus">Restaurant Menus</a></li>
<li id="t-business"><a href="{path='SITE_INDEX'}/business_directory/" title="Eastern West Virginia Business Directory">Business Directory</a></li>
<!--<li id="t-advertise"><a href="{path='SITE_INDEX'}/advertise/" title="Seriously, you should advertise on InThePanhandle.com">Advertise</a></li>-->
<li id="t-more"><a href="{path='SITE_INDEX'}/site/more/" title="Our navigation is bursting… But we've got more!">More +</a></li>
</ul>
</div>
<div id="social_media">
<ul class="social">
<li class="facebook"><a title="inthepanhandle.com on Facebook" href="http://www.facebook.com/inthepanhandle"><span class="displace">Facebook</span></a></li>
<li class="twitter"><a title="inthepanhandle.com Twitter Feed" href="http://twitter.com/inthepanhandle"><span class="displace">Twitter</span></a></li>
<li class="rss"><a title="inthepanhandle.com RSS Feed" href="{path='SITE_INDEX'}/media/rss_feeds/"><span class="displace">RSS</span></a></li>
<li class="flickr"><a title="inthepanhandle.com Flickr Feed" href="http://flickr.com/inthepanhandle"><span class="displace">Flickr</span></a></li>
</ul>
</div>
</div>
<!--Navigation Global Variable-->
<div class="clear_both"></div>
</div>
</div>
<div id="announcements">
<div id="announcements_content">
<div id="announcements_welcome">
<ul>
{if logged_in}
<div id="container">
<li>Welcome back <b>{screen_name}</b></li>
<li><a href="{path=''users/edit_profile"}" title="Access your Favorites, Articles, Events, Profile…"">My Stuff</a></li>
{exp:cp_access}<li><a href="http://www.inthepanhandle.com/itpcore/" target="_blank" title="Use the Control Panel to edit your articles, events or business listing.">Control Panel</a></li>{/exp:cp_access}
<!--<li><a href="{path=''advertise/"}" title="Add your business to InThePanhandle.com for $10 per month.">Ads starting at $10/mo</a></li>-->
<li class="last"><a href="{path='LOGOUT'}" title="You will be logged out and returned to the InThePanhandle.com homepage.">Logout</a></li>
</div>
{/if}
</ul>

{if logged_out}

<div id="container">
  <div id="topnav" class="topnav"><ul><!--<li><a href="{path=''advertise/"}" title="Add your business to InThePanhandle.com for $10 per month.">Ads starting at $10/mo</a></li>--> <li><a href="{path='users/register'}" title="Create an InThePanhandle.com user account">Create an Account</a></li> <li class="last">Have an account?</li><a href="login" class="signin"><span>Sign in</span></a> </ul> </div>
  <fieldset id="signin_menu">
  {exp:member:login_form return="users/edit_profile/"}
      <label for="username">Username or email</label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
        <input id="remember" name='auto_login' value='1'  tabindex="7" type="checkbox">
        <label for="remember">Remember me</label>
      </p>
      <p class="forgot"> <a href="{path='users/forgot_password'}">Forgot your password?</a></p>
    {/exp:member:login_form}
  </fieldset>
</div>

{/if}

</div>


</div>
</div>
<div id="body_content_background">

<div id="body_content">

<div id="edit_user_profile">
<h1>Forgot Your Password? It happens to the best of us…</h1>
<p>Just enter the email address you registered with and you will receive an email with instructions for resetting your Password.</p>
{exp:user:forgot}
<p><label for="email">Email Address <span class="required">*</span></label><input type="text" class="txt" name="email" id="email" /></p>
<p><input type="submit" class="btn" name="submit" value="Begin Password Reset Procedure" /></p>

{/exp:user:forgot}

</div>
</div>
</div>


{exp:fbc:prepare_page}

<!-- Start Analytics tag -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-137822-6']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_trackPageLoadTime']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics tag -->

<!-- Start Quantcast tag -->
<script type="text/javascript">
_qoptions={
qacct:"p-1e6WvWg1Foufs"
};
</script>
<script type="text/javascript" src="http://edge.quantserve.com/quant.js"></script>
<noscript>
<img src="http://pixel.quantserve.com/pixel/p-1e6WvWg1Foufs.gif" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
</noscript>
<!-- End Quantcast tag -->

<!-- Woopra Code Start -->
<script type="text/javascript" src="//static.woopra.com/js/woopra.v2.js"></script>
<script type="text/javascript">
woopraTracker.track();
</script>
<!-- Woopra Code End -->

</body>
</html>

