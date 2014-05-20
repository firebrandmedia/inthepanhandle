{exp:weblog:entries weblog="media" limit="1" orderby="random" dynamic="off"}
{exp:flvplugin playerpath="/video/player.swf" file="http://www.youtube.com/watch?v={youtube_id}" playernumber="{entry_id}" width="300" height="250" controlbar="none" backcolor="ffffff" frontcolor="7b1e23" plugins=“googlytics-1” skin="/video_skin/stylish_slim.swf" image="http://img.youtube.com/vi/{youtube_id}/0.jpg"}

<div id="player{entry_id}"></div>
{/exp:weblog:entries}
