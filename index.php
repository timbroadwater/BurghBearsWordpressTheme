<?php

/**

 * The main template file.

 *

 * This is the most generic template file in a WordPress theme

 * and one of the two required files for a theme (the other being style.css).

 * It is used to display a page when nothing more specific matches a query. 

 * E.g., it puts together the home page when no home.php file exists.

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
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
            </div>

</div>

</div>

<?php get_footer(); ?>

