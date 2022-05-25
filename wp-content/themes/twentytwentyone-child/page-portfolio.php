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
          <div class="portfolio-container-parent"> 
            <div class="portfolio-container-small port-one">
              <h3 class="portfolio-titles">Unplugged Retreat</h3>
              <h5>Business Website</h5>
              <div class="port-desk-one"> 
                <a href="../unplugged-retreat/index.html" target="_blank"><img src="../img/unplugged-screen.jpg" alt="Unplugged Website"></a>
                <div id="unplugged-tasks">  
                  <p>Implemented responsive, mobile first coding.</p>
                  <p>Emphasis on CSS3 Flexbox techniques.</p>
                </div>  
              </div>
            </div>
            <div id="green-portfolio">
              <div class="portfolio-container-small port-two">
                <h3 class="portfolio-titles">Rogue Pickings</h3>
                <h5>Restaurant Website</h5>
                <div class="port-desk-two"> 
                  <a href="../rogue/index.html" target="_blank"><img src="../img/rogue-screen.png" alt="Rogue Pickings Website"></a>
                  <p>Focused on taking Photosop Design to Pixel Perfect HTML Code</p>
                </div>   
              </div>
            </div>  
            <div class="portfolio-container-small port-three">
              <h3 class="portfolio-titles">Jubilee Austin</h3>
              <h5>Portfolio Website</h5>
              <a href="../jubilee-project-101/index.html" target="_blank"><img src="../img/jubillee-screen.jpg" alt="Jubillee Austin Website"></a>
            </div>
            <p><a href="https://github.com/Beagles-Designs" target="_blank"><i class="fab fa-github"></i></a></p>
            <p id="github-link">Click Here <br>for a Journey to my GitHub Profile</p>  
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>
