<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=David+Libre:wght@400;500;700&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>
	<header>
    		<div class="full-width">
    			<div class="half-width" id="name">
    				<h1>Sarah Beagle Newman</h1>   				
    			</div>
    			<div class="half-width" id="menu">
    				<nav>
    					<ul>
    						<li><a href="about/index.html">About |</a></li>
    						<li><div class="dropdown">
	    							<button class="dropbtn">Portfolio  |</button>	
	    							<div class="portfolio-options">
	    								<a href="rogue/index.html">Rogue Pickings</a>
	    								<a href="jubilee-project-101/index.html">Jubilee Austen</a>
	    								<a href="vision-board-project/index.html" target="_Blank">Vision Board</a>
	    							</div>
	    						</div>	
    						</li>	
    						<li><a href="#contact">Contact</a></li>
    					</ul>
    				</nav>
    			</div>
    		</div>
    	</header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">

