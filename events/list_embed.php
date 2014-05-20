{exp:weblog:entries weblog="event_cal" entry_id="{embed:my_entry_id}" show_expired="no" show_future_entries="yes" dynamic="off" disable="pagination|trackbacks|member_data"}
<div class="event_month">{entry_date format="%D"}</div>
<div class="event_date">{entry_date format="%d"}</div>
     <div class="event_details">  <h3>{title}</h3><ul class="inline_category"><b>Category:</b> {categories}<li>{category_name}</li>{/categories}</ul><div class="clear_both"></div><p>{exp:md_eexcerpt if_exceeds="75" stop_after="35" append="&nbsp;&hellip;" the_link="<a href='{title_permalink=events/details}'>{title} Event Details</a>"}{event_details}{/exp:md_eexcerpt}</p></div>
<div class="clear_both"></div>
{/exp:weblog:entries}
