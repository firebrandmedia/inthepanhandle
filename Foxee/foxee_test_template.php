<!--
{!--
		FoxEE Test Template
		version 1.10.51.xxx
		- ExpressionEngine Module for E-Commerce integrated with FoxyCart.com
		- copyright (c) 2009 hccdevelopment.com - all rights reserved

		*TO USE*
		Create a new blank template named foxee-test-template.
	    Copy this file into {my_template_group}/foxee-test-template - Set to "site", the default EE template group.
	    Change the variables below for your template group and product weblog (If you do not wish to use the template group variable, hard code the EE tags to your liking)
	    Set up your foxee settings and foxycart settings.
	    Run the test template. If you are using the template as a Super Admin you will see ALL orders in the Transaction History tag. It is best to test your store using a test member account.
 --}
-->


{assign_variable:my_weblog="products"} <!-- change this to your FoxEE weblog. If you are using multiple weblogs then you will need to change the parameters in the EE tags to the pipe | charecter and insert your weblog names. -->

{assign_variable:my_template_group="site"} <!-- change this to your temlpate group. (This tag is only used on the login redirect for this template) -->

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<!-- http://www.hccdevelopment.com Test template for FoxEE - {version} -->

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset={charset}">

<title>{site_name} | {segment_1}{if segment_2} | {segment_2}{/if}{if segment_3} | {segment_3}{/if}{if segment_4} | {segment_4}{/if}</title>

<style type="text/css">
body {
	margin: 0 auto;
	width: 940px;
	padding: 0;
	font-size: 12px;
	color: #555;
	font-family: Helvetica;
	text-align: center;
	background-color: #fff;
}

INPUT {
    color: #000;
    background-color: #FFF;
    padding: 2px;
    border: solid 1px #b4b4b4;
    margin-right: 5px;
    margin-bottom: 5px;
    font-family: Helvetica;
    }

TEXTAREA {
    color: #000;
    background-color: #FFF;
    font-size: 12px;
    padding: 2px;
    border: solid 1px #b4b4b4;
    margin-right: 5px;
    margin-bottom: 5px;
    font-family: Helvetica;
    }

SELECT {
    color: #000;
    background-color: #FFF;
    font-size: 12px;
    padding: 2px;
    border: solid 1px #b4b4b4;
    margin-right: 5px;
    margin-bottom: 5px;
    font-family: Helvetica;
}

a {
	text-decoration: none;
	color: #996633;
}

hr {
	margin: 5px 0 5px 0;
}

H1 {
	color: #003366;
	font-size: 18px;
	font-weight: bold;
	margin: 10px 0 10px 0;
	padding: 0;
}

H2 {
	color: #006633;
	font-size: 14px;
	font-weight: bold;
	margin: 0;
	padding: 0;
}

H3 {
	color: #555;
	font-size: 12px;
	font-weight: bold;
	margin: 0;
	padding: 0;
}

.container_12 {
	margin-top: 0px;
	width: 940px;
	text-align:left;
	background-color: #fff;
}

.segment {
	margin: 5px 0 5px 0;
}

.top_segment {
	margin: 5px 0 5px 0;
	width: 470px;
	text-align:left;
}

#top {
	background: url("/images/top_bg.jpg") repeat-x;
	margin: 15px 0 15px 0;
}

#footer {
	background-color: #FFF;
	margin-bottom: 45px;
}

.footer-text {
	font-size: 11px;
	color: #666;
	margin: 0;
	text-align: right;
}

#footer a:link, #footer a:visited {
	color: #666;
	text-decoration: none;
	margin: 0;
	padding: 0;
}

#footer a:hover {
	color: blue;
	text-decoration: none;
}

#footer li {
	display: inline;
}

#footer ul {
	margin: 0;
	padding: 0;
	display: inline;
}

.left {
	float: left;
}

.right {
	float: right;
}

.clear {
	clear: left;
}

.logo {
	margin-top: 40px;
}

.foxee_pricing_options {
	margin: 5px 0 5px 0;
}

.doc_link {
	color: #555;
}
.doc_link h1 {
	margin-right: 30px;
}

.doc_link a {
	color: #003366;
}

.left {
	float: left;
}

.right {
	float: right;
}

.clear {
	clear: both;
}

