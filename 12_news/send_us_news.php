{exp:freeform:form form_name="ITP_News_Form" form_title="ITP_News" return="users/register_news_sent" notify="news@inthepanhandle.com" template="news_form" required="name|email" file_upload ="News Upload Directory"}
<input type="hidden" name="message[]" value="I would like to submit the following news…" />

<div id="news_form">
<p><label>Name*</label> <input type="text" name="name" id="name" class="txt" value="" /></p>
<p><label>Email*</label> <input type="text" name="email" id="class" class="txt" value="" /></p>
<p><label>What kind of news is it?</label> <span class="txt"><select name="news_type[]"></span>
<option value="Local">Local</option>
<option value="State">State</option>
<option value="World">World</option>
<option value="Financial">Financial</option>
<option value="Press Release">Press Release</option>
<option value="Opinion">Opinion</option>
<option value="Other">Other juicy news!</option>
</select>
</p>
<p><label>News goes here…</label> <textarea name="news_body" id="comment_news_body" class="txt" cols="46" rows="8"></textarea></p>
<p><label>Have a file or picture?</label></p>
<input type="file" name="file1" />
<div class="clear_both"></div>
<p><label for="captcha">Anti-Spam Text:</label><span class="txt">{captcha}</span></p>
<p><label for="captcha">Retype Anti-Spam Text:*</label><input type="text" class="txt" name="captcha" value="" /></p>
<div class="clear_both"></div>
<p><input type="submit" class="btn" name="submit" value="Send Your News" /></p>
<p><i>* Indicates a required field</i></p>
</div>

{/exp:freeform:form}
