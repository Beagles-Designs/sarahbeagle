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
<header>
      <div class="content-wrapper" id="site-header">
        <a href="<?php echo site_url('') ?>" aria-label="Go back to Landing Page"><h2>B</h2></a>
        <div class="mobile-menu">
                <nav class="menu menu-child" aria-label="Expand mobile site">
                  <div class="menu-lines one main-menu-lines"></div>
                  <div class="menu-lines two main-menu-lines"></div>
                  <div class="menu-lines three main-menu-lines"></div>
                  <div id="dropdown-options">
                    <a href="<?php echo site_url('/home/') ?>">Home</a>
                    <a href="<?php echo site_url('/home/#skills-section') ?>">Skills</a>
                    <a href="<?php echo site_url('/about/') ?>">About</a>
                    <a href="<?php echo site_url('/work/') ?>">Work</a>
                    <a href="#footer-section">Contact</a>
                  </div>
               </nav>  

        </div>
      </div>  
    </header>

