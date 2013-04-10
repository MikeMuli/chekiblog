<?php get_header(); ?>

<div id="main_content">
	<div class="content">

	<?php if (have_posts()) : ?>
	
		<div class="pagepost">
			<h2 class="title">Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
		</div>

		<?php while (have_posts()) : the_post(); ?>
			<div class="row1">
                        	<div class="row1-img">
                            	<img src="<?php $val=get_post_custom_values('slider_post_page_image'); echo $val[0]; ?>" width="315" height="163" alt="img">
                            </div>
			   <div class="row1-content">
                            	<h5><?php the_title(); ?></h5>
                                 <?php //the_excerpt();
					$char =get_the_excerpt();
					echo substr($char,0,300) ?>  <a href="<?php the_permalink(); ?>">Read More</a>
                                <span><strong><?php the_time('F j, Y') ?></strong><?php comments_number( '0', '1', '%' ); ?></span>
                            </div>
			</div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<div class="post">
			<h2 class="title">Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
			<div>
				<p>No posts found. Try a different search?</p>
			</div>
		</div>

	<?php endif; ?>
</div>
<!-- SET: SIDEBAR -->
                   <?php get_sidebar(); ?>
                    <!-- SET: SIDEBAR -->
</div>
<!-- end content -->


<?php get_footer(); ?>