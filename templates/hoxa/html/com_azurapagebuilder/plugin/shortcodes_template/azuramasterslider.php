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
global $masterSliderItemsArray;
if(empty($id)){
	$id = uniqid('masterslider');
}

$classes = 'azp_masterslider master-slider';
$animationData = '';
if($animationArgs['animation'] == '1'){
    $classes .= ' animate-in';
    $animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
}

if (!empty($class)) {
	$classes .= ' '.$class;
}
if(!empty($skin)&&$skin != 'custom'){
	$classes .= ' '.$skin;
}

$classes = 'class="'.$classes.'"';

?>

<!-- masterslider -->
<div <?php echo $classes.' '.$mastersliderstyle.' '.$animationData;?> id="<?php echo $id;?>">
<?php if(!empty($masterSliderItemsArray)) :
    foreach ($masterSliderItemsArray as $key => $slide) : ?>

        <div class="ms-slide <?php echo $slide['class'];?>">
             
            <?php if(!empty($slide['slidebackground'])) :?>
            <!-- slide background -->
            <img src="<?php echo JURI::root(true);?>/masterslider/blank.gif" data-src="<?php echo JURI::root(true).'/'.$slide['slidebackground'];?>" alt=""/>     
            <?php endif;?>
            <?php echo $slide['content'];?>

        </div>
    <?php endforeach; endif;?>
</div>

