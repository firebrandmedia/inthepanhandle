<head>

<!-- Google Map -->
{exp:weblog:entries weblog="bus_dir" limit="1"}
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
	  var marker = createMarker(point,"{address}","<a href='{comment_url_title_auto_path}'>{title}</a><br>{address}<br>{city},{state} {zip}")

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
<!-- Google Map End -->
</head>

<body onload="initialize()">

<!-- Outside of Entries Tag -->
<div id="map_canvas" style="width: 642px; height: 400px"></div>

    <noscript><p><b>JavaScript must be enabled in order for you to use Google Maps.</b>
      However, it seems JavaScript is either disabled or not supported by your browser. To view Google Maps, enable JavaScript by changing your browser options, and then try again.</p>
    </noscript>

</body>
