<?php
/**
 * Template Name: Custome home page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header(); ?>
<body>
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
</div>
<div id="feature">
<div id="text">The Burgh Bears are a non-profit social group for bears and their admirers, created to both promote social and recreational activities for its members, as well as charitable fundraising for the local community. We are based in Pittsburgh, Pennsylvania, but have members from many surrounding states, and our electronic membership is worldwide. <a href="/about/">Learn More</a>
<br>
<form id="searchform" action="http://www.burghbears.info/" method="get" role="search">
<label class="screen-reader-text" for="s">Search for:</label>
<input id="s" type="text" name="s" value="">
<input id="searchsubmit" type="submit" value="Search">
</form>
</div>
<div id="slideshow"><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<?php if ( is_front_page() ) { ?>
						<h2><?php the_title(); ?></h2>
					<?php } else { ?>	
						<h1><?php the_title(); ?></h1>
					<?php } ?>				

						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'twentyten' ), 'after' => '' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'twentyten' ), '', '' ); ?>



<?php endwhile; ?></div>
</div>
<div id="hpfeeds">
<div id="news">
<h4>Recent News</h4>
<ul>
<li><a href="http://www.burghbears.org/wp-content/uploads/2011/12/2011bylaws.pdf" target="_blank">2011 Burgh Bear Bylaws</a></li>
<li><a href="http://www.burghbears.org/gallery/">Burgh Bear Gallery (New Pics)</a></li>
<li><a href="http://www.burghbears.org/woof/">All About W.O.O.F.</a></li>
<li><a href="https://plus.google.com/106087752935707195092/" target="_blank">The Burgh Bears Circle on Google+</a></li>
<li><a href="http://www.twitter.com/burghbears" target="_blank">Follow the Burgh Bears on Twitter</a></li>
</ul>
</div>
<div id="events">

<?php get_sidebar( 'footer' ); ?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>



