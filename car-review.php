<?php
/*
Template Name: Car Review
*/
?>





<?php get_header(); ?>
  



          <!-- SET: MAIN CONTENT -->
              <div class="main_content">
              		<div class="content">
                    	<h2><?php the_title(); ?></h2>
                        <div class="slider-main">
                            <div class="slide-show">
                                <div id="slider">
                                    <ul>

<?php
		query_posts('showposts=4&category_name=Car Reviews'); ?>
		         <?php while (have_posts()) : the_post(); ?>

                                        <li>
                                        
                                            <img src="<?php $val=get_post_custom_values('slider_post_page_image'); echo $val[0]; ?>" width="412" height="236" alt="img" class="slid_img"><p>&nbsp;</p>
                                            <div class="slide-content">
                                                <h2><?php the_title(); ?></h2>
                                            </div>
                                        </li>


	<?php 
	endwhile; ?>

                                     
                                    </ul>
                                </div>
                            <div class="sliderbutton"><img src="<?php bloginfo('template_url'); ?>/images/slide-arrow.gif" id="next" width="29" height="54" alt="Next" onclick="slideshow.move(1)" ></div>
                            <ul id="pagination" class="pagination">


<?php $i=1; $j=0;
		query_posts('showposts=4&category_name=Car Reviews'); ?>
		         <?php while (have_posts()) : the_post(); ?>

                                <li onclick="slideshow.pos(<?php echo $j ?>)"><?php echo $i ?></li>

	<?php $i++; $j++;
	endwhile; ?>

                            </ul>
                    		</div>
						</div>


<?php $i=1; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
 query_posts('posts_per_page=5&category_name=Car Reviews&paged='.$paged); ?>
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

	<?php $i++;
	endwhile; ?>

                         <?php /* Display navigation to next/previous pages when applicable */ ?>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>

  <?php next_posts_link( __( '<span id="previe">Previous Posts</span>', 'twentyten' ) ); ?>
  <?php previous_posts_link( __( ' <span id="previe">Latest Posts</span>', 'twentyten' ) ); ?>

<?php endif; ?>
                    </div>
                    <!-- SET: SIDEBAR -->
                   <?php get_sidebar(); ?>
                    <!-- SET: SIDEBAR -->
              </div>
          <!-- END: MAIN CONTENT -->

              
				
<?php get_footer(); ?>
