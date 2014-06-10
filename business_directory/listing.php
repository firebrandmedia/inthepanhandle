
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries channel="bus_dir" limit="1"}{title}{/exp:weblog:entries} | Business Directory | InThePanhandle.com | Your Eastern WV Community Website</title>

<!--Stylesheets-->
<link rel="stylesheet" href="/css/itp.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel='stylesheet' type='text/css' media='screen' href='/css/jqModal.css' />
<link rel="stylesheet" href="/nivo_slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo_slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

<!--Mobile Specific-->
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<meta name="apple-itunes-app" content="app-id=384904457">

<!--RSS Feeds-->
<link rel="alternate" type="application/rss+xml" title="ITP Articles Feed" href="{path='SITE_INDEX'}/media/news_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Event Cal Feed" href="{path='SITE_INDEX'}/media/events_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Businesses Feed" href="{path='SITE_INDEX'}/media/business_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Shop Local Feed" href="{path='SITE_INDEX'}/media/products_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Coupons Feed" href="{path='SITE_INDEX'}/media/coupons_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Flickr Feed" href="http://feeds.feedburner.com/UploadsFromInthepanhandlecom/" />

<!--JS Files-->
<!--<script type="text/javascript" src="http://use.typekit.com/jik1hqx.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js'></script>
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

{exp:shrimp:meta_tag template="b" entry_id="{entry_id}"}

<!-- Google Map -->
{exp:weblog:entries channel="bus_dir" limit="1"}
<script type="text/javascript">
//<![CDATA[
      // this variable will collect the html which will eventually be placed in the side_bar
      var side_bar_html = "";

      // arrays to hold copies of the markers and html used by the side_bar
      // because the function closure trick doesnt work there
      var gmarkers = [];
      var map = null;

function initialize() {
  // create the map
  var myOptions = {
    zoom: 13,
  // Manually enter the LatLng where you want the centre of the map
    center: new google.maps.LatLng({latitude},{longitude}),
    mapTypeControl: true,
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map"),
                                myOptions);

  google.maps.event.addListener(map, 'click', function() {infowindow.close();});

  // Add markers to the map
  // add the points

  // ******* Collect data from EE (edit to match your fields) *******
	  var point = new google.maps.LatLng({latitude},{longitude});
	  var marker = createMarker(point,"{title}","<b>{title}</b><br><b>Phone:</b> {phone}")

	// ******** End of EE section **********

  // put the assembled side_bar_html contents into the side_bar div
  document.getElementById("side_bar").innerHTML = side_bar_html;
}

var infowindow = new google.maps.InfoWindow(
  {
    size: new google.maps.Size(150,150)
  });

// This function picks up the click and opens the corresponding info window
function myclick(i) {
  google.maps.event.trigger(gmarkers[i], "click");
}

// A function to create the marker and set up the event window function
function createMarker(latlng, name, html) {
    var contentString = html;
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString);
        infowindow.open(map,marker);
        });
    // save the info we need to use later for the side_bar
    gmarkers.push(marker);
    // add a line to the side_bar html
    side_bar_html += '<a href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a><br>';
}


    // This Javascript is based on code provided by the
    // Community Church Javascript Team
    // http://www.bisphamchurch.org.uk/
    // http://econym.org.uk/gmap/
    // from the v2 tutorial page at:
    // http://econym.org.uk/gmap/basic2.htm
    // Then modified to the v3 API by:
    // http://www.geocodezip.com/
//]]>
</script>
{/exp:weblog:entries}


</head>
<body id="business" onload="initialize()">
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
<!-- Begin Business Listing Code -->
{exp:weblog:entries weblog="bus_dir" limit="1"}
<div id="body_content">
<div id="business_listing">
<div id="business_info">
<!--Business Listing -->

