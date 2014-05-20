<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
<script type="text/javascript" src="/js/swfobject.js"></script>

</head>
<body id="business">
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
<div id="advertising">
<div id="ads">


</div>
</div>

<!-- Begin Business Listing Code -->

<div id="body_content">
<div id="business_listing">
<div class="jqmAlert" id="ex3b">

<div id="ex3b" class="jqmAlertWindow">
    <div class="jqmAlertTitle clearfix">
    <a href="#" class="jqmClose"><em>Close</em></a>
  </div>

  <div class="jqmAlertContent">
  <p>Please wait... <img src="http://www.inthepanhandle.com/images/ui/throbber.gif" alt="loading" /></p>
  </div>

</div>

</div>
<div id="business_info">
<!--Business Listing -->

{exp:weblog:entries weblog="products" limit="1"}
{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}
<h1><a href="{path='business_directory/favorite_add_product'}{entry_id}/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-add.png" title="Save the event to your Favorites" /></a><a href="{path='business_directory/favorite_add_product'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a> {title}</h1>
<div id="bus_rating">Price: {product_price}</div>

{if prod_image}{exp:imgsizer:size src="{prod_image}" width="400"}
<img class="bus_logo"  src="{sized}" />{/exp:imgsizer:size}{/if}

{prod_description}

{exp:tracker:pixeltrack weblog="products" entry_id="(entry_id)" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}

{/exp:weblog:entries}
</div>

<div id="business_more_info">
{exp:related_entries:entries weblog="bus_dir" direction="reverse"}
{if file}<div class="contact_info_box_alt">
<img src="{file_thumb}">
</div>
<div class="contact_info_box_alt">
<h2>InThePanhandle.com Business Listing:</h2>
<ul>
<li>{exp:related_entries:entries weblog="bus_dir" direction="reverse"}<a href="{title_permalink=business_directory/listing}">{title}</a>{/exp:related_entries:entries}</li>
</ul>
</div>
{/if}
<div class="contact_info_box_alt">
<h2>Offline Contact Information</h2>
<ul>
{if address}<b>Address:</b><br /><li> {address}</li>{/if}
<li>{if city}{city}{/if} {if state}{state}{/if}, {if zip}{zip}</li>{/if}
{if manager}<li><b>Contact Person:</b> {manager}</li>{/if}
{if phone}<li><b>Phone:</b> {phone}</li>{/if}
{if fax}<li><b>Fax:</b> {fax}</li>{/if}
{if mobile}<li><b>Mobile:</b> {mobile}</li>{/if}
</ul>
</div>

<div class="contact_info_box_alt">
<h2>Online Contact Information</h2>
<ul>
{if website}<li><b>Website:</b> {website}</li>{/if}
{if email_address}<li><b>Email:</b> {email_address}</li>{/if}
{if twitter}<li><b>Twitter:</b> <a href="http://www.twitter.com/{twitter}">@{twitter}</a></li>{/if}
{if linkedin}<li><b>LinkedIn:</b> {linkedin}</li>{/if}
{if youtube}<li><b>YouTube:</b> {youtube}</li>{/if}
</ul>
</div>

{/exp:related_entries:entries}

</div>
<div class="clear_both"></div>
</div>
</div>
</div>

<!-- End Business Listing Content-->
<div id="back_full"><div id="back">{exp:related_entries:entries weblog="bus_dir" direction="reverse"}<a href="{title_permalink=business_directory/listing}">Back to {title}</a>{/exp:related_entries:entries}</div></div>
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
