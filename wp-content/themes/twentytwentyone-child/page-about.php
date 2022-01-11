

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

    <section class="about">
      <div class="content-wrapper">
        <div class="about-text">
          <h1>My Background</h1>
          <div class="about-container-parent"> 
            <div class="portrait-container"><img src="../img/portrait.png" alt="Portrait"></div>
            <p class="about-top">I moved to Los Angeles over 10 years ago to pursue a career in the film business. Although I garnered a successful career in that industry, I grew to realize that set life was not my primary passion. So I made the move over to Web Development and Design. The switch was a breath of fresh air and I haven’t looked back.</p>
            <p class="about-bottom">My time on film sets has lent me some amazing skills to apply to my current projects. Between working with clients, being on a large-scale crew and knowing the creative goal is the ‘end’ goal, the shift has been a breeze. I look forward to bringing that expertise and attitude into any new project.</p>
          </div>
        </div>
        <div class="interests">
            <h1>Other Interests</h1>
              <div class="interests-right">
                <img class="interests-icon" src="../img/hg_icon.png" alt="Hurdy-Gurdy Icon">
                <div class="interests-text">  
                  <p>Bardic Pasttimes</p>
                  <p class="interests-small-text">Hurdy-Gurdy, Piano</p>
                </div>  
              </div>
              <div class="interests-left">
                <img class="interests-icon" src="../img/controller_icon.png" alt="Hurdy-Gurdy Icon">
                <div class="interests-text text-left">  
                  <p>Gaming</p>
                  <p class="interests-small-text">Tabletop/RP, Board, Video</p>
                </div>  
              </div>
              <div class="interests-right">
                <img class="interests-icon" src="../img/climber_icon.png" alt="Hurdy-Gurdy Icon">
                <div class="interests-text">  
                  <p>Outdoor Adventures</p>
                  <p class="interests-small-text">Rock Climbing, Camping</p>
                </div>  
              </div>
        </div>  
      </div>
    </section>


<?php get_footer(); ?>
