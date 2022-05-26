

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
            <p class="about-top"><img id="portrait-picture" src="<?php echo $profile_url?>" alt="Portrait">I moved to Los Angeles over 10 years ago to pursue a career in the film business. Although I garnered a successful career in that industry, I grew to realize that set life was not my primary passion. So I made the move over to Web Development and Design. The switch was a breath of fresh air and I haven’t looked back.</p>
            <p class="about-bottom">My time on film sets has lent me some amazing skills to apply to my current projects. Between working with clients, being on a large-scale crew and knowing the creative goal is the ‘end’ goal, the shift has been a breeze. I look forward to bringing that expertise and attitude into any new project.</p>
            <p> I enjoy the work that I'm doing, but believe more fully in investing in myself first and my job second. My passions include playing the hurdy-gurdy, gaming of all varieties, and adventuring in the outdoors.</p>
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
