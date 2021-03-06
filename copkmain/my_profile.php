{embed="copkinc/index" page_title="My Profile"}
</head>
<body id="home">
{embed="copkinc/header"}

		<div id="maincolumn">

			<h2>Facebook Connect</h2>

			<h3>My Profile</h3>

			<p></p>

			<div id="leftcolumn">

				<h4>Facebook Profile</h4>
				<ul>
				{exp:fbc:member_data member_id="CURRENT_USER"}
				{if fbc_facebook_id}
					<li>Facebook ID: <b>{fbc_facebook_id}</b></li>
					<li>Facebook Name: <b>{fbc_facebook_name}</b></li>
					<li>Facebook Username: <b>{fbc_facebook_username}</b></li>
					<li>Facebook Profile Pic: {fbc_facebook_profile_pic}</li>
					<li>You have <b>{fbc_facebook_friends_count}</b> Facebook friends on this site.</li>
				{if:else}
					<li>You have not synced your EE and Facebook accounts yet.</li>
				{/if}
				{/exp:fbc:member_data}
				</ul>

				<h4>ExpressionEngine Member Profile</h4>
				<ul>
				{if logged_in}
				{exp:member:custom_profile_data}
					<li>EE Member ID: <b>{member_id}</b></li>
					<li>EE Screen Name: <b>{screen_name}</b></li>
					<li>EE Username: <b>{username}</b></li>
					<li>EE Avatar: {if avatar}<img src="{avatar_url}" width="{avatar_width}" height="{avatar_height}" />{if:else}No Avatar{/if}</li>
				{/exp:member:custom_profile_data}
				{if:else}
					<li>You are not logged in EE. You must log in first to see your EE profile here.</li>
				{/if}
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

					<p>The "Profile" page displays simple EE and Facebook profile information of a logged in EE and or EE/FB user.</p>

					<p>It makes use of the following tags:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/fbc_member_data/">FBC:Member_Data</a> to display some simple Facebook profile data for the user.</li>
						<li><a href="http://expressionengine.com/user_guide/modules/member/custom_profile_data.html">EE Member:Custom_Profile_Data</a> to display some simple EE profile data for the user.</li>
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
