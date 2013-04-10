<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

     
        </div>
  <!-- END: CONTAINER -->
  
          <!-- SET: FOOTER -->
              <div id="footer">
              	  <div class="container">
                  	 <?php wp_nav_menu( array('menu' => 'footer_Menu1', 'container'=>'','menu_class'      => '' )); ?>	
                    <?php wp_nav_menu( array('menu' => 'footer_Menu2', 'container'=>'','menu_class'      => '' )); ?>	
                      <?php wp_nav_menu( array('menu' => 'footer_Menu3', 'container'=>'','menu_class'      => '' )); ?>	
                      <?php wp_nav_menu( array('menu' => 'footer_Menu4', 'container'=>'','menu_class'      => '' )); ?>	
                  
                      <span id="named"><a href="#top">Top /</a><?php the_breadcrumb(); ?></span>
                  </div>
              </div>
          <!-- END: FOOTER -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>


 <script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
	id:'slider',
	auto:3,
	resume:true,
	vertical:false,
	navid:'pagination',
	activeclass:'current',
	position:0
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-13121198-16']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>