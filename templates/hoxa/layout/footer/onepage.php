<?php

defined('_JEXEC') or die;

?>

    

	<?php if($this->countModules('footer-onepage')) :?>
		<div class="clearfix"></div>

		<div class="copyrights footer_onepage">
			<div class="container">

				<jdoc:include type="modules" name="footer-onepage" style="none" />
				
			    

			</div>
		</div><!-- end copyrights section -->

		
	<?php endif;?>
	
	<!-- end scroll to top of the page-->
	<a href="#" class="scrollup">Scroll</a>

	<?php if ($this->countModules('debug')) : ?>
  		<jdoc:include type="modules" name="debug" style="none" />
	<?php endif;?>


</div>
<!-- /.site_wrapper -->
<?php if($layoutsite === 'boxed') :?>
</div>
<!-- /.wrapper_boxed -->
<?php endif;?>

<!-- ######### JS FILES ######### -->
<!-- scroll up -->
<script src="<?php echo $template_folder; ?>/onepage_js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/onepage_js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/onepage_js/mainmenu/modernizr.custom.75180.js"></script>
<!-- progress bar -->
<script src="<?php echo $template_folder; ?>/onepage_js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/carousel/jquery.jcarousel.min.js"></script>

<!-- menu -->
<script src="<?php echo $template_folder; ?>/onepage_js/mainmenu/responsive-nav.js"></script>
<script src="<?php echo $template_folder; ?>/onepage_js/mainmenu/fastclick.js"></script>
<script src="<?php echo $template_folder; ?>/onepage_js/mainmenu/scroll.js"></script>
<script src="<?php echo $template_folder; ?>/onepage_js/mainmenu/fixed-responsive-nav.js"></script>

<!-- animate number -->
<script src="<?php echo $template_folder; ?>/onepage_js/aninum/jquery.animateNumber.min.js"></script>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main2.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main3.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main4.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="<?php echo $template_folder; ?>/onepage_js/carousel/jquery.flexslider.js"></script>
<script defer src="<?php echo $template_folder; ?>/onepage_js/carousel/custom.js"></script>
<script src="<?php echo $template_folder; ?>/js/custom.js"></script>