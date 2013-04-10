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
              		<div class="content">
                    	<h2><?php if ( is_day() ) : ?>
						<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
						<?php elseif ( is_month() ) : ?>
									<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date('F Y') ); ?>
						<?php elseif ( is_year() ) : ?>
									<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date('Y') ); ?>
						<?php else : ?>
									<?php _e( 'Blog Archives', 'twentyten' ); ?>
						<?php endif; ?></h2>
                       










		         <?php while (have_posts()) : the_post(); ?>

                        <div class="row1">
                        	<div class="row1-img">
                            	<img src="<?php $val=get_post_custom_values('review_post_img'); echo $val[0]; ?>" width="315" height="163" alt="img">
                            </div>
                            <div class="row1-content">
                            	<h5><?php the_title(); ?></h5>
                                 <?php //the_excerpt();
					$char =get_the_excerpt();
					echo substr($char,0,300) ?>  <a href="<?php the_permalink(); ?>">Read More</a>
                                <span><strong><?php the_time('F j, Y') ?></strong><?php comments_number( '0', '1', '%' ); ?></span>
                            </div>
                        </div>

	<?php
	endwhile; ?>

                    </div>
                    <!-- SET: SIDEBAR -->
                   <?php get_sidebar(); ?>
                    <!-- SET: SIDEBAR -->
              </div>
          <!-- END: MAIN CONTENT -->




<?php get_footer(); ?>
