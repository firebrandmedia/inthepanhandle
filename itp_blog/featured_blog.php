<div id="headlines">
<h1>InThePanhandle.com Blog</h1>
<ul>
<li><a href="{path=''media/rss_feeds/"}" title="Subscribe to our RSS Feeds"">RSS Feeds</a></li>
<li><a href="{path=''support/contact_us/"}" title="Contact Us"">Contact Us</a></li>
</ul>
<div class="clear_both"></div>
<div id="featured_headlines">
{exp:weblog:entries weblog="itp_blog" orderby="date" sort="desc" limit="1" dynamic="off" disable="pagination|categories|category_fields||member_data|trackbacks"}
<h2><a href="{title_permalink=itp_blog/article}">{title}</a></h2>
<p class="article_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="itp_blog" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</p>
{if article_thumbnail}{article_thumbnail}<img class="article_image_thumbnail" src="{file_thumb_url}" border="0" alt="image">{/article_thumbnail}{/if}
<p>{exp:char_limit total="120"}{body}{/exp:char_limit}<a href='{title_permalink=itp_blog/article}'>Continue Reading</a></p>
{/exp:weblog:entries}
</div>
<div id="featured_headlines">
{exp:weblog:entries weblog="itp_blog" orderby="date" sort="desc" limit="1" offset="1" dynamic="off" disable="pagination|categories|category_fields||member_data|trackbacks"}
<h2><a href="{title_permalink=itp_blog/article}">{title}</a></h2>
<p class="article_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="itp_blog" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</p>
{if article_thumbnail}{article_thumbnail}<img class="article_image_thumbnail" src="{file_thumb_url}" border="0" alt="image">{/article_thumbnail}{/if}
<p>{exp:char_limit total="120"}{body}{/exp:char_limit}<a href='{title_permalink=itp_blog/article}'>Continue Reading</a></p>
{/exp:weblog:entries}
</div>
<div id="featured_headlines">
{exp:weblog:entries weblog="itp_blog" orderby="date" sort="desc" limit="1" offset="2" dynamic="off" disable="pagination|categories|category_fields||member_data|trackbacks"}
<h2><a href="{title_permalink=itp_blog/article}">{title}</a></h2>
<p class="article_author"><b>Author:</b> {author} | <b>Published:</b> {entry_date format="%m/%d/%Y"} | {exp:tracker:stats weblog="itp_blog" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views</p>
{if article_thumbnail}{article_thumbnail}<img class="article_image_thumbnail" src="{file_thumb_url}" border="0" alt="image">{/article_thumbnail}{/if}
<p>{exp:char_limit total="120"}{body}{/exp:char_limit}<a href='{title_permalink=itp_blog/article}'>Continue Reading</a></p>
{/exp:weblog:entries}
</div>
<div class="clear_both"></div>
</div>
