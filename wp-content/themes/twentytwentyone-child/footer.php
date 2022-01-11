<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->
	<?php 
    global $post;
    $page_slug = $post->post_name; ?> 
	<footer id="colophon  footer-section" class="site-footer <?php echo $page_slug; ?>-footer" role="contentinfo">
      <div class="content-wrapper">
        <h4>Let's Connect</h4>
        <p class="email">sarah.e.beagle@gmail.com</p>
        <div class="contact-icons">
          <p><a href="mailto:sarah.e.beagle@gmail.com" target="_blank"><i class="far fa-envelope"></i></a></p>
          <p><a href="http://instagram.com/velkofilms" target="_blank"><i class="fab fa-instagram"></i></a></p>
          <p><a href="https://www.linkedin.com/in/sarahbeagle/" target="_blank"><i class="fab fa-linkedin-in"></i></a></p>
          <p><a href="https://github.com/Beagles-Designs" target="_blank"><i class="fab fa-github"></i></a></p>
        </div>  
      </div>
  
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