label {
	float:left;
	width:25%;
  	margin-right:0.5em;
  	padding-top:0.4em;
}

.build {
	color: maroon;
}

.transaction-left {
	float: left;
	min-width: 150px;
	white-space:nowrap;
	margin: 0px 10px 0px 10px;
}

.transaction-right {
	float: right;
	min-width: 200px;
	white-space:nowrap;
	margin: 0px 10px 0px 10px;
}

</style>

<!-- TEMPLATE START -->


{exp:foxee:headers}
</head>
<body>

<div class="container_12">

	<div id="top">
		<div class="left logo">

			<img src="http://www.hccdevelopment.com/img/logo.gif" alt="HCC Development" />
			<h3>FoxEE testing template - 1.10.51.xxx</h3>
			<p>Documents: <a href="http://www.hccdevelopment.com/docs/foxee/foxee_110/" target="_blank" >Foxee 110 documents</a></p>
			<p>Be sure to set the template variables to match your site!</p>




		</div>

		<div class="right"><img src="http://www.hccdevelopment.com/img/foxee/foxxe_logo_reflect.jpg" alt="Resources" border="0"/></div>
	<div class="clear"></div>

		<hr />
	</div>




<!-- ***************************** MEMBER INFO ***************************** -->




<div class="doc_link">
<h1 >Member Info</h1>

</div>


<div class="top_segment left">
{if logged_in}
	<p>
	<h2>You are logged in as: {username}</h2>
  	</p>
  	<p>
  	<a href="{path='logout'}">Log Out</a>
  	</p>
{/if}
{if logged_out}
	<p>
	<h2>You are logged out</h2>
	</p>
{exp:member:login_form return="{my_template_group}/foxee-test-template/"}
<p><label>Username</label><br />
<input type="text" name="username" value="" maxlength="32" class="input" size="25" /></p>
<p><label>Password</label><br />
<input type="password" name="password" value="" maxlength="32" class="input" size="25" /></p>
<p><input type="submit" name="submit" value="Submit" /></p>
{/exp:member:login_form}
{/if}


<!-- ******************* contact info ******************************* -->


<h2>Update FoxyCart contact info</h2>

{if logged_in}

<p>
{exp:foxee:update_contact_info label="Update your FoxyCart stored information"}
</p>

{if:else}

<p>You are not logged in</p>

{/if}


<!-- ******************** member downloads *************************** -->


<h2>Your downloads</h2>



<div class="segment">

{if logged_in}
{exp:foxee:downloads}

<p>
Name: {download_name}<br />
Description: {download_desc}<br />
<a href="{download_link}">Download Here</a><br />
Size: {download_size}<br />
ID: {download_id}<br />
<a href="{download_accept_eula}">Accept EULA</a><br /><br />
{download_eula}

{/exp:foxee:downloads}
</p>

{if:else}
<p>You are not logged in</p>
{/if}
</div>



<!-- ************************* memberships ************************ -->


<h2>Your Memberships</h2>
<div class="segment">
{exp:foxee:memberships}
{if is_membership_active}
{membership_name}<br />
<a href="{cancel_subscription}">Cancel Subscription</a><br />
Start:{subscription_start_date}<br />
End:{subscription_expiry_date}<br />

{if:else}
<p>You do not have any memberships</p>
{/if}
{/exp:foxee:memberships}
</div>




</div>



<!-- *************************** Billing Information ***************** -->



<div class="top_segment left" style="height:auto;">
<h2>Your Billing Information</h2>

{if logged_in}

