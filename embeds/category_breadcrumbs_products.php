{exp:query sql="SELECT parent_id FROM exp_categories
WHERE cat_id = '{embed:cat_id}'"}{exp:query
sql="SELECT cat_name,cat_url_title,cat_id
FROM exp_categories WHERE cat_id = '{parent_id}'"}
<a href="{path='SITE_INDEX'}/shop_local/cat_listings/C{cat_id}">{cat_{embed:type}}</a> / {/exp:query}{/exp:query}
