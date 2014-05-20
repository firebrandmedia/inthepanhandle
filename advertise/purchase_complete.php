{assign_variable:my_weblog="subscriptions"}
{assign_variable:my_template_group="advertise"}
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Edit Your InThePanhandle.com Profile | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="inthepanhandle.com is an eastern panhandle West Virginia community website that features local news, businesses, events, classifieds, restaurant menus and more for Berkeley Springs, Martinsburg, Shepherdstown, Inwood, Charles Town and other parts of eastern WV.">
<meta name="keywords" CONTENT="eastern wv, martinsburg, inwood, shepherdstown, berkeley springs, charles town, west virginia, travel, tourism, events, lodging, news, classifieds, jobs, blogs, movies, restaurants">
<link rel="stylesheet" href="/css/itp.css" type="text/css">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
<script type="text/javascript" src="http://jqueryui.com/latest/jquery-1.3.2.js"></script>
<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/1.8rc1/jquery-1.4.1.js"></script>
<script type="text/javascript" src="http://jquery-ui.googlecode.com/svn/tags/1.8rc1/ui/jquery-ui.js"></script>
<script src='/js/jqModal.js' type='text/javascript'></script>
<link rel='stylesheet' type='text/css' media='screen' href='/css/jqModal.css' />

  <script type="text/javascript">
  $(document).ready(function(){
    $("#tabs").tabs();
  });
  </script>

   <script type="text/javascript">
$().ready(function() {
  var triggers = $('a.ex3bTrigger');
  $('#ex3b').jqm({
   trigger: triggers,
    ajax: '@href',
    target: 'div.jqmAlertContent',
    overlay: 0
    });
  if($.browser.msie) {
  $('div.jqmAlert .jqmClose').hover(
    function(){ $(this).addClass('jqmCloseHover'); },
    function(){ $(this).removeClass('jqmCloseHover'); });
  }
});
</script>
<script type="text/javascript">
        $(document).ready(function() {

            $(".signin").click(function(e) {
                e.preventDefault();
                $("fieldset#signin_menu").toggle();
                $(".signin").toggleClass("menu-open");
            });

            $("fieldset#signin_menu").mouseup(function() {
                return false
            });
            $(document).mouseup(function(e) {
                if($(e.target).parent("a.signin").length==0) {
                    $(".signin").removeClass("menu-open");
                    $("fieldset#signin_menu").hide();
                }
            });

        });
</script>
{exp:foxee:headers}
</head>
<body id="more">
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

<!-Start-->
<div id="advertising"><div id="ads">
</div></div>
<div id="body_content">
<div id="edit_user_profile">
<h1>Purchase Complete. Welcome to the family!</h1>
<p>Your purchase has been completed.</p>
</div>

<div id="related_content">
<div class="related_content_box">
<h3>Quick Links</h3>
<ul>
<!--<li><a href="{path='SITE_INDEX'}/support/marketing" title="Internet Marketing Tips for InThePanhandle.com Advertisers">Internet Marketing</a></li>-->
<li><a href="http://www.inthepanhandle.com/itpcore/" title="The Control Panel is used to add content (business listing, products, images, coupons, etc.)">Control Panel</a></li>
<li><a href="{path=''support/help_request"}?height=400&width=380" class="thickbox" title="Get Help!"">Submit Support Request</a></li>
<li><a href="{path='SITE_INDEX'}/itp_blog/" title="InThePanhandle.com Blog">ITP Blog</a></li>
<li><a href="{path='SITE_INDEX'}/itp_blog/article/the_fix_list/" title="Known Issues"">ITP Fix-Me List</a></li>
</ul>
</div>
<div class="related_content_box">
<h3>Help: Tutorial Library</h3>
<ul>
{exp:weblog:entries weblog="video_tutorials" orderby="date" sort="desc" limit="25" dynamic="off" disable="categories|category_fields|member_data|trackbacks|pagination|custom_fields"}
<li><a href="{title_permalink=support/tutorial_details}">{title}</a></li>
{/exp:weblog:entries}
</ul>
</div>
</div>
<div class="clear_both"></div>
</div>
</div>

<!--End-->

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
