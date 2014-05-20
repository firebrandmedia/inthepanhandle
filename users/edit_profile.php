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

</head>
<body id="more">
{embed="embeds/iphone"}
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
{if logged_in}
{embed="users/edit_profile_author"}
{/if}
{if logged_out}
<h1>Who goes there? Sorry, you have to be logged in to access your profile.</h1>
<p>To edit your profile, please <a href="{path=''users/login"}?height=220&width=400" class="thickbox" title="InThePanhandle.com Account Log-in"">log-in</a>.</p>
{/if}
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
