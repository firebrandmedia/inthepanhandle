{exp:fbc:prepare_page}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">

{header_css_js}

<!-- Nivo Slider Script -->

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
        pauseTime:5000, // How long each slide will show
        startSlide:0, // Set starting Slide (0 index)
        directionNav:true, // Next & Prev navigation
        directionNavHide:true, // Only show on hover
        controlNav:true, // 1,2,3... navigation
        keyboardNav:true, // Use left & right arrows
        pauseOnHover:true, // Stop animation while hovering
        manualAdvance:false, // Force manual transitions
        captionOpacity:0.8, // Universal caption opacity
        prevText: 'Prev', // Prev directionNav text
        nextText: 'Next', // Next directionNav text
        beforeChange: function(){}, // Triggers before a slide transition
        afterChange: function(){}, // Triggers after a slide transition
        slideshowEnd: function(){}, // Triggers after all slides have been shown
        lastSlide: function(){}, // Triggers when last slide is shown
        afterLoad: function(){} // Triggers when slider has loaded
    });
});
</script>

<!-- Nivo Slider Script -->

{exp:shrimp:meta_tag template="n" entry_id="{entry_id}"}
</head>
<body id="news">
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
<div id="advertising">
<div id="ads">

</div>
</div>
<div id="body_content">
<div id="article_content">

{exp:weblog:entries weblog="news" disable="category_fields|pagination|trackbacks"}

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

<!-- Article Body Begin -->
<h1>{title}</h1>
<p class="article_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="news" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views | Short URL: <a href="http://itpwv.com/local{exp:shrimp:relative_url template="n" entry_id="{entry_id}"}">http://itpwv.com/local{exp:shrimp:relative_url template="n" entry_id="{entry_id}"}</a></p>
<div id="share">
{exp:fbc:like
      href="{url_title_path='news/article'}"
      send="true"
      layout="standard"
      width="650"
      show_faces="false"
      action="like"
      colorscheme="light"
      font="arial"
}
</div>

<span class="edit_this">{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}" class="edit_this"}</span>

<!-- Article Images Start -->

{if article_images}

{if "{article_images:total_rows}" <= 1}
{article_images}{exp:imgsizer:size src="{article_image}" width="500"}
<img class="article_image"  src="{sized}" />{/exp:imgsizer:size}{/article_images}

{if:else}

{if article_images_slideshow == "create"}

<div class="slider-wrapper theme-default">
<div id="slider" class="nivoSlider">

{article_images}
	{exp:imgsizer:size src="{article_image}" width="500" height="400"}<img src="{sized}" />{/exp:imgsizer:size}
{/article_images}

</div>
</div>

{if:else}

<!--Do not create slideshow-->

{/if}

{/if}
{/if}

<!-- Article Images End -->


{body}

{exp:tracker:pixeltrack weblog="news" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}

 {exp:fbc:comments
      href="{url_title_path=news/article'}"
      num_posts="8"
      width="680"
      colorscheme="light"
   }

{/exp:weblog:entries}

<!-- Article Body End -->

<div class="clear_both"></div>
<div id="share">

</div>
</div>

<div id="related_content">

{exp:weblog:entries weblog="news" disable="category_fields|pagination|trackbacks"}
<div class="author_content_box">
<h3>About the Author</h3>
{if photo}
<img src="{photo_url}" width="{photo_image_width}" height="{photo_image_height}" alt="{author}'s photo" />
{/if}
{if avatar}
<img src="{avatar_url}" width="{avatar_image_width}" height="{avatar_image_height}" alt="{author}'s avatar" />
{/if}
<ul>
<li><b>Author:</b> {author}</li>
{if bio}<li><b>Bio:</b> {bio}</li>{/if}
{if url}<li><b>URL:</b> <a href="{url}" title="Visit {author}'s website.">{url}</a></li>{/if}
</ul>
{/exp:weblog:entries}
</div>

<div class="related_content_box">
<h3>More By This Author</h3>
<ul>
{exp:weblog:entries weblog="news" limit="10" disable="categories|category_fields|pagination|member_data|trackbacks"}
{embed="embeds/more_by_author" author_id="{author_id}" not_entry="{entry_id}"}
{/exp:weblog:entries}
</ul>
</div>
</div>


<div class="clear_both"></div>
</div>
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
