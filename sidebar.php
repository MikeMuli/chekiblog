   <!-- SET: SIDEBAR -->
                    <div id="sidebar">
                    	<div class="searchbox">

							<form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
							
								<input type="txt" name="s" id="s" class="field1" value="Search the blog" onClick="this.value='';" onFocus="this.select()" onBlur="this.value=!this.value?'Search the blog':this.value;">
								<input type="submit" id="searchsubmit" value=" " class="but"  /	>
							    
								
							</form>

                        </div>
                        <div class="newsletter">
                        	<h3>Subscribe to our Newsletter</h3>
<?php dynamic_sidebar('Newsletter Area '); ?><br /><br />

                           
                        </div>
                      <?php dynamic_sidebar('Sidebar-Category Area '); ?>
                       <?php dynamic_sidebar('Sidebar-Archive Area '); ?>
                        <div class="face-booklike">
                        	<?php dynamic_sidebar('Facebook Area '); ?>
                        </div>
                    </div>
                    <!-- SET: SIDEBAR -->