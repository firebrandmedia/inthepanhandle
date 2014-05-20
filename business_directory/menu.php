<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | Restaurant Menus | InThePanhandle.com | Your Eastern WV Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}

<!-- Google Map -->
{exp:related_entries:entries weblog="bus_dir" direction="reverse" limit="1"}
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
//<![CDATA[

function initialize() {
  // create the map
  var myOptions = {
    zoom: 13,
  // Manually enter the LatLng where you want the centre of the map
    center: new google.maps.LatLng({latitude},{longitude}),
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"),
                                myOptions);

  google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

  // Add markers to the map
  // add the points

  // ******* Collect data from EE (edit to match your fields) *******

	  var point = new google.maps.LatLng({latitude},{longitude});
	  var marker = createMarker(point,"{address}","{address}<br>{city}<br>Read the related article<br><a href='{comment_url_title_auto_path}'>{title}</a>")

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
{/exp:related_entries:entries}
<!-- Google Map End -->

</head>
<body onload="initialize()">
<div id="coupon_wrapper">
<div id="coupon_logo">
<div id="coupon_itp_logo"><img border="0" src="/images/ui/coupon_logo_header.jpg" alt="inthepanhandle.com - the eastern west virginia website"/>
<ul>
<!--<li><a href="javascript:window.print()">Print</a></li>-->
<li><a href="javascript:history.go(-1)">Back</a></li>
</ul>
</div>
</div>
<div id="coupon_content">
{exp:weblog:entries weblog="restaurant_menus" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks"}
<h1>{title}</h1>
<p><a href="{menu_download}">Download / View {title} Menu</a></p>
<p class="fine_print">Menu's Subject to Change. Please contact restaurant for current menu.</p>
{exp:tracker:pixeltrack weblog="restaurant_menus" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}
{/exp:weblog:entries}
<!--Related Info About Business Start -->
<!--<div class="related_info_box">
{exp:related_entries:entries weblog="bus_dir" direction="reverse" limit="1"}
<h3><a href="{title_permalink=business_directory/listing}">{title}</a></h3>
<ul>
{if address}<b>Address:</b><br /><li> {address}</li>{/if}
<li>{if city}{city}{/if} {if state}{state}{/if}, {if zip}{zip}</li>{/if}
{if manager}<li><b>Contact Person: </b> {manager}</li>{/if}
{if phone}<li><b>Phone: </b> {phone}</li>{/if}
{if fax}<li><b>Fax:</b> {fax}</li>{/if}
{if mobile}<li><b>Mobile:</b> {mobile}</li>{/if}
{if website}<li><b>Website: </b> {website}</li>{/if}
{if email_address}<li><b>Email: </b>  {email_address}</li>{/if}
</ul>
</div>
<div class="related_info_box">

<div id="map_canvas" style="width: 280px; height: 235px"></div>

    <noscript><p><b>JavaScript must be enabled in order for you to use Google Maps.</b>
      However, it seems JavaScript is either disabled or not supported by your browser. To view Google Maps, enable JavaScript by changing your browser options, and then try again.</p>
    </noscript>
{/exp:related_entries:entries}
</div>-->
<!--Related Info About Business End -->
<div class="clear_both"></div>
<p class="fine_print">Do you like using these restaurant menus as much as we like supplying them? If so, tell your favorite restaurants to get their act together and put their menus up on InThePanhandle.com!</p>
</div>
</div>
{embed="embeds/footer"}
