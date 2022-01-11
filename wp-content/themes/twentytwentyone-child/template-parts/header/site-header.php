<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>
<?php 
    global $post;
    $page_slug = $post->post_name; ?> 
<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?> <?php echo $page_slug; ?>-header" role="banner">

	<a href="<?php echo site_url('/') ?>"><h1 class="b-logo">B</h1></a>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>

</header><!-- #masthead -->
