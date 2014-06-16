<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head>§ion and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Starkers

 * @since Starkers 3.0

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<title>The Burgh Bears</title>

<meta name="keywords" content="Pittsburgh, The Burgh Bears, BurghBears, Pennsylvania, Cubs, Cubz, Woof, Bears After Dark, B.A.D., BAD, social group, member">

<meta name="description" content="The Burgh Bears are a non-profit social group for bears and their admirers, created to both promote social/recreational activities for its members, as well as charitable fund-raising for the local community." />

<link rel="shortcut icon" href="/wp-content/favicon.ico" type="image/x-icon"> 

<link href="/wp-content/favicon.ico" rel="icon" />

<meta name="viewport" content="width=device-width; initial-scale=1.0, maximum-scale=1.0">

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php

	/* We add some JavaScript to pages with the comment form

	 * to support sites with threaded comments (when in use).

	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );



	/* Always have wp_head() just before the closing </head>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to add elements to <head> such

	 * as styles, scripts, and meta tags.

	 */

	wp_head();

?>

 


</head>