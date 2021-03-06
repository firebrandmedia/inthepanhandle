{exp:fbc:prepare_page}
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<meta name="viewport" content="width=1024" />

<!--header_css_js-->

<!--Stylesheets-->
<link rel="stylesheet" href="/css_12/ie.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css_12/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css_12/itp_2012.css" type="text/css" media="screen">
<link rel="stylesheet" href="/nivo_slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo_slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

<!--Mobile Specific-->
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">

<!--RSS Feeds-->
<link rel="alternate" type="application/rss+xml" title="ITP Articles Feed" href="{path='SITE_INDEX'}/media/news_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Event Cal Feed" href="{path='SITE_INDEX'}/media/events_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Businesses Feed" href="{path='SITE_INDEX'}/media/business_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Shop Local Feed" href="{path='SITE_INDEX'}/media/products_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Coupons Feed" href="{path='SITE_INDEX'}/media/coupons_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Flickr Feed" href="http://feeds.feedburner.com/UploadsFromInthepanhandlecom/" />

<!--JS Files-->
<script type="text/javascript" src="http://use.typekit.com/jik1hqx.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript" src="/js/jquery.nivo.slider.pack.js"></script>

<!--JS Scripts-->

<!--Twitter Menu Drop Down-->
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

<!--Save as Favorite-->
<script type="text/javascript">
    $(document).ready(function() {
        $('a.Favorites_Save') .click (function() {
            var link = $(this).attr('href')
            $('.Favorites_Status').load(link, function() {
                    $('.Favorites_Delete').show();
                });
            $(this).hide();
            return false;
        });
        $('a.Favorites_Save_Full') .click (function() {
            var link = $(this).attr('href')
            $('.Favorites_Status').load(link, function() {
                    $('.Favorites_Delete').show();
                });
            $(this).hide();
            return false;
        });

        $('a.Favorites_Delete') .click (function() {
            var link = $(this).attr('href')
            $('.Favorites_Status').load(link, function() {
                    $('.Favorites_Save').show();
                });
            $(this).hide();
            return false;
        });
    });
</script>

<!--header_css_js End-->

</head>
<body id="home">

<!--iPhone / Search Embed-->
<!--Performance Indicator for Admin-->
{if logged_in && member_group == "1"}
    <div style="position: absolute; top: 0; left: 0; position: fixed; background-color: #000; color: #fff; font-size: 9px; padding: 5px;">
        {elapsed_time} seconds / {total_queries} queries
    </div>
{/if}
<!--Performance Indicator End-->
<div id="search_box">
<div id="search">
{exp:search:simple_form weblog="news|bus_dir|event_cal|coupons|products|restaurant_menus" show_future_entries="yes" show_expired="yes" results="10" search_in="everywhere" where="all" no_result_page="search/noresults"}
<p><input class="txt" type="text" name="keywords" id="keywords" onfocus="if
(this.value==this.defaultValue) this.value='';" value="I'm looking for…" size="18" maxlength="100" /> <input type="image" src="http://www.inthepanhandle.com/images/ui/search_btn.gif" align="right" value="Search" /></p>
{/exp:search:simple_form}
</div>
</div>
</div>

<!--iPhone / Search Embed End-->

<div id="content">
<div id="header">
<div id="header_content">

<!--Logo-->
<div id="logo"><a href="{path='SITE_INDEX'}/" title="InThePanhandle.com is your Eastern WV Community Website."><img border="0" src="/images/ui/logo_header.jpg" alt="inthepanhandle.com - The eastern panhandle, West Virginia community website."/></a></div>
<!--Logo-->

<!--Primary Nav-->
<div id="navigation">
<div id="nav">
<ul>
<li id="t-home"><a href="{path='SITE_INDEX'}/" title="The InThePanhandle.com Homepage">Home</a></li>
<li id="t-news"><a href="{path='SITE_INDEX'}/news/" title="Eastern WV News, Articles, Opinion">News</a></li>
<li id="t-event_cal"><a href="{path='SITE_INDEX'}/events/{current_time format="%Y"}/{current_time format="%m"}/{current_time format="%d"}/" title="Upcoming Events in Martinsburg, Berkeley Springs, Shepherdstown…">Events</a></li>
<li id="t-restaurant"><a href="{path='SITE_INDEX'}/business_directory/restaurant_menus/" title="View and Print Local Restaurant Menus">Restaurant Menus</a></li>
<li id="t-business"><a href="{path='SITE_INDEX'}/business_directory/" title="Eastern West Virginia Business Directory">Business Directory</a></li>
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

<!--Primary Nav-->


<div class="clear_both"></div>
</div>
</div>
<div id="announcements">
<div id="announcements_content">

