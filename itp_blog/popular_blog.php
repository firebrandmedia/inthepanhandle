<div id="popular_news_content">
<h1>Popular News, Articles, Commentary & More</h1>
<div id="video_ad">
{embed="embeds/video_ad"}
</div>
<div id="most_popular_news">
<h2>Recent News</h2>
<ul>
{exp:weblog:entries weblog="itp_blog" orderby="date" offset="0" sort="desc" limit="6" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=itp_blog/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular_news">
<h2>Today's Buzz</h3>
<ul>
{exp:tracker:entries weblog="itp_blog" interval="today" limit="6" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/itp_blog/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
