<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>

<style type="text/css">
<!--
.meta-prep, .meta-sep, .meta-prep-author, .author, .entry-date, .vcard {display:none;}
a[href*="#respond"] {display:none;}

-->
</style>

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
<div id="searchwrap">
<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Search Results for: %s', 'twentyten' ), '' . get_search_query() . '' ); ?></h1>
				<p><?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?></p>
<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>

<?php endif; ?>
</div></div></div></div>
<?php get_footer(); ?>

				