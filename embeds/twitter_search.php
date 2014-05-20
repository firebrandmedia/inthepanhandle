{exp:twitter_search:find q="martinsburg OR #ITPWV OR berkeley+springs OR shepherdstown" rpp="75" lang="en" convert_url="yes" cache="yes" refresh="5"}
<div class="{switch="tweet_one|tweet_two"}">
<img src="{profile_image_url}" alt="{from_user}'s twitter icon" />
<span class="twitter_username"><a href="http://www.twitter.com/{from_user}">{from_user}</a></span>
<span class="tweet_text">"{text}"</span><span class="tweet_added">added {relative_date} ago.</span>
</div>
{if no_results}
"Sorry, but there are no results.  Go tweet something to add to the local conversation on Twitter."
{/if}
{/exp:twitter_search:find}
<div class="clear_both"></div>
