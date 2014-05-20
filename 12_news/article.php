{exp:fbc:prepare_page}
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>

{header_css_js_12}

{exp:shrimp:meta_tag template="n" entry_id="{entry_id}"}

</head>
<body>

	<div id="top" class="grid_wrapper">

		<div class="header t-all da-all group">
			<div class="m-all da1-da2 logo"><h1>InThePanhandle.com</h1><div class="menu-button"><i class="icon-menu"></i></div></div>

			<div class="navigation mobile group">
			<ul data-breakpoint="600" class="flexnav">
			<li><a href="{path='SITE_INDEX'}"><i class="icon-home"></i>Home</a></li>
			<li><a href="{path='SITE_INDEX'}/12_news/"><i class="icon-doc"></i>Local News</a></li>
			<li><a href="{path='SITE_INDEX'}/12_events/"><i class="icon-calendar"></i>Local Events</a></li>
			<li><a href="{path='SITE_INDEX'}/12_business_directory"><i class="icon-briefcase"></i>Business Directory</a></li>
			<li><a href="{path='SITE_INDEX'}/12_more/"><i class="icon-plus"></i>More</a></li>
			</ul>
			</div>

			<div class="navigation desktop da3-da5 group">
			<ul>
			<li><a href="{path='SITE_INDEX'}/12_news/">News</a></li>
			<li><a href="{path='SITE_INDEX'}/12_events/">Events</a></li>
			<li><a href="{path='SITE_INDEX'}/12_business_directory">Businesses</a></li>
			<li><a href="{path='SITE_INDEX'}/12_more/">More +</a></li>
			{if logged_in}{if avatar}<li><img src="{avatar_url}" width="25px" height="25px" alt="{author}'s photo" />
			{/if}</li>{/if}
			</ul>
			</div>

			<div id="search" class="da6 m-all"><div id="search_box">{exp:search:simple_form weblog="news|bus_dir|event_cal|coupons|products|restaurant_menus" show_future_entries="yes" show_expired="yes" results="10" search_in="everywhere" where="all" no_result_page="search/noresults"}<i class="icon-search"></i>
			<input class="search_txt" type="text" name="keywords" id="keywords" onfocus="if
										        (this.value==this.defaultValue) this.value='';" value="I'm looking for…" maxlength="100"><input type="submit" value="Search" class="search_btn">{/exp:search:simple_form}</div>
			</div>

		</div>

		<div class="body_content da-all group">

			<article class="news_content m-all t-all da2-da4">
				{exp:weblog:entries weblog="news" disable="category_fields|pagination|trackbacks"}
					<h1>{title}</h1>

					<footer class="m-all article_details">
						<ul>
						<li class="author">Author: {author}</li>
						<li class="published">Published: {entry_date format="%m/%d/%Y"}</li>
						<li class="views">{exp:tracker:stats weblog="news" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</li>
						<!--<li class="short">Short URL: <a href="http://itpwv.com/local{exp:shrimp:relative_url template="n" entry_id="{entry_id}"}">http://itpwv.com/local{exp:shrimp:relative_url template="n" entry_id="{entry_id}"}</a></li>-->
						</ul>
					</footer>

					<div class="social_sharing"><div class="pt_open"><div class="pt-social"></div></div></div>

					{if article_images}
					{article_images}{exp:imgsizer:size src="{article_image}" width="480"}
					<img class="article_image"  src="{sized}" />{/exp:imgsizer:size}{/article_images}
					{/if}

					{body}

<!--{exp:tracker:pixeltrack weblog="news" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}-->

					 <!--{exp:fbc:comments
					      href="{url_title_path=news/article'}"
					      num_posts="8"
					      width="100%"
					      colorscheme="light"
					   }-->

			</article>

			<footer class="related m-all t-all da5-da6">
				<h3 class="about">About the Author</h3>
					<span class="profile_photo">{if photo}
					<img src="{photo_url}" width="{photo_image_width}" height="{photo_image_height}" alt="{author}'s photo" />
					{/if}
					{if avatar}
					<img src="{avatar_url}" width="{avatar_image_width}" height="{avatar_image_height}" alt="{author}'s avatar" />
					{/if}</span>
					<ul>
					<li><b>Author:</b> {author}</li>
					{if bio}<li><b>Bio:</b> {bio}</li>{/if}
					{if url}<li><b>URL:</b> <a href="{url}" title="Visit {author}'s website.">{url}</a></li>{/if}
					</ul>
				<h3>More by {author}</h3>
				{/exp:weblog:entries}
				<ul>
					{exp:weblog:entries weblog="news" limit="5" disable="categories|category_fields|pagination|member_data|trackbacks"}
					{embed="12_embeds/more_by_author" author_id="{author_id}" not_entry="{entry_id}"}
					{/exp:weblog:entries}
				</ul>
				<h3>Sign up for "The Weekly"</h3>
				{email_sign_up}
			</footer>

		</div>

		<div class="footer m-all t-all group">
		<ul>
		<li><a href="#top"><i class="icon-up"></i>Back to Top</a></li>
		<li><a href="{path='SITE_INDEX'}"><i class="icon-home"></i>Home</a></li>
		<li><a href="{path='SITE_INDEX'}"><i class="icon-doc"></i>News</a></li>
		<li><a href="{path='SITE_INDEX'}"><i class="icon-calendar"></i>Events</a></li>
		<li><a href="{path='SITE_INDEX'}"><i class="icon-briefcase"></i>Business Directory</a></li>
		<li class="twitter"><a href="http://twitter.com/inthepanhandle"><i class="icon-twitter-bird-1"></i>Twitter</a></li>
		<li class="facebook"><a href="http://facebook.com/inthepanhandle"><i class="icon-facebook-rect"></i>Facebook</a></li>
		<li class="flickr"><a href="http://flickr.com/inthepanhandle"><i class="icon-flickr"></i>Flickr</a></li>
		<li class="copyright"><a href="http://firebrand-media.com"><i class="copyright_icon">&copy;</i>2004 - {current_time format="%Y"} Firebrand Media, LLC</a></li>
		</ul>
		</div>

	</div>

<!-- FlexNav JS Start -->
<script type="text/javascript" src="/js/jquery.flexnav.js"></script>
<script>
			$(".flexnav").flexNav();
		</script>
<!-- FlexNav JS End -->

<!--PunchTab Code Start-->
<script type="text/javascript" charset="utf-8">
  var _ptq = _ptq || [];
  var _punchtab_settings = {
    key: "51f03911f9ca7807df1d76dbffcfca0c",
    display: "inline",
    earningmap: false
  };

  (function() {
    var pt = document.createElement('script'); pt.type = 'text/javascript'; pt.async = true;
    pt.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'static.punchtab.com/js/pt.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(pt, s);
  })();
</script>
<!--PunchTab Code End-->
</body>
</html>