<!--weather-->

<div id="weather">{exp:weathericon station="KMRB" heading="Panhandle Weather" display_icon="yes" icon_width="30" icon_height="30" icon_location="/images/wicons/png" icon_extension=".png" sunrise_hour="6" sunset_hour="19" heading_class="weather_heading"}</div>

<!--weather end-->

<!--welcome login-->

<div id="announcements_welcome">
<ul>
{if logged_in}
<div id="container">
<li>Welcome back <b>{screen_name}</b></li>
<li><a href="{path=''users/edit_profile"}" title="Access your Favorites, Articles, Events, Profile…"">My Stuff</a></li>
{exp:cp_access}<li><a href="http://www.inthepanhandle.com/itpcore/" target="_blank" title="Use the Control Panel to edit your articles, events or business listing.">Control Panel</a></li>{/exp:cp_access}
<li><a href="{path=''advertise/"}" title="Add your business to InThePanhandle.com for $10 per month.">Ads starting at $10/mo</a></li>
<li class="last"><a href="{path='LOGOUT'}" title="You will be logged out and returned to the InThePanhandle.com homepage.">Logout</a></li>
</div>
{/if}
</ul>

{if logged_out}

<div id="container">
  <div id="topnav" class="topnav"><ul><li><a href="{path=''advertise/"}" title="Add your business to InThePanhandle.com for $10 per month.">Ads starting at $10/mo</a></li>
  <li><a href="{path='users/register'}" title="Create an InThePanhandle.com user account">Create an Account</a></li>
  <li class="last">Have an account?</li><a href="login" class="signin"><span>Sign in</span></a>
  </ul>
</div>

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

<!--welcome login end-->


</div>
</div>
<div id="body_content_background">
<div id="body_content">

<div id="top_stories" class="group">

<h1>Headlines</h1>
<ul>
<li><a href="{path=''news/send_us_news"}" title="Send us news"">Send us news</a></li>
</ul>
<div class="clear_both"></div>


{exp:weblog:entries weblog="news" orderby="date" sort="desc" limit="5" dynamic="off" category="390"}

<div class="story">
<a href="{title_permalink=news/article}">{if article_thumbnail}{exp:imgsizer:size src="{article_thumbnail}" width="180" height="180"}
<img src="{sized}" />{/exp:imgsizer:size}{if:else}{exp:imgsizer:size src="{article_images}{article_image}{/article_images}" width="180" height="180"}
<img src="{sized}" />
{/exp:imgsizer:size}{/if}</a>
<h2><a href="{title_permalink=news/article}">{title}</a></h2>
</div>

{/exp:weblog:entries}

</div>

<!--Email / Ads / PunchTab-->
<div id="advertising" class="group">
<div id="ads">
{embed="embeds/ads_newsletter_punchtab"}
</div>
</div>
<!--Email / Ads / PunchTab-->


<!--Home News-->
<div id="home_news" class="group">

