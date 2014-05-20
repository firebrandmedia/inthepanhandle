{exp:fbc:prepare_page}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{exp:weblog:entries weblog="event_cal" disable="category_fields|pagination|member_data|trackbacks" limit="1" show_future_entries="yes" show_expired="yes"}{title}{/exp:weblog:entries} | Upcoming Local Events | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">

{header_css_js}

{exp:shrimp:meta_tag template="e" entry_id="{entry_id}"}
</head>
<body id="event_cal">
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
<div id="advertising">
<div id="ads">

</div>
</div>
<div id="body_content">

<div id="event_calendar_details">
{exp:weblog:entries weblog="event_cal" show_future_entries="yes" limit="1" show_expired="yes" disable="pagination|member_data|trackbacks"}

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
      <a class="signin menu-open" href="login">Sign-In to Save Event</a><br />
      <a class="createaccount" href="http://www.inthepanhandle.com/local/users/register/">Or Create an Account</a>
</span>
{/if}
<!--Favorite End-->

<h1 class="title">{title}</h1>

<p class="article_author"><b>Author:</b> {author} <!--| <b>Published:</b> {entry_date format="%m/%d/%Y"}--> | {exp:tracker:stats weblog="event_cal" entry_id="{entry_id}"}{tracker:alltime}{/exp:tracker:stats} Views | Short URL: <a href="http://itpwv.com/local{exp:shrimp:relative_url template="e" entry_id="{entry_id}"}">http://itpwv.com/local{exp:shrimp:relative_url template="e" entry_id="{entry_id}"}</a></p>
<div id="share">
{exp:fbc:like
      href="{url_title_path='events/details'}"
      send="true"
      layout="standard"
      width="650"
      show_faces="false"
      action="like"
      colorscheme="light"
      font="arial"
}
</div>

<span class="edit_this">{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}"}</span>

{if event_image}{exp:imgsizer:size src="{event_image}" width="400"}
<img class="article_image"  src="{sized}" />{/exp:imgsizer:size}{/if}

{event_details}

{exp:tracker:pixeltrack weblog="event_cal" entry_id="{entry_id}" entry_identifier="{entry_id}"}<img src="{pixeltrack_url}" />{/exp:tracker:pixeltrack}

 {exp:fbc:comments
      href="{url_title_path=events/details'}"
      num_posts="8"
      width="680"
      colorscheme="light"
   }

</div>
<div id="event_sidebar">

<div class="event_details">
<h2>When:</h2>
<ul>

{exp:repeet:list_dates entry_id="{entry_id}" repeet_from="today" repeet_to="1 year" event_limit=”5” repeet_include_dates_field="event_dates" repeet_exclude_dates_field="exclude_dates" repeet_interval_field="repeat_interval"}
  <li><a href="http://www.inthepanhandle.com/local/events/{repeet_start_time format="%Y/%m/%d/"}" title="View other events happening on {repeet_start_time format="%F %j, %Y"}"> {repeet_start_time format="%l, %F %d, %Y %g:%i %A"}</a></li>
{if repeet_no_results}
<li>This event has already occurred.</li>
{/if}
{/exp:repeet:list_dates}

                    {if event_duration}<li><b>Duration:</b> {event_duration} hours</li>{/if}
                    </ul>
                </div>

                 {if event_location}<div class="event_details">
                 <h2>Where:</h2>
                 <ul>
                 <li><b>Location:</b><br />  {event_location}</li>
                 </ul>
                </div>{/if}

                {if event_cost}<div class="event_details">
                 <h2>How Much:</h2>
                 <ul>
                 <li><b>Cost:</b> {event_cost}</li>
                 </ul>
                 </div>{/if}

                <div class="event_details">
                   <h2>Contact Info:</h2>
                    <ul>
                    {if event_contact_name}<li><b>Contact:</b> {event_contact_name}</li>{/if}
                    {if event_contact_email}<li><b>Email:</b> {event_contact_email}</li>{/if}
                    {if event_website}<li><b>Website:</b> {event_website}</li>{/if}
                    {if event_contact_phone}<li><b>Phone:</b> {event_contact_phone}</li>{/if}
                    {if event_doc}<li><b>Download(s):</b> <a href="http://www.inthepanhandle.com{event_doc}">{title} Download</a></li>{/if}
                   </ul>
                </div>

</div>
{/exp:weblog:entries}

<div class="clear_both"></div>
</div>

<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both"}
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
{embed="embeds/footer"}
