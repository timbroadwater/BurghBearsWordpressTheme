<?php
/**
 * The Template for displaying all single posts.
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
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
					<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>

					<h1><?php the_title(); ?></h1>

						<?php twentyten_posted_on(); ?>

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
								<?php printf( __( 'View all posts by %s &rarr;', 'twentyten' ), get_the_author() ); ?>
							</a>
<?php endif; ?>

						<?php twentyten_posted_in(); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>

				<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'twentyten' ) . ' %title' ); ?>
				<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'twentyten' ) . '' ); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

</div></div></div>
<?php get_footer(); ?>
