{embed="copkinc/index" page_title="Status Updates (with Friends add-on)"}
</head>
<body id="home">
{embed="copkinc/header"}

		<div id="maincolumn">

			<h2>Facebook Connect</h2>

			<h3>Status Updates (with Friends add-on)</h3>

				{if segment_3 == "success"}<div class="codepack_success">You have successfully updated your status.</div>{/if}

			<div id="leftcolumn">

				<h4>Submit a new Status:</h4>
				{exp:friends:status_form return="copkmain/status_update_friends/success"}
					<p>{friends_screen_name} <input type="text" name="friends_status" value="is " /> <input type="submit" name="submit" value="Add" /></p>

					{exp:fbc:permissions}
						{if fbc_allow_publish_stream == "y"}
							<p><input type="checkbox" name="fbc_publish_to_facebook" id="fbc_publish_to_facebook" value="y" /> <label for="fbc_publish_to_facebook">Also Publish to my Facebook Profile</label></p>
						{if:else}
							<p>You currently don't have the correct permissions set to allow publishing to your Facebook profile from this site.</p>
						{/if}
					{/exp:fbc:permissions}

				{/exp:friends:status_form}

				<hr />

				<h4>Current Status:</h4>
				<ul>
					{exp:friends:status member_id="CURRENT_USER" limit="1"}
						<li class="large">{friends_screen_name} {friends_status}</li>
						{if friends_no_results}
							<li>Currently no status updates have been submitted.</li>
						{/if}
					{/exp:friends:status}
				</ul>

				<h4>Previous Statuses:</h4>
				<ul>
					{exp:friends:status member_id="CURRENT_USER" offset="1" limit="10"}
						<li class="{friends_switch="one|two"}">{friends_screen_name} {friends_status} ({friends_status_date format="%F %j, %Y"})</li>
						{if friends_no_results}
							<li>Currently no status updates have been submitted.</li>
						{/if}
					{/exp:friends:status}
				</ul>

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

					<p>The "Status Updates" page allows users to update their status on your EE site with the Solspace Friends add-on, and also publish those status updates to the users Facebook wall as well.</p>

					<p>It makes use of the following tags:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/friends_status_form/">Friends:Status_Form</a>  paired with the <a href="http://www.solspace.com/docs/detail/fbc_publishing_ee_content_to_facebook/#fbc_publish_to_facebook">fbc_publish_to_facebook</a> form field to display a form for users to update their status on this EE site and/or Facebook wall with option to also publish to Facebook.</li>
						<li><a href="http://www.solspace.com/docs/detail/friends_status/">Friends:Status</a> to display a list of current and previous status updates for the user.</li>
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
