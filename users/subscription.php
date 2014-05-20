{exp:simple_commerce:purchase entry_id="{102}" success="site/success" cancel="site/index"}

{item_name}

<p><strong>{item_sale_price}</strong></p>

<p><a href="{buy_now_url}" onclick="window.open(this.href);return false;">Buy Now</a></p>
<p><a href="{add_to_cart_url}" onclick="window.open(this.href);return false;">Add to Cart</a></p>
<p><a href="{view_cart_url}" onclick="window.open(this.href);return false;">View Cart</a></p>

{/exp:simple_commerce:purchase}
