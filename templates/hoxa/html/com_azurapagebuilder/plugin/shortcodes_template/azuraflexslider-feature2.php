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

AzuraJs::addStyle('flex','/components/com_azurapagebuilder/assets/plugins/flexSlider/flexslider.css');
AzuraJs::addJScript('flex','/components/com_azurapagebuilder/assets/plugins/flexSlider/jquery.flexslider-min.js');

if(!empty($id)){
	$id = ' id="'.$id.'" ';
}

$classes = 'azura_flexslider flexslider carousel';
if ($class) {
	$classes .= ' '.$class;
}

$animationData = '';
if($animationArgs['animation'] == '1'){
    $classes .= ' animate-in';
    $animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';   
}

$classes = 'class="'.$classes.'"';
if($slideshow == '0') $slideshow = '01';
?>

<div class="slider nosidearrows feature_landing">
<?php if(!empty($flexSliderItemsArray)):?>
	<div<?php echo $id;?> <?php echo $classes.' '.$flexsliderstyle.' '.$animationData;?> data-animation="<?php echo $flexanimation;?>" data-direction="<?php echo $direction;?>" data-slideshow="<?php echo $slideshow;?>" data-slideshowspeed="<?php echo $slideshowspeed;?>" data-animationspeed="<?php echo $animationspeed;?>">

	<ul class="slides">
		<?php foreach($flexSliderItemsArray as $slide) :?>
		<li>
			<?php if(!empty($slide['slideimage'])) :?>
				<?php echo preg_replace("/{image_shortcode}/", '<img src="'.JURI::root(true).'/'.$slide['slideimage'].'" alt="">', $slide['content']);?>
			<?php else :?>
				<?php echo ElementParser::do_shortcode( $slide['content'] ); ?>
			<?php endif;?>
			
		</li>
		<?php endforeach;?>
	</ul>
	</div>
<?php endif;?>
</div>

