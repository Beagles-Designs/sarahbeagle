<?php
/**
 * Template Name: Home 
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Cinesky
 * @since Cinesky 1.0
 */

get_header(); ?>
<?php get_template_part('template-parts/header/site-header') ?>

    <section class="skills">
      <div class="content-wrapper">
        <h6>Let me translate Designs, Market Strategies and Branding into a live, functional website for you.</h6>
        <div class="skills-text skills-right">
            <h1>Design to Code</h1>
            <p>No matter the format, I'll take your designs and get them ready to go live online.</p>
        </div>
        <div class="skills-text skills-left">
            <h1>HTML5  | CSS3</h1>
             <p>I specialize in HTML5 and CSS3 to give your website responsive functionality.</p>
        </div>
        <div class ="skills-text skills-right">
            <h1>Services</h1>
            <ol>
              <li>Design to Code</li>
              <li>Wordpress Template Customization</li>
              <li>Full Website Design, Code & Launch</li>
            </ol>
        </div>
        <h6>Curious to see what I've done? Head over to my <a href="<?php echo site_url('/work/') ?>">Work</a> page for examples of my work. Then, let's talk about doing something together.</h6>
      </div>
    </section>


<?php get_footer(); ?>