<!--Favorite Start-->
{if logged_in}
    {exp:favorites:saved}
        {if not_saved}
            <span class="favorited">
                <span class="Favorites_Status"></span>
                <a class="Favorites_Save_Full" href="{permalink="embeds/fav-it/"}"><img src="/images/ui/fave.png" title="Save to Favorites" /></a>
                <a class="Favorites_Save Favorites_Trigger" style="display:none;" href="{permalink="embeds/fav-it/"}"><img src="/images/ui/fave.png" title="Save to Favorites" /></a>
                <a class="Favorites_Delete Favorites_Trigger" style="display:none;" href="{permalink="embeds/fav-it/delete/"}"><img src="/images/ui/fave_remove.png" title="Remove from Favorites" /></a>
            </span>
        {/if}
        {if saved}
            <span class="favorited">
                <span class="Favorites_Status"></span>
                <a class="Favorites_Save Favorites_Trigger" style="display:none;" href="{permalink="embeds/fav-it/"}"><img src="/images/ui/fave.png" title="Save to Favorites" /></a>
                <a class="Favorites_Delete Favorites_Trigger" href="{permalink="embeds/fav-it/delete/"}"><img src="/images/ui/fave_remove.png" title="Remove from Favorites" /></a>
            </span>
        {/if}
    {/exp:favorites:saved}
{if:else}
    <span class="loginfavorites">
      <a class="signin menu-open" href="login">Sign-In to Save Article</a><br />
      <a class="createaccount" href="http://www.inthepanhandle.com/local/users/register/">Or Create an Account</a>
</span>
{/if}
<!--Favorite End-->

<h1>{title}</h1>
<div id="bus_rating">{exp:rating:stats entry_id="{entry_id}"}
Rated: {stars_overall_avg}
{/exp:rating:stats} <a href="#rating">Read Reviews</a> | <a href="#add_rating">Add a Review</a></div>

<div id="share">

</div>

<span class="edit_this">{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}</span>

{if bus_logo}{exp:imgsizer:size src="{bus_logo}" width="400"}
<img class="bus_logo"  src="{sized}" />{/exp:imgsizer:size}{/if}

{business}
<div class="clear_both"></div>

<div class="contact_info_box">
<h2>Offline Contact Information</h2>
<ul>
{if address}<b>Address:</b><br /><li> {address}</li>{/if}
<li>{if city}{city}{/if}, {if state}{state}{/if} {if zip}{zip}</li>{/if}
{if manager}<li><b>Contact Person:</b> {manager}</li>{/if}
{if phone}<li><b>Phone:</b> {phone}</li>{/if}
{if fax}<li><b>Fax:</b> {fax}</li>{/if}
{if mobile}<li><b>Mobile:</b> {mobile}</li>{/if}
</ul>
</div>

<div class="contact_info_box">
<h2>Online Contact Information</h2>
<ul>
{if website}<li><img align="absmiddle" src="/images/icons/social/www.png"/> {website}</li>{/if}
{if email_address}<li><img align="absmiddle" src="/images/icons/social/email.png"/>  {email_address}</li>{/if}
{if twitter}<li><img align="absmiddle" src="/images/icons/social/twitter.png"/> <a rel="nofollow" href="http://www.twitter.com/{twitter}">@{twitter}</a></li>{/if}
{if linkedin}<li><img align="absmiddle" src="/images/icons/social/linkedin.png"/> {linkedin}</li>{/if}
{if youtube}<li><img align="absmiddle" src="/images/icons/social/youtube.png"/> {youtube}</li>{/if}
{if facebook}<li><img align="absmiddle" src="/images/icons/social/facebook.png"/> {facebook}</li>{/if}
<li><img align="absmiddle" src="/images/icons/social/itp_short.png"/> <a href="http://itpwv.com/local{exp:shrimp:relative_url template="b" entry_id="{entry_id}"}">http://itpwv.com/local{exp:shrimp:relative_url template="b" entry_id="{entry_id}"}</a></li>
</ul>
</div>

{exp:tracker:pixeltrack weblog="bus_dir" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}
{/exp:weblog:entries}

