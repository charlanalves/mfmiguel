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

global $bsCarouselItemsArray;

//ElementParser::do_shortcode($content);

$classes = 'azura_carousel clients_carousel clients';

$animationData = '';
if($animationArgs['animation'] == '1'){
	 $classes .= ' animate-in';
  $animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"'; 
}

if(!empty($class)){
	$classes .= ' '.$class;
}

$classes = 'class="'.$classes.'"';
 
// if(empty($id)){
// 	$id = uniqid('azura_carousel');
// }

//$id = 'id="'.$id.'"';
// 	$actived = false;
// 	$indicator = 0;
	
// $wrapBool = 'true';
// if($wrap != '1'){
// 	$wrapBool = 'false';
// }
?>
<?php if(count($bsCarouselItemsArray)) :?>
<div <?php echo $classes.' '.$bscarouselstyle.' '.$animationData;?>>
 	
	<ul class="jcarousel jcarousel-skin-tango">
    <?php foreach ($bsCarouselItemsArray as $key => $carouselItem) :?>
        <li><img src="<?php echo JURI::root(true).'/'.$carouselItem['image'];?>" alt="..."><?php echo $carouselItem['content'];?></li>
    <?php endforeach;?>

	</ul>

</div>
<?php endif;?>