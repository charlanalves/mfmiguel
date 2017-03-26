<?php 

defined('_JEXEC') or die;

?>

<?php if ($this->countModules('footer-graph')) : ?>
  		<jdoc:include type="modules" name="footer-graph" style="none" />
	<?php endif;?>

	<?php if ($this->countModules('footer-four or footer-two')) : ?>
	<div class="clearfix"></div>

	<div class="footer1">
		<div class="container">

			<?php if ($this->countModules('footer-two')) : ?>
				<jdoc:include type="modules" name="footer-two"  style="footertwo" />
			<?php endif;?>

		    <div class="clearfix divider_dashed1"></div>

			<?php if ($this->countModules('footer-four')) : ?>
				<jdoc:include type="modules" name="footer-four"  style="footerfour" />
			<?php endif;?>
	  		
  		</div>
	</div><!-- end footer -->
	<?php endif;?>
    

	<?php if($this->countModules('footer-copyright')) :?>
		<div class="clearfix"></div>

		<div class="copyright_info">
			<div class="container">

				<div class="clearfix divider_dashed10"></div>
			    
			    <jdoc:include type="modules" name="footer-copyright" style="none" />
			    
			</div>
		</div><!-- end copyright info -->

	<?php endif;?>

	<?php if($this->countModules('footer-onepage')) :?>
		<div class="clearfix"></div>

		<div class="copyrights">
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
<!-- slide panel -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/slidepanel/slidepanel.js"></script>

<!-- Master Slider -->
<script src="<?php echo $template_folder; ?>/js/masterslider/jquery.easing.min.js"></script>
<script src="<?php echo $template_folder; ?>/js/masterslider/masterslider.min.js"></script>

<!-- mega menu -->
<script src="<?php echo $template_folder; ?>/js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php echo $template_folder; ?>/js/mainmenu/customeUI.js"></script> 

<!-- jquery jcarousel -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/carousel/jquery.jcarousel.min.js"></script>

<!-- scroll up -->
<script src="<?php echo $template_folder; ?>/js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="<?php echo $template_folder; ?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>


<!-- accordion -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/accordion/custom.js"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/mainmenu/modernizr.custom.75180.js"></script>

<!-- progress bar -->
<script src="<?php echo $template_folder; ?>/js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main2.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main3.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main4.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="<?php echo $template_folder; ?>/js/carousel/jquery.flexslider.js"></script>
<script defer src="<?php echo $template_folder; ?>/js/carousel/custom.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/lightbox/custom.js"></script>

<script src="<?php echo $template_folder; ?>/js/form/jquery.form.min.js"></script>
<script src="<?php echo $template_folder; ?>/js/form/jquery.validate.min.js"></script>


<script src="<?php echo $template_folder; ?>/js/classyloader/jquery.classyloader.min.js"></script>

<script src="<?php echo $template_folder; ?>/js/custom.js"></script>


