{exp:freeform:form form_name="Help_Request" form_title="help_request" return="site/index" notify="contact@inthepanhandle.com" template="help_request" required="name|email"}
<input type="hidden" name="message[]" value="I need help with the following…" />

<div id="news_form">
<p><label>Name*</label> <input type="text" name="name" id="name" class="txt" value="" /></p>
<p><label>Email*</label> <input type="text" name="email" id="class" class="txt" value="" /></p>
<p><label>Help! Here's my problem…</label> <textarea name="help_body" id="help_body" class="txt" cols="46" rows="8"></textarea></p>
<div class="clear_both"></div>
<p><label for="captcha">Anti-Spam Text:</label><span class="txt">{captcha}</span></p>
<p><label for="captcha">Retype Anti-Spam Text:*</label><input type="text" class="txt" name="captcha" value="" /></p>
<div class="clear_both"></div>
<p><input type="submit" class="btn" name="submit" value="Submit Request" /></p>
<p><i>* Indicates a required field</i></p>
</div>

{/exp:freeform:form}
