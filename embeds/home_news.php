<div id="headlines">
<h1>Headlines</h1>
<ul>
<li><a href="{path=''news/send_us_news"}?height=460&width=380" class="thickbox" title="Send us news"">Send us news</a></li>
</ul>
<div class="clear_both"></div>
<div id="featured_news">
{exp:weblog:entries weblog="news" orderby="date" sort="desc" limit="1" dynamic="off" category="281" disable="pagination|category_fields||member_data|trackbacks"}
<h2><a href="{title_permalink=news/article}">{title}</a></h2>
{if article_thumbnail}{article_thumbnail}<img class="article_image_thumbnail" src="{file_thumb_url}" border="0" alt="image">{/article_thumbnail}{/if}
<p>{exp:char_limit total="120"}{body}{/exp:char_limit}<a href='{title_permalink=news/article}'>Continue Reading</a></p>
{/exp:weblog:entries}
</div>
<div id="recent_news">
<h2>Recent Articles</h2>
<ul>
{exp:weblog:entries weblog="news" orderby="date" offset="0" sort="desc" limit="6" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=news/article}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
<div id="most_popular">
<h2>Most Popular Articles, last 7 days</h2>
<ul>
{exp:tracker:entries weblog="news" interval="week" limit="6" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
   <li><span class="views">{tracker:total_views}</span><a href="{path="site_index"}/news/article/{tracker:url_title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
