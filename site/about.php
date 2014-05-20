{assign_variable:my_weblog="default_site"}
{assign_variable:my_template_group="site"}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>{exp:weblog:info weblog="{my_weblog}"}{blog_title}{/exp:weblog:info}</title>
<meta http-equiv="Content-Type" content="text/html; charset={charset}" />

<link rel='stylesheet' type='text/css' media='all' href='{stylesheet={my_template_group}/site_css}' />
<style type='text/css' media='screen'>@import "{stylesheet={my_template_group}/site_css}";</style>

<link rel="alternate" type="application/rss+xml" title="RSS" href="{path={my_template_group}/rss_2.0}" />
<link rel="alternate" type="application/atom+xml" title="Atom" href="{path={my_template_group}/atom}" />

</head>

<body>

<div id="topbar"></div>
<div class="secondbar"></div>


<div id="wrapper">
<div id="header">

<ul id="navbar">
  <li id="home"><a href="{homepage}" title="Home">Home</a></li>
  <li id="about"><a href="{path={my_template_group}/about}" title="About">About</a></li>
  <li id="archives"><a href="{path={my_template_group}/archives}" title="Archives">Archives</a></li>
  <li id="contact">{encode="{webmaster_email}" title="Contact"}</li>
</ul>

<div id="blogtitle"><h1>{exp:weblog:info weblog="{my_weblog}"}{blog_title}{/exp:weblog:info}</h1></div>
<div class="spacer"></div>
</div>
<div class="secondbar"></div>

<div class="spacer"></div>

<div id="content">


<div id="blog">
<div class="entry">

<h2 class="title">About</h2>
<p>Quote meon an estimate et non interruptus stadium. Sic tempus fugit esperanto hiccup estrogen. Glorious baklava ex librus hup hey ad infinitum. Non sequitur condominium facile et geranium incognito.</p>


</div>

<p><a href="{homepage}">&lt;&lt; Back to main</a></p>

</div>


<div id="sidebar">

<p><b>Members:</b>
<br />
{if logged_in}
 <a href="{path=member/profile}">Your Account</a>  |  <a href="{path=logout}">Logout</a>
{/if}

{if logged_out}
 <a href="{path=member/login}">Login</a> | <a href="{path=member/register}">Register</a>
{/if}

 | <a href="{path=member/memberlist}">Member List</a>
</p>


<h2 class="sidetitle">Monthly Archives</h2>
<ul>
{exp:weblog:month_links weblog="{my_weblog}"}
<li><a href="{path={my_template_group}/index}">{month} {year}</a></li>
{/exp:weblog:month_links}

<li><a href="{path={my_template_group}/archives}">Complete Archives</a></li>
<li><a href="{path={my_template_group}/categories}">Category Archives</a></li>
</ul>


<h2 class="sidetitle">Most recent entries</h2>
<ul>
{exp:weblog:entries orderby="date" sort="desc" limit="15" weblog="{my_weblog}" dynamic="off" disable="pagination|custom_fields|categories|member_data|trackbacks"}
<li><a href="{title_permalink={my_template_group}/index}">{title}</a></li>
{/exp:weblog:entries}
</ul>


<h2 class="sidetitle">Syndicate</h2>
<ul>
<li><a href="{path={my_template_group}/atom}">Atom</a></li>
<li><a href="{path={my_template_group}/rss_2.0}">RSS 2.0</a></li>

</ul>

</div>
</div>
<br class="spacer" />
<div id="footer">

This page has been viewed {hits} times &#8226;
Page rendered in {elapsed_time} seconds &#8226;

<p><br /><a href="http://expressionengine.com/">Powered by ExpressionEngine</a></p>

</div>
</div>
</body>
</html>