<div id="map" style="width: 642px; height: 400px"></div>

    <noscript><p><b>JavaScript must be enabled in order for you to use Google Maps.</b>
      However, it seems JavaScript is either disabled or not supported by your browser. To view Google Maps, enable JavaScript by changing your browser options, and then try again.</p>
    </noscript>

<div id="business_reviews">
<!--Begin display ratings / reviews-->
<h3>Customer Reviews for {exp:weblog:entries weblog="bus_dir" limit="1" disable="category_fields|pagination|member_data|trackbacks"}{title}{/exp:weblog:entries}:</h3>
{exp:rating:entries}
<div id="rating">
{if no_results}<h5>Sorry, no ratings or reviews for this business yet.  You could be the first!</h5>{/if}
<p class="rating_submitted_date">Submitted on {rating_date format="%F %n, %Y at %g:%i %a"}</p>
{if screen_name}
<p class="rating_reviewer">{if avatar}<img class="icon" align="left" src="{avatar_url}" width="48px" height="48px" />{/if} <a href="{path=user/profile}{member_id}/">{screen_name}</a> {stars}{rating}{/stars}</p>
{if:else}
<p class="rating_reviewer"><b>{name}</b> {stars}{rating}{/stars}</p>
{/if}
<p class="rating_review">{review}</p>
<p class="rating_helpful">Was this review helpful? <a href="{path='business_directory/vote'}{rating_id}/yes/?height=100&width=300" class="thickbox" title="Thanks for voting!"">Yes</a> | <a href="{path='business_directory/vote'}{rating_id}/no/?height=100&width=300" class="thickbox" title="Thanks for voting!"">No</a> {exp:rating:rating_rev_stats rating_id="{rating_id}"} {y} ({percent_y}%) People found this review to be helpful and {n} ({percent_n}%) people found this review to be of no help for {total} votes.{/exp:rating:rating_rev_stats}
</p></div>
{/exp:rating:entries}
<!--End display ratings / reviews-->

<!--Begin Submit a rating / review code-->
<div id="add_rating">
<h4>Submit a review for {exp:weblog:entries weblog="bus_dir" limit="1" disable="category_fields|pagination|member_data|trackbacks"}{title}{/exp:weblog:entries}:</h4>
{exp:rating:form form_name="Business Ratings" required="rating" require_membership="no" allow_duplicates="no" status="open" return="business_directory/listing/{segment_3}"}

{if logged_out}
<p><label for="name">Name:</label> <input type="text" name="name" id="name" value="{name}" /></p>
<p><label for="email">Email Address:</label> <input type="text" name="email" id="email" value="{email}" /></p>
<p><input type="checkbox" name="save_info" id="save_info" value="y" {save_info} /> <label for="save_info">Remember my contact info for next time?</label></p>
{/if}


<p><label for="rating">Your Rating:</label>
<select name="rating" id="rating">
<option value="5">Excellent</option>
<option value="4">Very Good</option>
<option value="3">Good</option>
<option value="2">Fair</option>
<option value="1">Poor</option>
</select></p>

<p><label for="review">Your Review:</label><textarea name="review" id="review" rows="10" cols="40"></textarea></p>
<p><label for="captcha">Anti-Spam Text:</label>{captcha}</p>
<p><label for="captcha">Retype Anti-Spam Text:</label><input type="text" name="captcha" /></p>

<p><label for="button">Submit Your Review:</label><input class="btn" type="submit" name="submit" value="Submit Your Review!" /></p>
{/exp:rating:form}
</div>
<!--End Submit a rating / review code-->
</div>
</div>
</div>
<div id="business_more_info">

<!--Begin Categories-->
<div class="related_content_box">
{exp:weblog:entries weblog="bus_dir" limit="1" disable="category_fields|pagination|member_data|trackbacks"}
<h2>{title} is categorized:</h2>
{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}
<ul>
{categories}<li><a href="{path=business_directory/cat_listings}">{category_name}</a></li>{/categories}
</ul>
{/exp:weblog:entries}
</div>
<!--End Categories-->

</div>
<div class="clear_both"></div>
</div>
</div>
</div>
<!-- End Business Listing Content-->
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