{exp:foxee:update_profile ajax="yes"}

	<p><label for="customer_first_name">First Name</label> <input type="text" name="customer_first_name" class="input" value="{customer_first_name}"/></p>
	<p><label for="customer_last_name">Last Name</label> <input type="text" name="customer_last_name" class="input" value="{customer_last_name}"/></p>
	<p><label for="customer_address1">Billing Address 1</label> <input type="text" name="customer_address1" class="input" value="{customer_address1}"/></p>
	<p><label for="customer_address2">Billing Address 2</label> <input type="text" name="customer_address2" class="input" value="{customer_address2}"/></p>
	<p><label for="customer_city">Billing City</label> <input type="text" name="customer_city" class="input" value="{customer_city}"/></p>								<p><label for="customer_state">Billing State</label> <input type="text" name="customer_state" class="input" value="{customer_state}"/></p>
	<p><label for="customer_country">Billing Country</label> <input type="text" name="customer_country" class="input" value="{customer_country}"/></p>
	<p><label for="customer_postal_code">Billing Zip</label> <input type="text" name="customer_postal_code" class="input" value="{customer_postal_code}"/></p>
	<p><label for="customer_phone">Billing Phone</label> <input type="text" name="customer_phone" class="input" value="{customer_phone}"/></p>
	<p>To comply with PCI regulations FoxEE does not store customer credit card information. Users can update credit card information stored on the FoxyCart server through FoxEE with the "update_profile" tag.</p>
	<p><label for="cc_number">Credit Card Number</label> <input type="text" name="cc_number" maxlength="16" class="input" value=""/></p>
	<p><label for="cc_exp_month">Expire Month</label>
	<select name="cc_exp_month">
	{select_cc_exp_month}
	<option value="{value}"{selected}>{label}</option>
	{/select_cc_exp_month}
	</select>
	</p>
	<p><label for="cc_exp_year">Expire Year</label>
	<select name="cc_exp_year">
	{select_cc_exp_year}
	<option value="{value}"{selected}>{label}</option>
	{/select_cc_exp_year}
	</select>
	</p>
	<p><input type="submit" value="Submit" class="submit" /></p>
{/exp:foxee:update_profile}


{if:else}
<p>Please login to view your Billing information.</p>

{/if}
</div>



<div class="clear"></div>

<hr />



<!-- ****************************** TRANSACTION HISTORY  ************************ -->



<div class="doc_link">
<h1 >Transaction History</h1>



<div style="width:90%; margin-left: 25px;">
{exp:foxee:transaction_history limit="5" paginate="bottom"}
		{if transactions}
		{transactions}

		<div class="transaction-left">
		<strong>Products Purchased</strong><br />
		{transaction_details}
		<div class="transaction-product">
		({product_quantity}) {product_name}: {product_price_adjusted}
		</div>
		{/transaction_details}
		<p><strong>Order Total</strong> {transaction_total}</p>
		</div>
		<div class="transaction-right">
		<strong>Billing Info</strong><br />
		<p>{customer_first_name} {customer_last_name}<br />
		{customer_address1}<br />
		{if customer_address2}{customer_address2}<br />{/if}
		{customer_city} {customer_state}, {customer_postal_code}
		</p>
		</div>
		<div style="clear:both;"></div>

		<hr />
		{/transactions}
		<p>
		{paginate}
		{pagination_links}
		{/paginate}
		{if:else}
		<p>You are not logged in</p>
		{/if}
		{/exp:foxee:transaction_history}
		</p>

		</div>
<hr />
</div>

