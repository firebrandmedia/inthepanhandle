<div id="announcements_welcome">
<ul>
{if logged_in}
<div id="container">
<li>Welcome back <b>{screen_name}</b></li>
<li><a href="{path=''users/edit_profile"}" title="Access your Favorites, Articles, Events, Profile…"">My Stuff</a></li>
{exp:cp_access}<li><a href="http://www.inthepanhandle.com/itpcore/" target="_blank" title="Use the Control Panel to edit your articles, events or business listing.">Control Panel</a></li>{/exp:cp_access}
<!--<li><a href="{path=''advertise/"}" title="Add your business to InThePanhandle.com for $10 per month.">Ads starting at $10/mo</a></li>-->
<li class="last"><a href="{path='LOGOUT'}" title="You will be logged out and returned to the InThePanhandle.com homepage.">Logout</a></li>
</div>
{/if}
</ul>

{if logged_out}

<div id="container">
  <div id="topnav" class="topnav"><ul><!--<li><a href="{path=''advertise/"}" title="Add your business to InThePanhandle.com for $10 per month.">Ads starting at $10/mo</a></li>--> <li><a href="{path='users/register'}" title="Create an InThePanhandle.com user account">Create an Account</a></li> <li class="last">Have an account?</li><a href="login" class="signin"><span>Sign in</span></a> </ul> </div>
  <fieldset id="signin_menu">
  {exp:member:login_form return="users/edit_profile/"}
      <label for="username">Username or email</label>
      <input id="username" name="username" value="" title="username" tabindex="4" type="text">
      </p>
      <p>
        <label for="password">Password</label>
        <input id="password" name="password" value="" title="password" tabindex="5" type="password">
      </p>
      <p class="remember">
        <input id="signin_submit" value="Sign in" tabindex="6" type="submit">
        <input id="remember" name='auto_login' value='1'  tabindex="7" type="checkbox">
        <label for="remember">Remember me</label>
      </p>
      <p class="forgot"> <a href="{path='users/forgot_password'}">Forgot your password?</a></p>
    {/exp:member:login_form}
  </fieldset>
</div>

{/if}

</div>
