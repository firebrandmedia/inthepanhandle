{if logged_in && member_group == "1"}
    <div style="position: absolute; top: 0; left: 0; position: fixed; background-color: #000; color: #fff; font-size: 9px; padding: 5px;">
        {elapsed_time} seconds / {total_queries} queries
    </div>
{/if}
<div id="search_box">
<div id="search">
{exp:search:simple_form weblog="news|bus_dir|calendar_events|coupons|products|restaurant_menus" show_future_entries="yes" show_expired="yes" results="10" search_in="everywhere" where="all" no_result_page="search/noresults"}
<p><input class="txt" type="text" name="keywords" id="keywords" onfocus="if
(this.value==this.defaultValue) this.value='';" value="I'm looking for…" size="18" maxlength="100" /> <input type="image" src="/images/ui/search_btn.gif" align="right" value="Search" /></p>
{/exp:search:simple_form}
</div>
</div>
</div>
