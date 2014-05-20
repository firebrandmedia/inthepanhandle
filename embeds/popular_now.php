<div id="popular_now">
<h1>Popular Today</h1>
<ul>
{exp:tracker:entries weblog="news|bus_dir|event_cal|video_tutorials|itp_blog" show_expired="no" status="open" interval="today" limit="5" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
  <li><a href="{tracker:comment_url_title_auto_path}" title="{tracker:title}">{tracker:title}</a></li>
{/exp:tracker:entries}
</ul>
</div>
