{exp:fbc:prepare_page}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

{exp:lg_better_meta_pl:template url_title="{segment_3}"}

{header_css_js}

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
{exp:fbc:like
      href="{url_title_path='business_directory/listing'}"
      send="true"
      layout="standard"
      width="650"
      show_faces="false"
      action="like"
      colorscheme="light"
      font="arial"
}
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
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both">
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>

{embed="embeds/footer"}
