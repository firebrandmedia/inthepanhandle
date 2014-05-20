<meta name="apple-itunes-app" content="app-id=384904457">

<link rel="stylesheet" href="/css/itp.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel='stylesheet' type='text/css' media='screen' href='/css/jqModal.css' />

<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<link rel="alternate" type="application/rss+xml" title="ITP Articles Feed" href="{path='SITE_INDEX'}/media/news_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Event Cal Feed" href="{path='SITE_INDEX'}/media/events_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Businesses Feed" href="{path='SITE_INDEX'}/media/business_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Shop Local Feed" href="{path='SITE_INDEX'}/media/products_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Coupons Feed" href="{path='SITE_INDEX'}/media/coupons_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Flickr Feed" href="http://feeds.feedburner.com/UploadsFromInthepanhandlecom/" />

<script type="text/javascript" src="http://use.typekit.com/jik1hqx.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<script type='text/javascript' src='/js/jquery-1.2.1.pack.js'></script>
<script type="text/javascript" src="/js/thickbox.js"></script>
<script type="text/javascript" src="/js/s3Slider.js"></script>
<script type="text/javascript" src="/js/swfobject.js"></script>
<script src='/js/jqModal.js' type='text/javascript'></script>

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
