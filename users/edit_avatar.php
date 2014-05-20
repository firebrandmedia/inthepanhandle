{exp:user:edit return="users/edit_profile"}
<p><label for="current_avatar">Current Profile Image: </label><img src="{avatar_url}{avatar_filename}" width="{avatar_width}" height="{avatar_height}" /></p>
<p><input type="submit" name="remove_avatar" value="Remove Current Profile Image?" /></p>
<p>Upload a New Profile Image: <input type="file" name="avatar_filename" /></p>
<p><input type="submit" value="Submit" /></p>
{/exp:user:edit}
