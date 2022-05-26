 <?php
/**
 * Template Name: Repos
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
         
         <div class="badge">
              <div class="circle"></div>
          </div>
          <h1><i class="fab fa-github-alt"></i> GitHub Repo Gallery</h1>
          <section class="intro">
              <div class="overview"></div>
          </section>

          <section class="repos">
              <input type="text" class="filter-repos hide" placeholder="Search by name" />
              <ul class="repo-list"></ul>
          </section>
          <section class="repo-data hide"></section>
          <div class="button-container">
              <button class="view-repos hide">Back to Repo Gallery</button>
          </div>
   


<?php get_footer(); ?>
