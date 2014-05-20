<div id="header">

	<div id="logo"></div>

	<div id="smallmenu">
		<ul>
{if logged_out}
			<li class="first"><a href="{path='login'}">Login</a></li>
			<li><a href="{path='copkmain/register'}">Register</a></li>
{/if}
{if logged_in}
			<li class="first"><a href="{path='copkmain/my_profile'}">My Profile</a> ({logged_in_screen_name})</li>
			<li><a href="{path='LOGOUT'}">Log out</a></li>
{/if}
		</ul>
	</div>
</div>

<div class="spacer"></div>

<div id="wrapper">

	<div id="mainmenu">
		<ul>
			<li><a href="{path='copkmain'}">Home</a></li>
			<li><a href="{path='copkmain/register'}">Register</a></li>
			<li><a href="{path='copkmain/my_profile'}">My Profile</a></li>
			<li><a href="{path='copkmain/permissions'}">Permissions</a></li>
			<li><a href="{path='copkmain/status_update'}">Status Updates</a></li>
		</ul>
	</div>

	<div id="content">
