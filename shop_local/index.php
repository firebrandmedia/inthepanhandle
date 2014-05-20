<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Shop Local | Eastern WV Business Directory | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
{embed="embeds/css_js"}
</head>
<body id="shopping">
{search}
<div id="content">
<div id="header">
<div id="header_content">
{embed="embeds/logo"}
{embed="embeds/navigation_primary"}
<div class="clear_both"></div>
</div>
</div>
<div id="announcements">
<div id="announcements_content">
{embed="embeds/welcome_login"}
{embed="embeds/weather"}
</div>
</div>
<div id="body_content_background">
<div id="advertising">
<div id="ads">


</div>
</div>
<div id="body_content">
{embed="shop_local/featured_shop_local"}
{embed="embeds/featured_products"}
<div id="biz_categories">
<h2>Shop Local: Browse the InThePanhandle.com Local Product Directory</h2>
{exp:weblog:entries limit="1" weblog="products"}
    <ul id="nav_categories" class="nav_categories">
    {exp:query sql="
        SELECT DISTINCT t1.cat_url_title, t1.cat_name, t2.cat_id, t3.weblog_id
        FROM exp_categories t1, exp_category_posts t2, exp_weblog_titles t3
        WHERE t1.cat_id = t2.cat_id
            AND t2.entry_id = t3.entry_id
            AND t3.weblog_id = '6'
            AND t1.parent_id = 0
        ORDER BY t1.cat_name
    "}
        <li class="parent"><a href="{path=shop_local/cat_listings/category/}{cat_url_title}">{cat_name}</a>
        <?
            global $DB;

            $sql = "SELECT DISTINCT t1.cat_url_title AS subcat_url_title, t1.cat_name AS subcat_name
                    FROM exp_categories t1, exp_category_posts t2, exp_weblog_titles t3
                    WHERE t1.cat_id = t2.cat_id
                        AND t2.entry_id = t3.entry_id
                        AND t3.weblog_id = '6'
                        AND t1.parent_id = {cat_id}
                    ORDER BY t1.cat_name";

            $query = $DB->query($sql);
            if ($query->num_rows > 0)
            {
                echo "<ul>";
                foreach($query->result as $row)
                {
                    echo '<li><a href="{path=shop_local/cat_listings/category}'.$row['subcat_url_title'].'">'.$row['subcat_name'].'</a></li>';
                }
                echo "</ul>";
            }

        ?>
        </li>
    {/exp:query}
    </ul>
{/exp:weblog:entries}

</div>
</div>
</div>
<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both"}
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
{embed="embeds/footer"}
