<div id="advertising"><div id="ads">
</div></div>
<div id="body_content">
<div id="edit_user_profile">
<h1>Welcome back, {username}</h1>
<p>Your current classified is over in the column on the right. Click the pencil next to it to edit it.</p>
<!--<p><b>Did you know that fresh content</b> (articles, events, updated products, fresh coupons, etc.) is the #1 way to keep folks coming to your business listing?</p>
<div id="add_business_content">
<p><a href="http://www.inthepanhandle.com/itpcore/" title="Click to go to your control panel to start adding your business advertising content." target="_blank">Add / Edit Business Advertising (ie. Business Listing, Coupons, Products/Services, etc.)</a></p>
</div>-->
{exp:user:edit return="users/edit_profile"}
<div class="edit_page_section">
<h2>Edit Your Avatar</h2>
<div id="avatar_image">
<p>Did you know that adding a profile image increases click through rates by 78%? Err, we just made that up, but we're pretty sure that people would like to see your image or business logo as opposed to a blank white space. And, there is some correlation between avatar usage and brand awareness.<br /><br /><b><a href="{path=''users/edit_avatar"}?height=220&width=400" class="thickbox" title="Edit Your Profile Image"">Edit your profile image (avatar).</a></b></p>

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
<p>Your public profile, and your avatar image above, is associated with all articles that you write and publish in the 'News' section on InThePanhandle.com. By including a link to your website, Facebook page, or Twitter account, users can learn more about you and how to keep up with you, your writing or your business.</p>
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
</div>
</div>
<div id="related_content">
<div class="related_content_box">
<h3>Your Classified Ad</h3>
</div>
<div class="related_content_box">
<h3>Your Ad Subscription(s)</h3>
<ul>
{exp:foxee:memberships}
{if is_membership_active}
<li><b>{membership_name}</b></li>
<li><a href="{cancel_subscription}">Cancel Subscription</a></li>
<li>Start: {subscription_start_date}</li>
<li>End: {subscription_expiry_date}</li>
{if:else}
</ul>
<div class="related_content_box">
<p>You do not have any advertising subscriptions</p>
</div>
{/if}
{/exp:foxee:memberships}
</div>
<div class="related_content_box">
<h3>Quick Links</h3>
<ul>
<!--<li><a href="{path='SITE_INDEX'}/support/marketing" title="Internet Marketing Tips for InThePanhandle.com Advertisers">Internet Marketing</a></li>-->
<li><a href="http://www.inthepanhandle.com/itpcore/" title="The Control Panel is used to add content (business listing, products, images, coupons, etc.)">Control Panel</a></li>
<li><a href="{path=''support/help_request"}?height=400&width=380" class="thickbox" title="Get Help!"">Submit Support Request</a></li>
<li><a href="{path='SITE_INDEX'}/itp_blog/" title="InThePanhandle.com Blog">ITP Blog</a></li>
<li><a href="{path='SITE_INDEX'}/itp_blog/article/the_fix_list/" title="Known Issues">ITP Fix-Me List</a></li>
</ul>
</div>
<div class="related_content_box">
<h3>Help: Tutorial Library</h3>
<ul>
{exp:weblog:entries weblog="video_tutorials" orderby="date" sort="desc" limit="25" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=support/tutorial_details}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
</div>
</div>
<div class="clear_both"></div>
</div>
