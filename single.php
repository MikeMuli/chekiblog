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
  <?php while (have_posts()) : the_post(); ?>
                    	<h2><?php the_title() ;?></h2>
                        <div class="inner-block1">
                        	<div class="inner-block1-imgblock">
                            	<img src="<?php $val=get_post_custom_values('slider_post_page_image'); echo $val[0]; ?>" width="431" height="236" alt="img" class="car-img1">
                                                            
                            </div>
                            <div class="inner-block1-content">
                            	<ul>
                                	<li><span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span></li>
                                    <li><span class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span></li>
                                    <li><a href="#" class="icon3">Comment (<?php comments_number( '0', '1', '%' ); ?>)</a></li>
                                    <li><span class='st_email' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='email'></span></li>
                                </ul>
                                <p><?php the_time('F j, Y') ?></p>
                                <span class="filed">Filed under: <?php the_category(' , '); ?></span>
                            </div>
                        </div>
                        <div class="inner-block2">


                        	<?php the_content(); ?>
				<div class="comments">
                        	<?php comments_template(); ?>
			<div class="clear"></div>
			
                        </div>
 

                        </div>
			                       

	<?php $i++; $j++;
	endwhile; ?>

                        <a href="#" id="nextpost">Next Post</a>
                    </div>
                    <!-- SET: SIDEBAR -->
                    <?php get_sidebar(); ?>
                    <!-- SET: SIDEBAR -->
              </div>
          <!-- END: MAIN CONTENT -->
		
<?php get_footer(); ?>