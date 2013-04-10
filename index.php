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
                    	<h2>Featured</h2>
                        <div class="content-block1">
                        	<ul>
                            	<li>
									<?php $i=1; query_posts('showposts=2'); ?>
										<?php while (have_posts()) : the_post(); ?>
											<a href="<?php the_permalink(); ?>" id="img<?php echo$i; ?>" class="img<?php echo$i; ?>"><img src="<?php $val=get_post_custom_values('banner_img'); echo $val[0]; ?>" alt="img" <?php if($i==1){ echo 'height=235'; } else{ echo 'height=145'; } ?> /><span><strong><?php the_title(); ?></strong></span></a>
										<?php $i++; endwhile;wp_reset_query(); ?>
								</li>
                                <li class="list2">
									<?php $i=1; query_posts('showposts=1&offset=2'); ?>
									<?php while (have_posts()) : the_post(); ?>
                                	<a href="<?php the_permalink(); ?>"><img src="<?php $val=get_post_custom_values('banner_img'); echo $val[0]; ?>" alt="img" width=232 height=383><span><strong><?php the_title(); ?></strong></span></a>
									<?php $i++; endwhile;wp_reset_query(); ?>
                                </li>
                                <li class="list3">
									<?php $i=4; query_posts('showposts=2&offset=3'); ?>
									<?php while (have_posts()) : the_post(); ?>
                                	<a href="<?php the_permalink(); ?>" class="img<?php echo $i; ?>"><img src="<?php $val=get_post_custom_values('banner_img'); echo $val[0]; ?>" alt="img" height=189 /><span><strong><?php the_title(); ?></strong></span></a>
									<?php $i++; endwhile;wp_reset_query(); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="recentpost-block">
                        	<h3>Car Reviews</h3>
								<?php $count=1; $j=1; $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
								 query_posts('posts_per_page=6&category_name=Car Reviews&paged='.$paged); ?>
								<?php while (have_posts()) : the_post(); ?> 
								<?php if($count == 1 ){ ?><ul <?php if($j == 2 ){ ?>class="car-items"<?php } ?>><?php } ?> 
                            	<li <?php if($count == 3 ){ ?>class="last-car"<?php } ?>>
                                	<div class="car-img">
                                    	<img src="<?php $val=get_post_custom_values('review_post_img'); echo $val[0]; ?>" alt="img">
                                    </div>
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <?php the_excerpt(); ?>
                                </li>

							<?php $j++; if($count ==3 ){ ?></ul><?php } ?>
								<?php 
									if($count == 3)
										$count =0;
									$count ++; 
									endwhile; ?>
                        </div>
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