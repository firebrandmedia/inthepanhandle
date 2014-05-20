<? $zipcode = $_GET['zipcode'] ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Local Movie Showtimes | InThePanhandle.com | Your Eastern WV Community Website</title>
<meta name="description" content="Local movie showtimes and IMDB ratings for Martinsburg, Hagerstown and Winchester Movie Theaters.">
<meta name="keywords" CONTENT="movies, showtimes, imdb, theater, hagerstown, winchester, martinsburg">
<meta name="viewport" content="width=1024" />

{header_css_js}

<!--Movie Showtime Script-->
<script type="text/javascript"><!--//--><![CDATA[//><!--

sfHover = function() {
	var sfEls = document.getElementById("nav").getElementsByTagName("LI");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);

//--><!]]></script>

</head>
<body id="movies">
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
{embed="embeds/weather"}
{embed="embeds/welcome_login"}
</div>
</div>
<div id="body_content_background">
<div id="advertising">
<div id="ads">

</div>
</div>
<div id="body_content">

<?
$searchterm = urlencode($searchterm);
$off_pg = max($offset,5)/100;
$url="http://imdb.com/showtimes/location/$zipcode";

preg_match("/^(https?:\/\/)?([^\/]*)(.*)/i", "$url", $matches);
$domain = "http://" . $matches[2];
$page = $matches[3];

$fd = fopen($domain.$page, "rb");
$code = "";
while(!feof($fd)){
	$code .= fread($fd, 4096);
}
fclose($fd);
$playcode = $code;

?>


<TABLE cellSpacing=3 cellpadding=0 width="100%" border=0 class="showtimes_table"><TR>

<?

$start= strpos($code, "<table class=\"showtimes tabular\" width=\"100%\" cellpadding=\"4\" cellspacing=\"0\">");
$finish= strpos($code, "<p class=\"showtimes\">");
$length= $finish-$start;
$code=substr($code, $start, $length);

$newcode = preg_replace("/(href=\"?)(\/[^\"\/]+)/", "\\1" . $domain . "\\2", $code);

$newcode = str_replace("<a", "<a target=_blank", $newcode);

$newcode = str_replace("hhttp://ia.ec.imdb.com/media/imdb/01/I/15/35/70/10.gif", "../movies/images/trailer.gif", $newcode);

$newcode = str_replace("http://i.imdb.com","http://imdb.com", $newcode);

echo $newcode;

?>

</div>
<div id="footer">
<div id="footer_nav">
{embed="embeds/subnav_destinations"}
{embed="embeds/subnav_help"}
{embed="embeds/subnav_interact"}
{embed="embeds/twitter"}
{embed="embeds/subnav_sitestats"}
<div class="clear_both">
</div>
</div>
</div>
{embed="embeds/copyright"}
</div>
{embed="embeds/footer"}
