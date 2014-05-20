{exp:weblog:entries weblog="media" limit="1" category="not 383" orderby="random" dynamic="off"}
{if youtube_id}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.youtube.com/watch?v={youtube_id}" playernumber="{entry_id}" width="300" height="250" controlbar="none" backcolor="ffffff" frontcolor="7b1e23" plugins=“googlytics-1” skin="/video_skin/stylish_slim.swf" image="http://img.youtube.com/vi/{youtube_id}/0.jpg"}
{/if}
{if flv_video}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.inthepanhandle.com/images/uploads/video/{flv_video}" playernumber="{entry_id}" width="300" height="250" skin="/video_skin/stylish_slim.swf" controlbar="none" backcolor="ffffff" frontcolor="7b1e23" image="{flv_poster_frame}"}
{/if}
<div id="player{entry_id}"></div>
{title}
{/exp:weblog:entries}
