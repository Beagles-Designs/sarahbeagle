 <?php
/**
 * Template Name: Portfolio
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


    <section class="portfolio">
      <div class="content-wrapper">
        <div class="portfolio-text">
          <h1>Featured Projects</h1>
          <h6>I designed, coded and launched my own website from scratch. Feel free to peak under the covers and look at the code, don't be shy.</h6>
          <p>Click on the Pictures below to see the full websites, or follow the GitHub Icon to see the full collection of my codes.</p>
          
          <?php query_posts(array('post_type' => 'projects', 'orderby' => 'publish_date', 'order' => 'ASC')); ?>
                <?php while ( have_posts() ) : the_post(); 
                    $name = get_field('project_name');
                    $website_type = get_field('website_type');
                    $link = get_field('project_link');
                    $project_image = get_field('project_image');
                    $project_scope = get_field('project_scope');
                    $languages = get_field('languages');
                    $additional_notes = get_field('additional');
            ?>

            <div class="portfolio-container-parent">   
                          
              <h3 class="portfolio-titles"><a href="<?php echo $link ?>" target="_blank"><?php echo $name ?></a></h3>
              <h4><?php echo $website_type ?></h4>

              <div class="portfolio-container-small">
                  <div class="project-image-container"> 
                    <a href="<?php echo $link ?>" target="_blank"><img src="<?php echo $project_image ?>" alt="<?php echo $name ?>"></a>
                  </div>  
                  <div class="project-specifics">
                    <h6>Contributions</h6>  
                    <p><?php echo $project_scope ?></p>
                    <h6>Languages Used</h6>
                    <p><?php echo $languages ?></p>
                    <p class="project-notes"><?php echo $additional_notes ?></p>
                  </div> 
              </div>  <!-- end portfolio-container-small --> 
            </div> <!-- End portfolio-container-parent -->
          
          <?php endwhile; // end of the loop. ?>

          <div class="github-container">
            <p id="git-icon-p"><a href="https://beagles-designs.github.io/github-repo-gallery/" target="_blank"><i class="fab fa-github"></i></a></p>
            <p id="github-link">Click Here <br>for my customized Github Repo Gallery.</p>
          </div>  
        </div> <!--- End portfolio-text -->
      </div> <!-- End Content-wrapper -->
    </section>


<?php get_footer(); ?>
