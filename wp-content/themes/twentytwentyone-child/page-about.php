

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
          $profile_pic = get_field('profile_picture');
          $interest_1 = get_field('interest_pic_1');
          $interest_2 = get_field('interest_pic_2');
          $interest_3 = get_field('interest_pic_3'); 
          $size = "thumbnail";
        ?>
        <div class="about-text">
          <h1>My Background</h1>
          <div class="about-container-parent"> 
            <div class="portrait-container"><?php echo wp_get_attachment_image($profile_pic, $size = 'full', false, array("class" => "portrait_picture", "alt" => "Profile Picture", "sizes" => "(min-width: 1280px) 50vw, (min-width: 768px) 380px, 240px") ); ?></div>            

            <p class="about-top">I moved to Los Angeles over 10 years ago to pursue a career in the film business. Although I garnered a successful career in that industry, I grew to realize that set life was not my primary passion. So I made the move over to Web Development and Design. The switch was a breath of fresh air and I haven’t looked back.</p>
            <p class="about-bottom">My time on film sets has lent me some amazing skills to apply to my current projects. Between working with clients, being on a large-scale crew and knowing the creative goal is the ‘end’ goal, the shift has been a breeze. I look forward to bringing that expertise and attitude into any new project.</p>
          </div>
        </div>
        <div class="interests">
            <h1>Other Interests</h1>
              <div class="interests-right">
                <?php echo wp_get_attachment_image($interest_1, 'thumbnail', $icon = true, array("class" => "interests-icon", "alt" =>"Hurdy Gurdy Graphic") ); ?><!-- <img class="interests-icon" src="../img/hg_icon.png" alt="Hurdy-Gurdy Icon"> -->
                <div class="interests-text">  
                  <p>Bardic Pasttimes</p>
                  <p class="interests-small-text">Hurdy-Gurdy, Piano</p>
                </div>  
              </div>
              <div class="interests-left">
                <?php echo wp_get_attachment_image($interest_2, 'thumbnail', $icon = true, array("class" => "interests-icon", "alt" =>"Game Controller Graphic") ); ?>
                <div class="interests-text text-left">  
                  <p>Gaming</p>
                  <p class="interests-small-text">Tabletop/RP, Board, Video</p>
                </div>  
              </div>
              <div class="interests-right">
                <?php echo wp_get_attachment_image($interest_3, 'thumbnail', $icon = true, array("class" => "interests-icon", "alt" =>"rock Climbing Graphic") ); ?>
                <div class="interests-text">  
                  <p>Outdoor Adventures</p>
                  <p class="interests-small-text">Rock Climbing, Camping</p>
                </div>  
              </div>
        </div>  
      </div>
    </section>


<?php get_footer(); ?>
