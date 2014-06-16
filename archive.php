<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1>
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: %s', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: %s', 'twentyten' ), get_the_date('F Y') ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: %s', 'twentyten' ), get_the_date('Y') ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archives.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>

</div></div></div>
<?php get_footer(); ?>