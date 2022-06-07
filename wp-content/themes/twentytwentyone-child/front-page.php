<?php
/**
 * The template for Front-Page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */

get_header(); ?>

<section id="primary" class="default-page home-page hero-content">
  <div class="main-content" role="main">
    <section class="cover">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="background-img">
            <img src="<?php echo get_stylesheet_directory_uri('template_directory'); ?>/assets/img/labyrinth-grey-01.png" alt="Labyrinth graphic logo" />
      </div> 
      <div class="content-wrapper-cover">  
        <a href="<?php echo site_url('/home/') ?>">
              <nav class="menu" aria-lable="Click here to access the main sites">
                <div class="menu-lines one"></div>
                <div class="menu-lines two"></div>
                <div class="menu-lines three"></div>
              </nav>
          </a>
          <div class="cover-parent"> 
              <div class="cover-main">
                <h1 class="cover-title"><?php the_title(); ?></h1>
                <p class="cover-text"><?php the_content(); ?></p>
              </div>
          </div>
    </div>
    <?php endwhile; ?>
    </section>  
  </div>

 
</section>

<?php get_footer(); ?>


