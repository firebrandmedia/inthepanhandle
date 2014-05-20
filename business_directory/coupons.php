<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | Coupons | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
<script type="text/javascript" src="/js/swfobject.js"></script>

</head>
<body>
<div id="coupon_wrapper">
<div id="coupon_logo">
<div id="coupon_itp_logo"><img border="0" src="/images/ui/coupon_logo_header.jpg" alt="inthepanhandle.com - the eastern west virginia community website"/>
<ul>
<li><a href="javascript:window.print()">Print</a></li>
<li><a href="javascript:history.go(-1)">Back</a></li>
</ul>
</div>
</div>
<div id="coupon_content">
{exp:weblog:entries weblog="coupons" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks"}
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

<div id="favorite_coupon"><a href="{path='business_directory/favorite_add_coupon'}{entry_id}/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-add.png" title="Save the event to your Favorites" /></a><a href="{path='business_directory/favorite_add_coupon'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a></div>
{if coupon_file != ''}
{if coupon_number}<b>Coupon Number: {coupon_number}</b>{/if}{if expiration_date}<span class="expiration">Expiration Date: {expiration_date format="%m/%d/%Y"}</span>{/if}
<div class="clear_both"></div>
<center><img class="coupon_image" src="{coupon_file}"/></center>
<div class="clear_both"></div>
{/if}

{if coupon_file == ''}
{if coupon_number}<b>Coupon Number: {coupon_number}</b>{/if}{if expiration_date}<span class="expiration">Expiration Date: {expiration_date format="%m/%d/%Y"}</span>{/if}
<div class="clear_both"></div>
<h1>{coupon_offer}</h1>
<p>{coupon_offer_details}</p>
<p class="fine_print">{coupon_fine_print}</p>
{/if}
{exp:tracker:pixeltrack weblog="coupons" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}


{/exp:weblog:entries}
<!--Related Info About Business Start -->
<div class="related_info_box">
{exp:related_entries:entries weblog="bus_dir" direction="reverse" limit="1"}
<h3><a href="{title_permalink=business_directory/listing}">{title}</a></h3>
<ul>
{if address}<b>Address:</b><br /><li> {address}</li>{/if}
<li>{if city}{city}{/if} {if state}{state}{/if}, {if zip}{zip}</li>{/if}
{if manager}<li><b>Contact Person: &nbsp;</b> {manager}</li>{/if}
{if phone}<li><b>Phone:&nbsp; </b> {phone}</li>{/if}
{if fax}<li><b>Fax:</b> &nbsp;{fax}</li>{/if}
{if mobile}<li><b>Mobile:</b>&nbsp; {mobile}</li>{/if}
{if website}<li><b>Website:&nbsp; </b> {website}</li>{/if}
{if email_address}<li><b>Email:&nbsp; </b>  {email_address}</li>{/if}
</ul>
</div>
<div class="related_info_box">

{/exp:related_entries:entries}
</div>
<!--Related Info About Business End -->
<div class="clear_both"></div>
<p class="fine_print">Do you like using these coupons as much as we like supplying them? If so, tell your favorite merchants to get their act together and put their coupons up on InThePanhandle.com!</p>
</div>
</div>
{embed="embeds/footer"}
