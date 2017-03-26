<?php 
/**
 * @package Azura Joomla Pagebuilder
 * @author Cththemes - www.cththemes.com
 * @date: 15-07-2014
 *
 * @copyright  Copyright ( C ) 2014 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
defined('_JEXEC') or die;

// AzuraJs::addStyle('owlCarousel','/components/com_azurapagebuilder/assets/plugins/owlCarousel/owl.carousel.css');
// AzuraJs::addJScript('jquery_easing','/components/com_azurapagebuilder/assets/plugins/owlCarousel/jquery.easing.1.3.min.js');
// AzuraJs::addJScript('owlCarousel','/components/com_azurapagebuilder/assets/plugins/owlCarousel/owl.carousel.min.js');

$classes = "azura_tweets slider nosidearrows";

$animationData = '';
if($animationArgs['animation'] == '1'){
	$classes .= ' animate-in';
	$animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';	
}

if(!empty($extraclass)){
	$classes .= ' '.$extraclass;
}

$classes = 'class="'.$classes.'"';

?>
<section <?php echo $classes.' '.$tweetsstyle.' '.$animationData;?>>
    <?php if(count($tweetsFeed)) :?>
    <div class="flexslider two carousel">
      	<ul class="slides">
			<?php foreach ($tweetsFeed as $key => $feed) :?>
				<li>
                	<i class="fa fa-twitter animate" data-anim-type="zoomIn" data-anim-delay="800"></i>
                    <br /><br />
                	<!-- <h4>New Tweet-1</h4> -->
                    <p class="lessw1"><?php echo $tweetsHelper->prepareTweet($feed['text']);?></p>
                    <br />
                    <!-- <a href="#" class="morelink">Follow Us</a> -->
				</li><!-- end section -->
			<?php endforeach;?>
		</ul>
	</div>
	<?php endif;?>
</div>