<h1>New & Popular</h1>
<div id="recent_news">
<h2>More Recent Articles</h2>
<ul>
{exp:weblog:entries weblog="news" orderby="date" offset="0" sort="desc" limit="6" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=news/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>

<div id="popular_today">

<h2>Today's Buzz</h2>
<ul>
{exp:tracker:entries weblog="news" interval="today" limit="8" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>

<div id="most_popular">
<h2>Most Popular Articles, last 7 days</h2>
<ul>
{exp:tracker:entries weblog="news" interval="week" limit="6" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}" class="popular_links">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
</div>
<!--End Home News-->

<!--Home Events-->
<div id="events">
<h1>Local Event Calendar</h1>
<div class="clear_both"></div>
<div id="featured_event">
{exp:weblog:entries weblog="event_cal" orderby="date" limit="1" sort="asc" dynamic="off" start_on="{current_time format='%Y-%m-%d %H:%i'}" show_future_entries="yes" disable="pagination|categories|category_fields|member_data|trackbacks" category="not 321"}
<h2>Featured Event: <br />
<a href="{title_permalink=events/details}">{title}</a> | {entry_date format="%m. %d. %Y"}</h2>
<p>{exp:md_eexcerpt if_exceeds="75" stop_after="50" append="&nbsp;&hellip;" the_link="<a href='{title_permalink=events/details}'>Continue Reading</a>"}
{event_details}
{/exp:md_eexcerpt}</p>
{/exp:weblog:entries}
</div>
<div id="upcoming_evnts">
<h2>Today's Events</h2>
<ul>
{exp:repeet:parse date_header_interval="month"}
{repeet:no_results}Sorry, no results.{/repeet:no_results}
{repeet:date_header}<!--<h1>%F %j, %Y</h1>-->{/repeet:date_header}
{exp:repeet:get_ids weblog="event_cal" parse="inward"}
{exp:weblog:entries weblog="event_cal" entry_id="{repeet:entry_ids}" show_expired="no" show_future_entries="yes" dynamic="off" disable="pagination|category_fields||member_data|trackbacks"}
{repeet:item}
{repeet:entry_id}{entry_id}{/repeet:entry_id}
{repeet:entry_date}{entry_date format="%Y-%m-%d %H:%i"}{/repeet:entry_date}
{repeet:expiration_date}{expiration_date format="%Y-%m-%d %H:%i"}{/repeet:expiration_date}
{repeet:interval}{repeat_interval}{/repeet:interval}
{repeet:include_dates}{event_dates}{/repeet:include_dates}
{repeet:exclude_dates}{exclude_dates}{/repeet:exclude_dates}
{repeet:display}
{exp:repeet:calendar weblog="event_cal"}
<li><a href='{title_permalink=events/details}'>{title}</a></li>
{/exp:repeet:calendar}
{/repeet:display}
{/repeet:item}
{/exp:weblog:entries}
{/exp:repeet:get_ids}
{/exp:repeet:parse}
<li><a href="{path='SITE_INDEX'}/events/{current_time format="%Y"}/{current_time format="%m"}/{current_time format="%d"}/">View Full Calendar</a></li>
</ul>
</div>
<div id="most_popular_events">
<h2>Popular Upcoming Events</h2>
<ul>
{exp:tracker:entries weblog="event_cal" interval="week" limit="10" entry_date_from="{current_time format='%Y-%m-%d %H:%i'}" show_future_entries="yes" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/events/details/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
<!--End Home Events-->

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
<li><a href="{path=''support/help_request"}?height=400&width=380" class="thickbox" title="Get Help!"">Send Support Request</a></li>
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
<li><a href="http://www.livestream.com/inthepanhandle" title="Broadcasting the eastern panhandle of West Virginia">Livestream.com/inthepanhandle</a></li>
<li><a href="{path='SITE_INDEX'}/media/rss_feeds/" title="InThePanhandle.com RSS Feeds. Feed your reader.">RSS Feeds</a></li>
<li><a href="{path='SITE_INDEX'}/media/flickr/" title="InThePanhandle.com Panhandle Photo Wall">Panhandle Photo Wall</a></li>
<li><a href="{path='SITE_INDEX'}/support/contact_us/" title="We're Listening! Give us a yell.">Contact Us</a></li>
</ul>
</div>

<div id="twitter">
<h5>"Tweet"</h5>
{exp:twitter_timeline twitter_refresh="2" limit="1" screen_name="inthepanhandle" create_links="user_mentions|hashtags|urls"}
<div class="tweet">
  <!--<div class="date">{created_at format="%m-%d %g:%i"}</div>-->
  <div class="author">
    <div class="icon"><img src="{profile_image_url}" width="48" height="48" alt="profile image" /></div>
    @{screen_name}
  </div>
  <div class="status">{text}</div>
</div>
{/exp:twitter_timeline}
<p>Follow us on Twitter: <a href="http://www.twitter.com/inthepanhandle">@inthepanhandle</a></p>
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
<p>&copy; {current_time format="%Y"} Firebrand Media, LLC / InThePanhandle.com {exp:weblog:entries weblog="itp_blog" limit="1" dynamic="off" disable="categories|trackbacks|member_data|pagination"
url_title="inthepanhandle.com_website_updates" }(<a href="{path='SITE_INDEX'}/itp_blog/article/inthepanhandle.com_website_updates/" title="View our progress as we develop with version updates">{title}</a>){/exp:weblog:entries} Launched 09.26.09 | <a href="http://www.firebrand-media.com">Firebrand Media site design</a></p>
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

<!--PunchTab Code Start-->
<script type="text/javascript" charset="utf-8">
  var is_ssl = ("https:" == document.location.protocol);
  var asset_host = is_ssl ? "https://www.punchtab.com/" : "http://www.punchtab.com/";
  document.write(unescape("%3Cscript src='" + asset_host + "static/js/pt.js' type='text/javascript'%3E%3C/script%3E"));
</script>

<script type="text/javascript" charset="utf-8">
  var _ptq = _ptq || [];
  var reward_widget_options = {};
  reward_widget_options.key = "51f03911f9ca7807df1d76dbffcfca0c";
  reward_widget_options.host = "www.punchtab.com";
  reward_widget_options.display = "inline";
  var reward_widget = new PT.reward_widget(reward_widget_options);
</script>
<!--PunchTab Code End-->

</body>
</html>
