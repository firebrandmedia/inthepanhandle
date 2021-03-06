{embed="copkinc/index"}
</head>
<body id="home">
{embed="copkinc/header"}

		<div id="maincolumn">

			<h2>Facebook Connect</h2>

			<h3>Home</h3>

				{if segment_3 == "registered"}<div class="codepack_success">Registration successful!</div>{/if}
				{if segment_3 == "logged_in"}<div class="codepack_success">You have now successfully logged in through Facebook.</div>{/if}
				{if segment_3 == "logged_out"}<div class="codepack_success">You have now successfully logged out.</div>{/if}
				{if segment_3 == "fail"}<div class="codepack_error">An error has occurred.</div>{/if}

			<div id="leftcolumn">

				<h4>Articles for this site:</h4>

				<ul>


				{exp:weblog:entries status="open" limit="10"}
					<li><small style="float:right;">View with: <a href="{url_title_path='copkmain/entry'}fb_comments/">FB Comments plugin</a> | <a href="{url_title_path='copkmain/entry'}ee_comments">EE Comments method</a></small>{title}</li>
				{if no_results}
					<li>No entries found on this site. Site Admins: you'll have to modify the template code for this to display some channel entries.</li>
				{/if}
				{/exp:weblog:entries}


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

					<p>The "Home" page displays a simple list of channel entries, meant to show off the 2 different Comment methods available with Facebook Connect.</p>

					<p>It makes use of the following tags:</p>

					<ul>
						<li><a href="http://expressionengine.com/user_guide/modules/channel/channel_entries.html">EE Channel:Entries</a> to display a list of a handful of entries.</li>
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
