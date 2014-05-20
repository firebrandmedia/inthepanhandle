<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">

{header_css_js}

<script type="text/javascript">
$(window).load(function() {
    $('#slider').nivoSlider({
        effect:'fade', // Specify sets like: 'fold,fade,sliceDown'
        pauseTime:3000, // How long each slide will show
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

<!--Begin YouTube Video-->
{exp:related_entries:entries weblog="media" status="open" sort="asc" limit="1"}
{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}
{if youtube_id}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.youtube.com/watch?v={youtube_id}" playernumber="{entry_id}" width="670" height="385" plugins=“googlytics-1” skin="/video_skin/modieus.swf" backcolor="ffffff" frontcolor="7B1E23" image="http://img.youtube.com/vi/{youtube_id}/0.jpg"}
<div class="news_video">
<div id="player{entry_id}"></div>
</div>
{/if}
{/exp:related_entries:entries}
<!--End YouTube Video-->

<!--Begin Video-->
{exp:related_entries:entries weblog="media" status="open" sort="asc" limit="1"}
{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}
{if flv_video}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.inthepanhandle.com/images/uploads/video/{flv_video}" playernumber="{entry_id}" width="670" height="385" skin="/video_skin/modieus.swf" backcolor="ffffff" frontcolor="7B1E23" image="{flv_poster_frame}"}
<div class="news_video">
<div id="player{entry_id}"></div>
</div>
{/if}
{/exp:related_entries:entries}
<!--End Video-->

<!--Begin Audio-->
{exp:related_entries:entries weblog="audio" status="open" sort="asc" limit="1"}
{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}
{if mp3}
<div class="news_audio">
<b>Listen to: {title}</b> <object type="application/x-shockwave-flash" data="http://www.inthepanhandle.com/audio/player.swf" id="audioplayer" height="24" width="300"><br>
<param name="movie" value="http://www.inthepanhandle.com/audio/player.swf">
<param name="FlashVars" value="playerID=2&amp;bg=0xF2F2F2&amp;leftbg=0x7b1e23&amp;lefticon=0xF2F2F2&amp;rightbg=0xb31e22&amp;
rightbghover=0xA81E42&amp;righticon=0xF2F2F2&amp;righticonhover=0xFFFFFF&amp;text=0xb31e22&amp;
slider=0xb31e22&amp;track=0xB1B1B1&amp;border=0xFFFFFF&amp;loader=0xb31e22&amp;soundFile={mp3}">
<param name="quality" value="high">
<param name="menu" value="false">
<param name="wmode" value="transparent"></object>
</div>
{/if}
{/exp:related_entries:entries}
<!--End Audio-->

{exp:weblog:entries weblog="news" disable="category_fields|pagination|trackbacks"}

<!-- Image Slider Start -->
{if article_images}

{if "{article_images:total_rows}" <= 1}
{article_images}{exp:ed_imageresizer
image="{article_image}"
maxWidth="680"
maxHeight="400"
cropratio="680:400"
forceWidth="yes"
forceHeight="yes"
class="article_"
alt="{title} images"}{/article_images}
{if:else}
<div class="slider-wrapper theme-default">
    <div class="ribbon"></div>
    <div id="slider" class="nivoSlider">
    {article_images}
        {exp:ed_imageresizer
image="{article_image}"
maxWidth="500"
forceWidth="yes"
class="article_image"
alt="{title} images"}
    {/article_images}
    </div>
</div>
{/if}
{/if}
<!-- Image Slider End -->

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

<p class="article_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="news" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</p>

<span class="edit_this">{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}" class="edit_this"}</span>

{body}

<img src="{exp:tracker:pixeltrack weblog="news" entry_id="{entry_id}" entry_identifier="{entry_id}"}" />

{/exp:weblog:entries}

<div class="clear_both"></div>
<div id="share">

<!--Comment Form Begin-->
<div id="comments">
{exp:comment:form preview="news/comment_preview?height=400&width=400"}
{exp:comment:entries sort="asc" limit="1"}
<h2>Comments</h2>
{/exp:comment:entries}
{exp:comment:entries sort="asc" limit="20"}
<div class="{switch="comment_one|comment_two"}">
{comment}
<p class="comment_by">{if avatar}
<img class="comment_avatar" align="absmiddle" src="{avatar_url}" width="40" height="40" alt="{author}'s avatar" />
{/if}<b>{url_as_author}</b> on {comment_date format="%m/%d/%Y"}</p>
</div>
{/exp:comment:entries}
<h2>Reactions? Thoughts? Leave a comment!</h2>
{if logged_out}
<p><label for="name">Name:</label> <input class="txt" type="text" name="name" value="{name}" /></p>

<p><label for="email">Email:</label> <input class="txt" type="text" name="email" value="{email}" /></p>

<p><label for="location">Location:</label> <input class="txt" type="text" name="location" value="{location}" /></p>

<p><label for="url">URL:</label> <input class="txt" type="text" name="url" value="{url}" /></p>


{/if}

<p><textarea class="txtarea" name="comment" rows="10">{comment}</textarea></p>

<p><label for="save_info">Remember my personal information</label> <input type="checkbox" name="save_info" value="yes" {save_info} /></p>

<p><label for="notify_me">Notify me of follow-up comments?</label> <input type="checkbox" name="notify_me" value="yes" {notify_me} /></p>

<p><label for="captcha">Anti-Spam text:</label>&nbsp;{captcha}</p>
<p><label for="captcha">Input the text that you see above:</label>&nbsp;<input class="txt" type="text" name="captcha" value="" /></p>

<input class="btn" type="submit" name="submit" value="Submit" />
<!--<input type="submit" name="preview" value="Preview" />-->

{/exp:comment:form}
</div>
<!--Comment Form End-->

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

<!--Business Listing Info-->
{exp:related_entries:entries weblog="bus_dir" direction="reverse" limit="1"}
{if no_results}
{/if}
<div class="related_content_box">
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
{/exp:related_entries:entries}
<!--Business Listing Info End-->

<div class="related_content_box">
<h3>More By This Author</h3>
<ul>
{exp:weblog:entries weblog="news" limit="10" disable="categories|category_fields|pagination|member_data|trackbacks"}
<li>{embed="embeds/more_by_author" author_id="{author_id}" not_entry="{entry_id}"}</li>
{/exp:weblog:entries}
</ul>
</div>
</div>


<div class="clear_both"></div>
</div>
<div id="back_full"><div id="back"><a href="{path='SITE_INDEX'}/news/">Back to the InThePanhandle.com News Page</a></div></div>
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
