<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<body class="page">
<div id="bgimage">
<div id="container">
<div id="header"><a href="http://www.burghbears.info"><img src="/images/hplogo.png" alt="The Burgh Bears" width="365" height="140" border="0" /></a></div>
<div id="menu">
<ul>
<li><a href="/">Home</a></li>
<li><a href="/about/">About</a></li>
<li title="desktop"><a href="/events/">Events</a></li>
<li title="mobile"><a href="/events/upcoming/">Events</a></li>
<li><a href="/bearmaul/">Bear Maul</a></li>
<li><a href="/members/">Members</a></li>
<li><a href="/news/">News</a></li>
<li><a href="/gallery/">Gallery</a></li>
<li><a href="/admin/">Admin</a></li>
</ul>
</div><!-- #access -->
<div id="content">
<div id="lcontent">
<?php get_sidebar(); ?>
</div>

<div id="rcontent">



				<h1><?php _e( 'Not Found', 'twentyten' ); ?></h1>
				<p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
				<?php get_search_form(); ?>

	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>
</div>
</div>
</div>
<?php get_footer(); ?>