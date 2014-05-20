<div id="featured_product_header">
<h1>Featured Local Products</h1>
</div>
<div id="featured_product_images">
<ul>
{exp:weblog:entries weblog="products" limit="3" orderby="random" sort="desc" dynamic="off" sticky="off"}
<li><a href="{title_permalink=business_directory/product}">{exp:imgsizer:size src="{prod_image}" width="280" height="200" alt="{title}" class="prod_image"}<br /><em>{title}</em></a></li>
{/exp:weblog:entries}
</ul>
<div class="clear_both"></div>
</div>
