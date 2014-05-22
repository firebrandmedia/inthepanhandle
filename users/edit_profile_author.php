{if logged_in}
<div id="advertising"></div>
<div id="body_content">
<div id="edit_user_profile">
<div id="tabs">
    <ul>
        <li><a href="#mystuff"><span>My Content</span></a></li>
        <li><a href="#myfavorites"><span>My Favorites</span></a></li>
        <li><a href="#myprofile"><span>My Profile</span></a></li>
    </ul>
<div id="mystuff">
<p class="add_content">
<a href="http://www.inthepanhandle.com/itpcore/" title="Click to go to your control panel to start adding articles or events." target="_blank"><img class="edit_link"  align="absmiddle" src="http://www.inthepanhandle.com/images/icons/add.png" />Add articles or events to InThePanhandle.com</a></p>
<p class="profileinstructions"><img class="edit_link" align="absmiddle" src="http://www.inthepanhandle.com/themes/edit_this_themes/images/red_icon.gif" />Edit your content below by clicking on the red pencil.</p>
<ul>{exp:weblog:entries author_id="CURRENT_USER" dynamic="off" status="open|closed"}
<li><span class="edit_link">{exp:edit_this:entry entry_id="{entry_id}" weblog_id="{weblog_id}" author_id="{author_id}" icon="red"}</span>{title}</li>
{/exp:weblog:entries}
</ul>
    </div>

<div id="myfavorites">

<div class="jqmAlert" id="ex3b">

<div id="ex3b" class="jqmAlertWindow">
    <div class="jqmAlertTitle clearfix">
    <a href="#" class="jqmClose"><em>Close</em></a>
  </div>

  <div class="jqmAlertContent">
  <p>Please wait... <img src="http://www.inthepanhandle.com/images/ui/throbber.gif" alt="loading" /></p>
  </div>

</div>

