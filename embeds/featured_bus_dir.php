<div id="bus_dir_home_content">
<h1>InThePanhandle.com Business Directory</h1>
<!--<ul>
<li><a href="{path=''advertise/purchase_advertising/"}" title="Advertise on InThePanhandle.com"">Add Your Business</a></li>
</ul>-->
<div class="clear_both"></div>
<div id="recent_biz">
<h2>New Businesses</h2>
<ul>
{exp:channel:entries channel="bus_dir" orderby="date" sort="desc" limit="10" sticky="off" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=business_directory/listing}">{title}</a></li>
{/exp:channel:entries}
</ul>
</div>
<div class="clear_both"></div>
</div>
