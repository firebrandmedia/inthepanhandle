{exp:weblog:entries weblog="event_cal" entry_id="{embed:my_entry_id}" show_expired="no" show_future_entries="yes" dynamic="off" disable="pagination|trackbacks|member_data"}
<div class="event_month">{entry_date format="%D"}</div>
<div class="event_date">{entry_date format="%d"}</div>
     <div class="event_details">  <h3>{title}</h3><ul class="inline_category"><b>Category:</b> {categories}<li>{category_name}</li>{/categories}</ul><div class="clear_both"></div><p>{exp:char_limit total="120"}{event_details}{/exp:char_limit} <a href='{title_permalink=events/details}'>Continue Reading</a></p></div>
<div class="clear_both"></div>
{/exp:weblog:entries}
