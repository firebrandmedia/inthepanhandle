<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | Restaurant Menus | InThePanhandle.com | Your Eastern WV Website</title>
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

