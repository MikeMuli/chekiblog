<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query. 
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
				
              <!-- SET: MAIN CONTENT -->
              <div class="main_content">
              		<div class="content content-inner2">
                    	<h2><?php the_title() ;?></h2>
                        
                        <div class="inner-block2">

						  <?php while (have_posts()) : the_post(); ?>
						                        	<?php the_content(); ?>
						
						</div>
						              
						
							<?php endwhile; ?>

                    </div>
                    <!-- SET: SIDEBAR -->
                    <?php get_sidebar(); ?>
                    <!-- SET: SIDEBAR -->
              </div>
          <!-- END: MAIN CONTENT -->
    
<?php get_footer(); ?>
