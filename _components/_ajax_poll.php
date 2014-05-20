{exp:weblog:entries
  weblog="polls"
  entry_id="{segment_3}"
  show_future_entries="yes"
  show_expired="yes"
  limit="1"
  rdf="off"
  disable="categories|category_fields|member_data|pagination|trackbacks"
}
  {embed="_components/_poll"
    entry_id="{entry_id}"
    poll_question="{poll_question}"
    entry_date="{entry_date format="%D, %F %d, %Y - %g:%i:%s"}"
    expiration_date="{expiration_date format="%D, %F %d, %Y - %g:%i:%s"}"
    ajax_return="_components/_ajax_poll/{entry_id}"
  }
{/exp:weblog:entries}
