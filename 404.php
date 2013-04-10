<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>




              <!-- SET: MAIN CONTENT -->
              <div class="main_content">
              		<div class="content content-inner2">
                    	<h2><?php _e( 'Not Found', 'twentyten' ); ?></h2>
                        
                        <div class="inner-block2">

					 <p><?php _e( 'Apologies, but the page you requested could not be found. Perhaps searching will help.', 'twentyten' ); ?></p>
						
						</div>
					

                    </div>
                    <!-- SET: SIDEBAR -->
                    <?php get_sidebar(); ?>
                    <!-- SET: SIDEBAR -->
              </div>
          <!-- END: MAIN CONTENT -->



<?php get_footer(); ?>
