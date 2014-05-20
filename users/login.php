<div id="login_form">
{exp:member:login_form return="users/edit_profile/"}

<p><label>Username / Email</label>
<input type="text" name="username" value="" maxlength="32" class="txt" size="25" /></p>

<p><label>Password</label>
<input type="password" name="password" value="" maxlength="32" class="txt" size="25" /></p>
<p><a href="{path='users/forgot_password'}">Forgot your password?</a></p>
{if auto_login}
<p><input class='checkbox' type='checkbox' name='auto_login' value='1' /> Auto-login on future visits</p>
{/if}
<p><input class='checkbox' type='checkbox' name='anon' value='1' checked='checked' /> Show my name in the online users list</p>
<p><input type="submit" class="btn" name="submit" value="Log-In" /></p>
<p>Don't have an InThePanhandle.com account? <a href="#" title="Create an InThePanhandle.com user account">Create one</a></p>
{/exp:member:login_form}
</div>
