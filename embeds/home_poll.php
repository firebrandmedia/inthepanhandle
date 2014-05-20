<div id="poll">
<p class="poll_archives_link"><a href="http://www.inthepanhandle.com/index.php/news/poll_archives/">Poll Archives</a> | <a href="{path=''news/suggest_a_poll"}?height=400&width=370" class="thickbox" title="Suggest a poll"">Suggest a poll</a></p>
<h3>InThePanhandle.com Poll</h3>
<div class="clear_both"></div>
<div id="poll_archived">
{exp:weblog:entries
  weblog="polls"
  entry_id="{segment_3}"
  show_future_entries="yes"
  show_expired="yes"
  limit="1"
  rdf="off"
  disable="categories|category_fields|member_data|pagination|trackbacks"
}
{exp:lg_polls:chart
  entry_id="{entry_id}"
  colors="006CD8|008C46|EFEB08|5A7DD6|73A25A|9CCB21"
  segment_label_format="{answer} ({answer_percentage}%)"
  size="580x200"
  type="p3"
}
    <img src="{chart_url}"  />
{/exp:lg_polls:chart}
  {embed="_components/_poll"
    entry_id="{entry_id}"
    poll_question="{poll_question}"
    entry_date="{entry_date format="%D, %F %d, %Y - %g:%i:%s"}"
    expiration_date="{expiration_date format="%D, %F %d, %Y - %g:%i:%s"}"
    ajax_return="_components/_ajax_poll/{entry_id}"
  }
{/exp:weblog:entries}
<div class="clear_both"></div>
</div>
</div>
