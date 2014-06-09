<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Upcoming events for the {segment_4} category | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<meta name="apple-itunes-app" content="app-id=384904457">

<link rel="stylesheet" href="/css/itp.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel='stylesheet' type='text/css' media='screen' href='/css/jqModal.css' />

<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<link rel="alternate" type="application/rss+xml" title="ITP Articles Feed" href="{path='SITE_INDEX'}/media/news_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Event Cal Feed" href="{path='SITE_INDEX'}/media/events_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Businesses Feed" href="{path='SITE_INDEX'}/media/business_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Shop Local Feed" href="{path='SITE_INDEX'}/media/products_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Coupons Feed" href="{path='SITE_INDEX'}/media/coupons_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Flickr Feed" href="http://feeds.feedburner.com/UploadsFromInthepanhandlecom/" />

<script type="text/javascript" src="http://use.typekit.com/jik1hqx.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
<script type="text/javascript" src="/js/s3Slider.js"></script>
<script type="text/javascript" src="/js/swfobject.js"></script>
<script src='/js/jqModal.js' type='text/javascript'></script>

<script type="text/javascript">
$().ready(function() {
  var triggers = $('a.ex3bTrigger');
  $('#ex3b').jqm({
   trigger: triggers,
    ajax: '@href',
    target: 'div.jqmAlertContent',
    overlay: 0
    });
  if($.browser.msie) {
  $('div.jqmAlert .jqmClose').hover(
    function(){ $(this).addClass('jqmCloseHover'); },
    function(){ $(this).removeClass('jqmCloseHover'); });
  }
});
</script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {
                e.preventDefault();
                $("fieldset#signin_menu").toggle();
                $(".signin").toggleClass("menu-open");
            });

            $("fieldset#signin_menu").mouseup(function() {
                return false
            });
            $(document).mouseup(function(e) {
                if($(e.target).parent("a.signin").length==0) {
                    $(".signin").removeClass("menu-open");
                    $("fieldset#signin_menu").hide();
                }
            });

        });
</script>

</head>
<body id="event_cal">
{if logged_in && member_group == "1"}
    <div style="position: absolute; top: 0; left: 0; position: fixed; background-color: #000; color: #fff; font-size: 9px; padding: 5px;">
        {elapsed_time} seconds / {total_queries} queries
    </div>
{/if}
<div id="search_box">
<div id="search">
{exp:search:simple_form weblog="news|bus_dir|calendar_events|coupons|products|restaurant_menus" show_future_entries="yes" show_expired="yes" results="10" search_in="everywhere" where="all" no_result_page="search/noresults"}
<p><input class="txt" type="text" name="keywords" id="keywords" onfocus="if
(this.value==this.defaultValue) this.value='';" value="I'm looking for…" size="18" maxlength="100" /> <input type="image" src="/images/ui/search_btn.gif" align="right" value="Search" /></p>
{/exp:search:simple_form}
</div>
</div>
</div>
<div id="content">
<div id="header">
<div id="header_content">
<div id="logo"><a href="{path='SITE_INDEX'}/" title="InThePanhandle.com is your Eastern WV Community Website."><img border="0" src="/images/ui/logo_header.jpg" alt="inthepanhandle.com - The eastern panhandle, West Virginia community website."/></a></div>

<div id="navigation">
<div id="nav">
<ul>
<li id="t-home"><a href="{path='SITE_INDEX'}/" title="The InThePanhandle.com Homepage">Home</a></li>
<li id="t-news"><a href="{path='SITE_INDEX'}/news/" title="Eastern WV News, Articles, Opinion">News</a></li>
<li id="t-event_cal"><a href="{path='SITE_INDEX'}/events/" title="Upcoming Eastern Panhandle Events">Events</a></li>
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
<li><a href="http://www.inthepanhandle.com/itpcore/" target="_blank" title="Use the Control Panel to edit your articles, events or business listing.">Control Panel</a></li>
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
<div id="advertising">
<div id="ads">

</div>
</div>
<div id="body_content">
<div id="event_calendar">
<!-- Calendar Categories Code -->
<div id="cal_categories">
<h2>View Events by Category</h2>
{exp:weblog:categories weblog="event_cal" id="my_custom_id"}
<a href="{path=events/by_category}{current_time format="%Y"}/{current_time format="%m"}/">{category_name}</a>
{/exp:weblog:categories}

<div class="clear_both"></div>
</div>
<!-- End Calendar Categories Code -->

