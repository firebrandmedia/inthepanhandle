{embed="copkinc/index" page_title="Entry"}
</head>
<body id="home">
{embed="copkinc/header"}

		<div id="maincolumn">

			<h2>Facebook Connect</h2>

			<h3>Entry Details</h3>

			<p></p>

			<div id="leftcolumn">



				{exp:weblog:entries require_entry="yes"}

				<h3>{title}</h3>
				<p>{body}</p>

				<hr />

			{if segment_4 == "fb_comments"}
				<p style="float:right;"><small>Switch to <a href="{path='copkmain/entry'}{segment_3}/ee_comments/">EE Comments</a> style</small></p>
				<h4>FB Comments Plugin</h4>
				{exp:fbc:comments
					href="{url_title_path='copkmain/entry'}"
					num_posts="5"
					width="600"
				}
			{/if}
			{if segment_4 == "ee_comments"}
				<p style="float:right;"><small>Switch to <a href="{path='copkmain/entry'}{segment_3}/fb_comments/">FB Comments plugin</a> style</small></p>
				<h4>EE Comments</h4>

				<h5>Post a Comment</h5>
				{exp:comment:form}
					<p><textarea name="comment" cols="50" rows="6">{comment}</textarea></p>
					<p><input type="checkbox" name="notify_me" id="notify_me" value="yes" {notify_me} /> <label for="notify_me">Notify me of follow-up comments?</label></p>

					{exp:fbc:permissions}
						{if fbc_allow_publish_stream == "y"}
							<p><input type="checkbox" name="fbc_publish_to_facebook" id="fbc_publish_to_facebook" value="y" /> <label for="fbc_publish_to_facebook">Also Publish to my Facebook Profile</label></p>
						{if:else}
							<p>You currently don't have the correct permissions set to allow publishing to your Facebook profile from this site.</p>
						{/if}
					{/exp:fbc:permissions}

					<input type="submit" name="submit" value="Submit" />
				{/exp:comment:form}

			{/if}



				{/exp:weblog:entries}


			{if segment_4 == "ee_comments"}

				<h5>Comments</h5>
				{exp:comment:entries sort="asc" limit="20"}
				<p style="margin-top: 5px;padding-top: 3px;border-top: 1px solid #C0C0C0;">{comment}</p>
				<p><small>By {name} on {comment_date format="%F %j, %Y"}</small></p>
				{if no_results}
					<p>There are currently no comments submitted for this entry.</p>
				{/if}
				{/exp:comment:entries}

			{/if}

				<hr />

				{exp:fbc:activity
					width="600"
					height="200"
					header="true"
					font="arial"
					recommendations="true"
					border_color="#ffffff"
				}

			</div>

			<div id="rightcolumn">

{embed="copkinc/side_column"}

				<div id="aboutcolumn">

					<h3>About This Page</h3>

					<p>The "Entry Details" page displays info for a channel entry, and is meant to show off the 2 different Comment methods available with Facebook Connect.</p>

					<p>It makes use of the following tags:</p>

					<ul>
						<li><a href="http://expressionengine.com/user_guide/modules/channel/channel_entries.html">EE Channel:Entries</a> to display info for a channel entry.</li>
				{if segment_4 == "fb_comments"}
						<li><a href="http://www.solspace.com/docs/detail/fbc_fb_comments_box/">FBC:Comments</a> to display the Facebook Comments plugin for posting and viewing comments for the channel entry.</li>
				{/if}
				{if segment_4 == "ee_comments"}
						<li><a href="http://expressionengine.com/user_guide/modules/comment/form.html">EE Comment:Form</a> paired with the <a href="http://www.solspace.com/docs/detail/fbc_publishing_ee_content_to_facebook/#fbc_publish_to_facebook">fbc_publish_to_facebook</a> form field to display the EE Comment Form for posting comments to the channel entry and option to also publish to Facebook.</li>
						<li><a href="http://expressionengine.com/user_guide/modules/comment/entries.html">EE Comment:Entries</a> to display the EE Comment Entries listing of all comments for the channel entry.</li>
				{/if}
						<li><a href="http://www.solspace.com/docs/detail/fbc_fb_activity_feed/">FBC:Activity_Feed</a> to display a list of all recent Facebook activity for this site amongst all users.</li>
					</ul>

					<p>This specific column (on the right), uses the following tags:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/fbc_login/">FBC:Login</a> to display a Facebook Login and Logout button, allowing logged in EE users to sync their accounts with Facebook, and allowing logged out users to easily create an account on your site.</li>
						<li><a href="http://www.solspace.com/docs/detail/fbc_fb_like_button/">FBC:Like</a> to display a Facebook "Like" and "Share" button on your site.</li>
						<li><a href="http://www.solspace.com/docs/detail/fbc_login_status/">FBC:Login_Status</a> to display some login information about the currently logged in user. This is also handy for troubleshooting while using FBC.</li>
					</ul>

				</div>

			</div>

		</div>

{embed="copkinc/footer"}
