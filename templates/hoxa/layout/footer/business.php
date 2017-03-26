<?php 

defined('_JEXEC') or die;

?>

     <?php if ($this->countModules('footer-four or footer-two')) : ?>
     <div class="clearfix"></div>

     <div class="footer1">
          <div class="container">

               <?php if ($this->countModules('footer-four')) : ?>
                    <jdoc:include type="modules" name="footer-four"  style="footerfour" />
               <?php endif;?>
               
          </div>
     </div><!-- end footer -->
     <?php endif;?>
    

     <?php if($this->countModules('footer-copyright')) :?>

          <div class="clearfix"></div>

          <div class="copyright_info four">
               <div class="container">
                   
                   <jdoc:include type="modules" name="footer-copyright" style="none" />
                   
               </div>
          </div><!-- end copyright info -->

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
<!-- Master Slider -->
<script src="<?php echo $template_folder; ?>/business_js/masterslider/jquery.easing.min.js"></script>
<script src="<?php echo $template_folder; ?>/business_js/masterslider/masterslider.min.js"></script>

<!-- mega menu -->
<script src="<?php echo $template_folder; ?>/business_js/mainmenu/bootstrap.min.js"></script>

<!-- jquery jcarousel -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/business_js/carousel/jquery.jcarousel.min.js"></script>

<!-- scroll up -->
<script src="<?php echo $template_folder; ?>/business_js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="<?php echo $template_folder; ?>/business_js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- accordion -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/business_js/accordion/custom.js"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/business_js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/business_js/mainmenu/modernizr.custom.75180.js"></script>


<!-- progress bar -->
<script src="<?php echo $template_folder; ?>/business_js/progressbar/progress.js" type="text/javascript" charset="utf-8"></script>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main2.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main3.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main4.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="<?php echo $template_folder; ?>/business_js/carousel/jquery.flexslider.js"></script>
<script defer src="<?php echo $template_folder; ?>/business_js/carousel/custom.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/business_js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/business_js/lightbox/custom.js"></script>

<script src="<?php echo $template_folder; ?>/js/custom.js"></script>