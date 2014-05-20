<h1>InThePanhandle.com Video Tutorials</h1>
<div id="video_tutorials">
<div class="featured_video">
<h2>Featured Tutorial</h2>
{exp:weblog:entries weblog="video_tutorials" limit="1" orderby="random" dynamic="off"}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.youtube.com/watch?v={youtube_id}" playernumber="{entry_id}" width="600" height="480" backcolor="7b1e23" frontcolor="ffffff" skin="/video_skin/stylish_slim.swf" image="http://img.youtube.com/vi/{youtube_id}/0.jpg"}

<div id="player{entry_id}"></div>
{/exp:weblog:entries}
</div>
<div id="most_popular_videos">
</div>
<div class="clear_both"></div>
</div>