</div>
        <ul>

        {exp:favorites:entries weblog="event_cal|news|restaurant_menus|bus_dir|coupons|products" favorites_count="yes" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
       <p class="profileinstructions"><img class="edit_link"  align="top" border="0" src="/images/ui/fav-add.png" title="Save the event to your Favorites" /> You have a total of {favorites_count} Entries saved to your Favorites!</p>
        {/exp:favorites:entries}
        <ul>
{exp:favorites:entries weblog="bus_dir" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
 <li><span class="edit_link"><img src="/images/icons/fav_icons/bus_dir.png" title="Favorite Business Listings" /></span><a href="{title_permalink='business_directory/listing'}">{title}</a> <!--<b><a href="{path='business_directory/favorite_add'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a></b>--></li>
{/exp:favorites:entries}

{exp:favorites:entries weblog="restaurant_menus" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
 <li><span class="edit_link"><img src="/images/icons/fav_icons/menu.png" title="Favorite Restaurant Menus" /></span><a href="{title_permalink='business_directory/menu'}">{title}</a><!--<b><a class="ex3bTrigger" href="{path='business_directory/favorite_add_restaurant'}{entry_id}/delete/" id="{entry_id}" ><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a></b>--></li>
{/exp:favorites:entries}

{exp:favorites:entries weblog="coupons" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
 <li><span class="edit_link"><img src="/images/icons/fav_icons/coupon.png" title="Favorite Coupons" /></span><a href="{title_permalink='business_directory/coupons'}">{title}</a><!--<b><a href="{path='business_directory/favorite_add_coupon'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a></b>--></li>
{/exp:favorites:entries}

{exp:favorites:entries weblog="products" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
 <li><span class="edit_link"><img src="/images/icons/fav_icons/products.png" title="Favorite Products" /></span><a href="{title_permalink='business_directory/product'}">{title}</a><!--<b><a href="{path='business_directory/favorite_add_product'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a></b>--> </li>
{/exp:favorites:entries}

{exp:favorites:entries weblog="event_cal" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
 <li><span class="edit_link"><img src="/images/icons/fav_icons/event_cal.png" title="Event Calendar Favorites" /></span><a href="{title_permalink='events/details'}">{title}</a><!--<b><a href="{path='events/favorite_add'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a></b>--></li>
{/exp:favorites:entries}

{exp:favorites:entries weblog="news" show_expired="yes" show_future_entries="yes" dynamic="off" status="open|new"}
 <li><span class="edit_link"><img src="/images/icons/fav_icons/news.png" title="News Favorites" /></span><a href="{title_permalink='news/article'}">{title}</a><!--<b><a href="{path='news/favorite_add'}{entry_id}/delete/" id="{entry_id}" class="ex3bTrigger"><img border="0" src="/images/ui/fav-delete.png" title="Remove from my Favorites" /></a> </b>--></li>

{/exp:favorites:entries}
</ul>
    </div>

    <div id="myprofile">
        {if logged_in}
{exp:user:edit return="users/edit_profile"}
<div class="edit_page_section">
<h2>Edit Your Avatar</h2>
<div id="avatar_image">
<p>Did you know that adding a profile image increases click through rates by 78%? Err, we just made that up, but we're pretty sure that people would like to see your image or business logo as opposed to a blank white space. <a href="http://bokardo.com/archives/how-important-are-avatars/" title="How Important are Avatars? Bokardo.com, Social Web Design">How important are avatars? "Trust is a crucial byproduct of avatars…"</a><br /><br /><b><a href="{path=''users/edit_avatar"}?height=220&width=400" class="thickbox" title="Edit Your Profile Image"">Edit your profile image (avatar).</a></b></p>

{if avatar_url}
<img class="avatar" src="{avatar_url}{avatar_filename}" />
{/if}

{if avatar_url == ''}
<img class="avatar" src="http://www.inthepanhandle.com/images/avatars/default_set/background_avatar.png" />
{/if}

<div class="clear_both"></div>
</div>
</div>
<div class="edit_page_section">
<h2>Edit Your Public Profile</h2>
<p class="profileinstructions">Your public profile and your avatar image above, are associated with all articles that you write and publish in the 'News' section on InThePanhandle.com. By including a link to your website, Facebook page, or Twitter account, users can learn more about you and how to keep up with you, your writing or your business.</p>
<p>To edit your profile, simply edit the fields below, input your current password and click the Submit Profile Changes button.</p>
<p><label for="email">Email:</label> <input class="txt" name="email" value="{email}" /></p>
<p><label for="username">Username:</label> <input class="txt" name="username" value="{username}" /></p>
<p><label for="screen_name">Screen Name:</label> <input class="txt" name="screen_name" value="{screen_name}" /></p>
<p><label for="url">Website:</label> <input class="txt" name="url" value="{url}" /></p>
<p><label for="bio">Bio:</label> <textarea name="bio" class="txt" cols="46" rows="10" >{bio}</textarea></p>
<p><label for="location">Location:</label> <input class="txt" name="location" value="{location}" /></p>
<p><label for="occupation">Occupation:</label> <input class="txt" name="occupation" value="{occupation}" /></p>
<p><label for="password">Current Password:</label> <input class="txt" type="password" name="current_password" /></p>
<p><label for="password">Create a New Password?:</label> <input class="txt" type="password" name="password" /></p>
<p><label for="password">Password Confirm:</label> <input class="txt" type="password" name="password_confirm" /></p>
<p><label for="accept_user_email">Join ITP Email List:</label> <input type="checkbox" name="accept_user_email" value="y" {if accept_user_email == "y"}checked="checked"{/if} /></p>
<p><input type="submit" class="btn" value="Submit Profile Changes" /></p>
{/exp:user:edit}
{/if}
    </div>
</div>
</div>
</div>

<div id="related_content">

<div class="related_content_box">
<h3>Quick Links</h3>
<ul>
<!--<li><a href="{path='SITE_INDEX'}/support/marketing" title="Internet Marketing Tips for InThePanhandle.com Advertisers">Internet Marketing</a></li>-->
<li><a href="http://www.inthepanhandle.com/itpcore/" title="The Control Panel is used to add content (business listing, products, images, coupons, etc.)" target="_blank">Control Panel</a></li>
<li><a href="{path=''support/help_request"}?height=400&width=380" class="thickbox" title="Get Help!"">Submit Support Request</a></li>
<li><a href="{path='SITE_INDEX'}/itp_blog/" title="InThePanhandle.com Blog">ITP Blog</a></li>
<li><a href="{path='SITE_INDEX'}/itp_blog/article/the_fix_list/" title="Known Issues">ITP Fix-Me List</a></li>
</ul>
</div>

<div class="related_content_box">
<h3>Help: Tutorial Library</h3>
<ul>
<li><a href="https://www.youtube.com/playlist?list=PL00CF9883D7DF3F5F">Video Tutorials</a></li>
</ul>
</div>

</div>


</div>
</div>
<div class="clear_both"></div>
</div>
