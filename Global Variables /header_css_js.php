<!--Stylesheets-->
<link rel="stylesheet" href="/css/itp.css" type="text/css" media="screen">
<link rel="stylesheet" href="/css/thickbox.css" type="text/css" media="screen" />
<link rel='stylesheet' type='text/css' media='screen' href='/css/jqModal.css' />
<link rel="stylesheet" href="/nivo_slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/nivo_slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />

<!--Mobile Specific-->
<link rel="apple-touch-icon" href="http://inthepanhandle.com/images/ui/iphonetouch.jpg">
<meta name="apple-itunes-app" content="app-id=384904457">

<!--RSS Feeds-->
<link rel="alternate" type="application/rss+xml" title="ITP Articles Feed" href="{path='SITE_INDEX'}/media/news_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Event Cal Feed" href="{path='SITE_INDEX'}/media/events_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Businesses Feed" href="{path='SITE_INDEX'}/media/business_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Shop Local Feed" href="{path='SITE_INDEX'}/media/products_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP New Coupons Feed" href="{path='SITE_INDEX'}/media/coupons_rss/" />
<link rel="alternate" type="application/rss+xml" title="ITP Flickr Feed" href="http://feeds.feedburner.com/UploadsFromInthepanhandlecom/" />

<!--JS Files-->
<!--<script type="text/javascript" src="http://use.typekit.com/jik1hqx.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>-->
<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js'></script>
<script type="text/javascript" src="/js/jquery.nivo.slider.pack.js"></script>

<!--JS Scripts-->
<!--Twitter Menu Drop Down-->
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

<!--Save as Favorite-->
<script type="text/javascript">
    $(document).ready(function() {
        $('a.Favorites_Save') .click (function() {
            var link = $(this).attr('href')
            $('.Favorites_Status').load(link, function() {
                    $('.Favorites_Delete').show();
                });
            $(this).hide();
            return false;
        });
        $('a.Favorites_Save_Full') .click (function() {
            var link = $(this).attr('href')
            $('.Favorites_Status').load(link, function() {
                    $('.Favorites_Delete').show();
                });
            $(this).hide();
            return false;
        });
        
        $('a.Favorites_Delete') .click (function() {
            var link = $(this).attr('href')
            $('.Favorites_Status').load(link, function() {
                    $('.Favorites_Save').show();
                });
            $(this).hide();
            return false;
        });
    });
</script> 