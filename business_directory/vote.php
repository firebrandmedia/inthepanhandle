{exp:rating:insert_rating_rev rating_id="{segment_3}" allow_duplicates="no"}
{if failure}
<h2>Error!</h2>
{/if}
{if success}
<h2>Thank You!</h2>
{/if}
<p>{message}</p>
{/exp:rating:insert_rating_rev}
