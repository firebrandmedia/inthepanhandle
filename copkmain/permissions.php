{embed="copkinc/index" page_title="Permissions"}
</head>
<body id="home">
{embed="copkinc/header"}

		<div id="maincolumn">

			<h2>Facebook Connect</h2>

			<h3>Permissions</h3>

			<p></p>

			<div id="leftcolumn">

				<h4>Permissions you have granted to Facebook for {site_name}:</h4>

				{exp:fbc:login_status}
				{if fbc_logged_into_facebook_and_ee == "y"}

					<ul>
					{exp:fbc:permissions}
						<li>Allow Emailing? <b>{if fbc_allow_email == "y"}Yes{if:else}No{/if}</b></li>
						<li>Allow Publishing to Facebook Stream? <b>{if fbc_allow_publish_stream == "y"}Yes{if:else}No{/if}</b></li>
					{/exp:fbc:permissions}
					</ul>

					<hr />

					{exp:fbc:set_permissions
						button_label="Set Facebook Permissions"
						button_size="medium"
						permissions="email|publish_stream|read_stream|user_location"
					}

				{if:else}
					<p>You have not synced your EE and Facebook accounts yet.</p>
				{/if}
				{/exp:fbc:login_status}

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

					<p>The "Permissions" page displays a list of permissions the logged in EE/FB (synced) user has or has not granted to this site. Additionally, it has a button that lets users update or set permissions.</p>

					<p>It makes use of the following tags:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/fbc_member_data/">FBC:Member_Data</a> to display some simple Facebook profile data for the user.</li>
						<li><a href="http://www.solspace.com/docs/detail/fbc_set_permissions/">FBC:Set_Permissions</a> to display a button that allows users to set permissions for the site if they haven't done so already. Also allows site admin to add additional permissions to be approved by users at a later time.</li>
						<li><a href="http://www.solspace.com/docs/detail/fbc_fb_activity_feed/">FBC:Activity_Feed</a> to display a list of all recent Facebook activity for this site amongst all users.</li>
					</ul>

					<p>This specific column (on the right), uses the following tags:</p>

					<ul>
						<li><a href="http://www.solspace.com/docs/detail/fbc_permissions/">FBC:Permissions</a> to display a list of permissions granted to this site by the currently logged in user.</li>
						<li><a href="http://www.solspace.com/docs/detail/fbc_fb_like_button/">FBC:Like</a> to display a Facebook "Like" and "Share" button on your site.</li>
						<li><a href="http://www.solspace.com/docs/detail/fbc_login_status/">FBC:Login_Status</a> to display some login information about the currently logged in user. This is also handy for troubleshooting while using FBC.</li>
					</ul>

				</div>

			</div>

		</div>

{embed="copkinc/footer"}