{!--
<!-- *****************  THESE ARE ALL OF THE AVAILABLE transaction_history TAGS ***************
<div>&nbsp;</div>
<div>
{exp:foxee:transaction_history}
{if transactions}
{transactions}
<table>
<tr>
	<td>Transaction ID</td>
	<td>{transaction_id}</td>
</tr>
<tr>
	<td>Transaction Date</td>
	<td>{transaction_date format="%Y-%m-%d"}</td>
</tr>
<tr>
	<td>Transaction Contains</td>
	<td>
	{if transaction_is_downloadable}
	Download<br />
	{/if}
	{if transaction_is_subscription}
	Subscription<br />
	{/if}
	{if transaction_is_donation}
	Donation<br />
	{/if}
	</td>
</tr>
<tr>
	<td>Transaction Billing Info</td>
	<td>
	<table>
	<tr>
		<td>Name</td>
		<td>{customer_first_name} {customer_last_name}</td>
	</tr>
	<tr>
		<td>Address 1</td>
		<td>{customer_address1}
	</tr>
	<tr>
		<td>Address 2</td>
		<td>{customer_address2}</td>
	</tr>
	<tr>
		<td>City</td>
		<td>{customer_city}</td>
	</tr>
	<tr>
		<td>State</td>
		<td>{customer_state}</td>
	</tr>
	<tr>
		<td>Postal Code</td>
		<td>{customer_postal_code}</td>
	</tr>
	<tr>
		<td>Country</td>
		<td>{customer_country}</td>
	</tr>
	<tr>
		<td>Phone</td>
		<td>{customer_phone}</td>
	</tr>
	<tr>
		<td>Email</td>
		<td>{customer_email}</td>
	</tr>
	<tr>
		<td>Company</td>
		<td>{customer_company}</td>
	</tr>
	<tr>
		<td>IP</td>
		<td>{customer_ip}</td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td>Transaction Shipping Info</td>
	<td>
	<table>
	<tr>
		<td>Name</td>
		<td>{shipping_first_name} {shipping_last_name}</td>
	</tr>
	<tr>
		<td>Address 1</td>
		<td>{shipping_address1}
	</tr>
	<tr>
		<td>Address 2</td>
		<td>{shipping_address2}</td>
	</tr>
	<tr>
		<td>City</td>
		<td>{shipping_city}</td>
	</tr>
	<tr>
		<td>State</td>
		<td>{shipping_state}</td>
	</tr>
	<tr>
		<td>Postal Code</td>
		<td>{shipping_postal_code}</td>
	</tr>
	<tr>
		<td>Country</td>
		<td>{shipping_country}</td>
	</tr>
	<tr>
		<td>Description</td>
		<td>{shipping_service_description}</td>
	</tr>
	<tr>
		<td>Company</td>
		<td>{shipping_company}</td>
	</tr>
	</table>
	</td>
</tr>
<tr>
	<td>Transaction Details</td>
	<td>
	{products_count_total}
	{if transaction_details}
	<table>
	{transaction_details}
	<tr>
	<td>
		<table>
		<tr>
			<td>Product Entry ID</td>
			<td>{sku}</td>
		</tr>
		<tr>
			<td>Product Code</td>
			<td>{product_code}</td>
		</tr>
		<tr>
			<td>Product Name</td>
			<td>{product_name}</td>
		</tr>
		<tr>
			<td>Product Price</td>
			<td>{product_price}</td>
		</tr>
		<tr>
			<td>Product Quantity</td>
			<td>{product_quantity}</td>
		</tr>
		<tr>
			<td>Product Weight</td>
			<td>{product_weight}</td>
		</tr>
		<tr>
			<td>Product FoxyCart Category</td>
			<td>{category_code}</td>
		</tr>
		<tr>
			<td>Product Variables</td>
			<td>
			{if product_custom_variables}
			{product_custom_variables}
			<table>
			<tr>
				<td>Field Name</td>
				<td>{field_name}</td>
			</tr>
			<tr>
				<td>Field Label</td>
				<td>{field_label}</td>
			</tr>
			<tr>
				<td>Field Value</td>
				<td>{field_value}</td>
			</tr>
			<tr>
				<td>Field Price Mod</td>
				<td>{field_price_mod}</td>
			</tr>
			<tr>
				<td>Field Weight Mod</td>
				<td>{field_weight_mod}</td>
			</tr>
			</table>
			{/product_custom_variables}
			{/if}
			</td>
		</tr>
		</table>
	</td>
	<td align="right" valign="bottom">
	<table>
	<tr>
		<td>Product Weight</td>
		<td>{product_weight}</td>
	</tr>
	<tr>
		<td>Product Weight Adjustment</td>
		<td>{product_weight_adjustment}</td>
	</tr>
	<tr>
		<td>Product Weight Adjusted</td>
		<td>{product_weight_adjusted}</td>
	</tr>
	</table>
	<br /><br />
	<table>
	<tr>
		<td>Product Price</td>
		<td>{product_price}</td>
	</tr>
	<tr>
		<td>Product Price Adjustment</td>
		<td>{product_price_adjustment}</td>
	</tr>
	<tr>
		<td>Product Price Adjusted</td>
		<td>{product_price_adjusted}</td>
	</tr>
	</table>
	</td>
	</tr>
	{/transaction_details}
	<tr>
	<td></td>
	<td align="right">
	<table>
	<tr>
		<td>Product Total</td>
		<td>{product_total}</td>
	</tr>
	<tr>
		<td>Tax Breakdown</td>
		<td>
		{if tax_breakdown}
		{tax_breakdown}
		{tax_name} - {tax_amount} - {tax_rate}<br />
		{/tax_breakdown}
		{/if}
		</td>
	</tr>
	<tr>
		<td>Tax Total</td>
		<td>{tax_total}</td>
	</tr>
	<tr>
		<td>Shipping Total</td>
		<td>{shipping_total}</td>
	</tr>
	<tr>
		<td>Transaction Total</td>
		<td>{transaction_total}</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	{/if}
	</td>
</tr>
<tr>
	<td>Transaction Notes</td>
	<td>{notes}</td>
</tr>
</table><hr>
{/transactions}
{/if}

{/exp:foxee:transaction_history}

</div>
-->
--}


