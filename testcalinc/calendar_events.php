{exp:calendar:cal calendar_id="{embed:calendar_id}" event_limit="{embed:event_limit}" date_range_start="today" show_months="6" pad_short_weeks="n" dynamic="off"}
          <li><a href="{path='testcalmain/event'}{event_id}/">{event_title}</a> ({event_start_date format="%F %j, %Y"})</li>
          {if no_results}
          <li>No events could be found within the specified time range for this Calendar.</li>
          {/if}
{/exp:calendar:cal}
