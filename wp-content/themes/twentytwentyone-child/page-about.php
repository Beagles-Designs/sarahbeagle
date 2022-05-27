

<?php
/**
 * Template Name: About
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

    <section class="about">
      <div class="content-wrapper">
        <?php 
          $profile_url = get_field('profile_picture');
          $interest_1 = get_field('interest_pic_1');
          $interest_2 = get_field('interest_pic_2');
          $interest_3 = get_field('interest_pic_3'); 
          $size = "thumbnail";
        ?>
        <div class="about-text">
          <h1>My Background</h1>
          <div class="about-container-parent"> 
            <p class="about-top"><img id="portrait-picture" src="<?php echo $profile_url?>" alt="Portrait">I moved to Los Angeles in 2013 to pursue a career in the film business. 
            Although I garnered a successful career in that industry, I grew to realize that production on set was not my primary passion. I made the move over to web development and design; 
            the switch was a breath of fresh air and I haven’t looked back.</p>
            <p class="about-bottom">My time on film sets has given me many valuable skills to apply to my new projects. After years of working directly with discerning clients, collaborating on large-scale 
               crews, and knowing the creative goal is the ‘end’ goal, the shift has been a breeze. I look forward to bringing, along with my technical skills, that expertise and attitude into your project.</p>
            <p> I enjoy the work that I'm doing, but also believe fully in investing in myself for a healthy, well-rounded lifestyle. My passions include playing the hurdy-gurdy, gaming of all varieties, 
              and adventures in the outdoors.</p>
            <!-- <div class="interest-icons">
              <img class="interests-icon" src="<?php echo $interest_1?>" alt="Hurdy-Gurdy Icon">
              <img class="interests-icon" src="<?php echo $interest_2?>" alt="Game Controller Graphic">
              <img class="interests-icon" src="<?php echo $interest_3?>" alt="Rock Climbing">
            </div> -->
            
          </div>
        </div> 
      </div>
    </section>


<?php get_footer(); ?>