<!-- ************************* PRODUCT CARTS ************************ -->



<div class="doc_link">
<h1>Products</h1>

</div>


<!-- ************************ Physical ******************************* -->

<div class="segment">
<h2>Physical</h2>
{exp:weblog:entries weblog="{my_weblog}" status="open|featured" foxee_active="yes"  foxee_product_type="physical"}

{title}<br />

{if foxee_is_on_sale}
<strong>{foxee_saleprice}</strong>
{if:else}
{foxee_price}
{/if}


<br />
{exp:foxee:addtocart id="{entry_id}" method="link" class="foxee"}<br />

{if no_results}
<p>There are no physical items</p>
{/if}
{/exp:weblog:entries}
</div>



<!-- *************************** downloadables *********************** -->



<div class="segment">
<h2>Downloadables</h2>
{exp:weblog:entries weblog="{my_weblog}" status="open|featured" foxee_active="yes" foxee_product_type="download" }

{title}<br />

{if foxee_is_on_sale}
<strong>{foxee_saleprice}</strong>
{if:else}
{foxee_price}
{/if}


<br />
{exp:foxee:addtocart id="{entry_id}" method="link" block_foxybox="yes" class="test"}<br />

{if no_results}
<p>There are no downloadable items</p>
{/if}
{/exp:weblog:entries}
</div>



<!-- **************************** subscriptions ********************* -->



<div class="segment">
<h2>Subscriptions</h2>
{exp:weblog:entries weblog="{my_weblog}" status="open|featured" foxee_active="yes" foxee_product_type="subscription" }

{title}<br />


{if foxee_is_on_sale}
<strong>{foxee_saleprice}</strong>
{if:else}
{foxee_price}
{/if}


<br />
{exp:foxee:addtocart id="{entry_id}" method="form" block_foxybox="no" class="test" }<br />

{if no_results}
<p>There are no subscription products</p>
{/if}
{/exp:weblog:entries}
</div>



<!-- ****************************** donations ********************** -->



<div class="segment">
<h2>Donations</h2>
{exp:weblog:entries weblog="{my_weblog}" status="open|featured" foxee_active="yes" foxee_product_type="donation" }

{title}<br />

<br />
{exp:foxee:addtocart id="{entry_id}" method="form" class="test" }<br />

{if no_results}
<p>There are no donation products</p>
{/if}
{/exp:weblog:entries}
</div>

<hr />



<!-- ******************************** CART TAGS *************************** -->




<div class="doc_link">
<h1 style="display:inline;">Cart Tags</h1>

</div>

<p>
{exp:foxee:showcart label="view your cart"} | {exp:foxee:checkout}
</p>

<p>
{exp:foxee:cart remove_link_label="remove"}
Total: {foxee_total_price} Total Weight: {foxee_total_weight} Items: {foxee_product_count}
{foxee_products}
{foxee_product_name} - {foxee_product_price}x{foxee_product_quantity} @ {foxee_product_price_each} each {foxee_remove_link}<br />
Product code: {foxee_product_code}<br />
Ship to: {foxee_product_shipto}<br />
FC Category: {foxee_product_category}<br />
weight: {foxee_product_weight}<br />

{/foxee_products}
{foxee_coupons}<br>
{foxee_coupon}<br />
{/foxee_coupons}<br />
{exp:foxee:empty_cart}

{/exp:foxee:cart}
</p>
<hr />

	<div id="footer">
		<div class="footer-text">
			<ul>
				<li>&copy; <a href="http://www.hccdevelopment.com/">HCC Development</a></li> |
				<li><a href="http://www.hccdevelopment.com/docs/foxee/foxee_110/">FoxEE Docs</a></li> |
				<li><a href="http://www.hccdevelopment.com/Web-Based-Software/Product/foxee/">Buy FoxEE</a></li>
			</ul>
		</div>
	</div>

</div>
</body>
</html>