<!--Begin Calendar Month Navigation -->
<div id="event_calendar_month_nav">
{exp:repeet:get_ids weblog="event_cal" parse="inward" calendar="yes"}
{exp:repeet:calendar weblog="event_cal" interval_field="repeat_interval" include_field="event_dates" exclude_field="exclude_dates" switch="calendarToday|calendarCell" entry_id="{repeet:entry_ids}" show_future_entries="yes" show_expired="yes"}
<h3><a href="{previous_path='events/month'}">&#8592;</a> <a href="{path=events}month/{segment_5}/{segment_6}/">Local Events for {date format="%F %Y"}</a> <a class="calendarMonthLinks" href="{next_path='events/month'}">&#8594;</a></h3>
<ul>
{calendar_rows }
{if entries}<li class="calendarToday"><a href="{day_path='events/index'}">{day_number}</a></li>{/if}{if not_entries}<li>{day_number}</li>{/if}
{/calendar_rows}
</ul>
</div>
{/exp:repeet:calendar}
{/exp:repeet:get_ids}

<!--End Calendar Month Navigation -->

{exp:repeet:parse date_header_interval="week" category=”{segment_5}”}
{repeet:no_results}<h1>Sorry, we have no events.  How about adding some?</h1>{/repeet:no_results}
{repeet:date_header}<h1>Upcoming events for the Week of %F %d, %Y in the {exp:weblog:category_heading weblog="event_cal"}{category_name}{/exp:weblog:category_heading} category</h1>{/repeet:date_header}
{exp:repeet:get_ids weblog="event_cal" parse="inward"}
{exp:weblog:entries weblog="event_cal" entry_id="{repeet:entry_ids}" show_expired="no" show_future_entries="yes" dynamic="on"}
{repeet:item}
{repeet:entry_id}{entry_id}{/repeet:entry_id}
{repeet:entry_date}{entry_date format="%Y-%m-%d %H:%i"}{/repeet:entry_date}
{repeet:expiration_date}{expiration_date format="%Y-%m-%d %H:%i"}{/repeet:expiration_date}
{repeet:interval}{repeat_interval}{/repeet:interval}
{repeet:include_dates}{event_dates}{/repeet:include_dates}
{repeet:exclude_dates}{exclude_dates}{/repeet:exclude_dates}
{repeet:display}
{exp:repeet:calendar weblog="event_cal" category=”{segment_5}”}
<div class="event_month">{repeet:start_time format="%D"}</div>
<div class="event_date">{repeet:start_time format="%d"}</div>
<div class="event_details">  <h3>{title}</h3><ul class="inline_category"><b>Category:</b> {categories}<li>{category_name}</li>{/categories}</ul><div class="clear_both"></div><p>{exp:char_limit total="75"}{event_details}{/exp:char_limit} <a href='{title_permalink=events/details}'>Click for {title} event details</a></p></div>
<div class="clear_both"></div>
{/exp:repeet:calendar}
{/repeet:display}
{/repeet:item}
{/exp:weblog:entries}
{/exp:repeet:get_ids}
{/exp:repeet:parse}
{exp:weblog:calendar weblog="event_cal" show_future_entries="yes" sort="asc"}
<p class="next_month"><a href="{previous_path=events/month}">&#8592; Previous Month</a> | <a href="#ads">Back to Top</a> | <a href="{next_path=events/month}">Next Month &#8594;</a></p>
{/exp:weblog:calendar}
</div>
</div>
<div id="footer">
<div id="footer_nav">
<div id="destination">
    <h4>Destination Pages</h4>
    <ul>
    <li><a href="{path='SITE_INDEX'}/" title="Back to the InThePanhandle.com Homepage">Home</a></li>
    <li><a href="{path='SITE_INDEX'}/news/" title="Eastern WV News, Opinion and Articles">News</a></li>
    <li><a href="{path='SITE_INDEX'}/events/{current_time format="%Y"}/{current_time format="%m"}/{current_time format="%d"}/" title="Eastern West Virginia Event Calendar">Event Calendar</a></li>
    <li><a href="{path='SITE_INDEX'}/business_directory/" title="Eastern Panhandle WV Business Directory">Business Directory</a></li>
    <li><a href="{path='SITE_INDEX'}/shop_local/" title="Products and Services from Eastern WV Merchants">Shopping</a></li>
    <!--<li><a href="{path='SITE_INDEX'}/business_directory/coupon_listings/" title="Coupons from Eastern West Virginia Merchants">Coupons</a></li>-->
    <!--<li><a href="{path='SITE_INDEX'}/events/movie_showtimes?zipcode=25401" title="Local movie showtimes and online ticket ordering">Movie Showtimes</a></li>
    <li><a href="http://www.inthepanhandle.com/classified/" title="Free Local Classifieds">Classifieds</a></li>-->
    <li id="t-travel"><a href="{path='SITE_INDEX'}/travel/" title="Eastern WV Travel Destinations - B&B, Hotels, More">Travel</a></li>
    <li><a href="{path='SITE_INDEX'}/business_directory/restaurant_menus/" title="Download Restaurant Menus from Eastern WV Restaurants">Restaurant Menus</a></li>
    <li><a href="{path='SITE_INDEX'}/gov/" title="Morgan County, Berkeley County & Jefferson County Government Agencies">Local Government</a></li>
    </ul>
    </div>

    <div id="help">
    <h4>Help</h4>
    <ul>
    <li><a href="{path='SITE_INDEX'}/support/help_request/"}" title="Get Help!"">Send Support Request</a></li>
    <li><a href="{path='SITE_INDEX'}/support/tutorials/" title="Video Tutorials on how to use InThePanhandle.com">Tutorials</a></li>
    <li><a href="{path='SITE_INDEX'}/itp_blog/" title="InThePanhandle.com Blog">ITP Blog</a></li>
    <li><a href="{path='SITE_INDEX'}/itp_blog/article/the_fix_list/" title="Known Issues"">ITP Fix-Me List</a></li>
    <li><a href="{path='SITE_INDEX'}/itp_blog/article/to-do_list/" title="To Do List"">ITP To-Do List</a></li>
    <!--<li><a href="{path='SITE_INDEX'}/support/marketing/" title="Internet Marketing Tips for InThePanhandle.com Advertisers">Internet Marketing</a></li>-->
    <!--<li><a href="{path='SITE_INDEX'}/support/sitemap/" title="InThePanhandle.com Sitemap - Find Anything">Sitemap</a></li>-->
    <li><a href="{path='SITE_INDEX'}/users/edit_profile/" title="Edit your InThePanhandle.com User Profile">Edit Profile</a></li>
    <li><a href="{path='SITE_INDEX'}/search/advanced/" title="Regular search not working? Try our advanced search!">Advanced Search</a></li>
    <li><a href="{path='SITE_INDEX'}/support/privacy_policy/" title="InThePanhandle.com Privacy Policy">Privacy Policy / Terms of Service</a></li>
    </ul>
    </div>

    <div id="interact">
    <h4>Interact with ITP</h4>
    <ul>
    <li><a href="{path='news/send_us_news'}" title="Send us news">Send us news</a></li>
    <li><a href="{path='SITE_INDEX'}/site/the_weekly_archives/" title="Sign up for the InThePanhandle.com Email Newsletter">Email Newsletter Sign-Up</a></li>
    <li><a href="http://www.twitter.com/inthepanhandle" title="We like and use twitter!">Twitter.com/inthepanhandle</a></li>
    <li><a href="http://www.twitter.com/itpevents" title="Our twitter feed just for upcoming eastern panhandle events!">Twitter.com/itpevents</a></li>
    <li><a href="http://www.facebook.com/inthepanhandle" title="Yeah, InThePanhandle.com is on Facebook too!">ITP on Facebook</a></li>
    <li><a href="{path='SITE_INDEX'}/support/contact_us/" title="We are Listening! Give us a yell.">Contact Us</a></li>
    </ul>
    </div>


    <div id="sitestats">
    <h4>ITP Statistics</h4>
    Page rendered in {elapsed_time} seconds<br />
    {exp:stats}
    Total Entries: {total_entries}<br />
    Most Recent Entry: {last_entry_date format="%m/%d %h:%i %a"}<br />
    Total Members: {total_members}<br />
    Total Logged in members: {total_logged_in}<br />
    Total guests: {total_guests}<br />
    Total anonymous users: {total_anon}<br />
    Most Recent Visitor on:  {last_visitor_date format="%m/%d/%Y %h:%i %a"}<br />
    The most visitors ever was {most_visitors} on  {most_visitor_date format="%m/%d/%Y %h:%i %a"}

    {if member_names}
    <p>Current Logged-in Members:&nbsp;
    {member_names  backspace='6'}
    <a href="{member_path=member/index}">{name}</a>&nbsp;
    {/member_names}
    </p>
    {/if}

    {/exp:stats}
    </div>

<div class="clear_both">
</div>
</div>
</div>
    <div id="copyright">
    <p>&copy; 2004 - {current_time format="%Y"} Firebrand Media, LLC / InThePanhandle.com {exp:weblog:entries weblog="itp_blog" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
    url_title="inthepanhandle.com_website_updates" }(<a href="{path='SITE_INDEX'}/itp_blog/article/inthepanhandle.com_website_updates/" title="View our progress as we develop with version updates">{title}</a>){/exp:weblog:entries} Version 3 Launched 09.26.09 | <a href="http://www.firebrand-media.com">Firebrand Media site design</a></p>
    </div>

</div>
        <script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0014/8160.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>

<!--Footer Start-->



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
