<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries rdf="off" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks|custom_fields"}{title}{/exp:weblog:entries} | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="Keep track of updates by viewing the progress of current and past updates to InThePanhandle.com">
<meta name="keywords" CONTENT="updates, version, blog, inthepanhandle.com, firebrand media, css, expressionengine">

{header_css_js}

</head>
<body id="more">
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
<div id="advertising"><div id="ads">

</div></div>
<div id="body_content">
<div id="article_content">

{exp:weblog:entries weblog="itp_blog" disable="category_fields|pagination|member_data|trackbacks"}

<h1>{title}</h1>
<p class="article_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="itp_blog" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</p>

<div id="share">
{lg_social_bookmarks title="{title}" permalink="{permalink="news/article"}"}
    <ul><strong>Share this article:</strong>
      {social_sites}
        <li><a href="{social_site_url}" title="Bookmark on: {social_site_name}"><img border="0" src="/themes/cp_global_images/lg_social_bookmarks/favicons/{social_site_img_url}" alt="{social_site_name} Favicon" /></a></li>
        {/social_sites}
    </ul>
  {/lg_social_bookmarks}<br />
</div>

{summary}
{if article_image}{article_image}<img class="article_image" src="{file_thumb_url}" border="0" alt="{title}">{/article_image}{/if}
{body}
{extended}
{if more_article_images}{more_article_images}<img class="more_images" src="{file_thumb_url}" border="0" alt="{title}">{/more_article_images}{/if}
<img src="{exp:tracker:pixeltrack weblog="itp_blog" entry_id="{entry_id}" entry_identifier="{entry_id}"}" />
<div class="clear_both"></div>
</div>
<div id="related_content">
<div class="related_content_box">
<h3>About this article:</h3>
<ul>
<li><b>Publish Date:</b> {entry_date format="%m/%d/%Y"}</li>
<li><b>Permalink:</b> <a href="{permalink="itp_blog/article"}">{title}</a></li>
<li><b>Category:</b>{categories}{category_image} <a href="{path=itp_blog/category_archives}/">{category_name}</a>{/categories}</li>
</ul>
</div>
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
<li><b>Bio:</b> {bio}</li>
</ul>
</div>
<div class="related_content_box">
<h3>More By This Author</h3>
{exp:weblog:entries weblog="itp_blog" limit="1" disable="categories|category_fields|pagination|member_data|trackbacks"}
<ul>
<li>{embed="embeds/more_by_author" author_id="{author_id}" not_entry="{entry_id}"}</li>
</ul>
</div>
{/exp:weblog:entries}
</div>
<div class="clear_both"></div>
</div>
<div id="back_full"><div id="back"><a href="{path='SITE_INDEX'}/itp_blog/">Back to the InThePanhandle.com Blog</a></div></div>
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
