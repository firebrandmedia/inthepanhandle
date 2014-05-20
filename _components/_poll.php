{exp:lg_polls:poll
  entry_id="{embed:entry_id}"
  precision="{embed:precision}"
  ajax_return="{embed:ajax_return}"
  return="{embed:return}"
}
  <div id='loading' style='display:none;'>Loading ... </div>
  <h4>{embed:poll_question}</h4>
  {if can_vote}
    {poll_form}
      {if has_voted}<!--<p class="message">You have already voted in this poll, however you can vote again.</p>-->
     {/if}
<ul class='lg-polls-answers'>
        {poll_answers}
        <li class='a-{answer_count}'>
          <label for='lg-polls-answer-{answer_id}'>{answer_input} <span class='answer'>{answer} <span class='votes'>/ {answer_total_votes} votes</span></span></label>
        </li>
        {/poll_answers}
      </ul>
      <input class="vote_btn" type='submit' value='Vote' />
    {/poll_form}
  {if:else}
    {if has_voted}<p class="message">Thanks for voting in this poll.</p>{/if}
    {if restricted}<p class="message">Sorry, You are restricted from voting in this poll.</p>{/if}
    {if expired}<p class="message">This poll ended on {embed:expiration_date}.</p>{/if}
    {if yet_to_begin}<p class="message">This poll is yet to begin. Voting opens on {embed:entry_date}.</p>{/if}
  {/if}
{/exp:lg_polls:poll}
