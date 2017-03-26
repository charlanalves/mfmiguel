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

global $tourItemsArray;

ElementParser::do_shortcode($content);

if($id){
    $id = 'id="'.$id.'"';
}

$classes = 'azura_tour';

$animationData = '';
if($animationArgs['animation'] == '1'){
        $classes .= ' animate-in';
    $animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"'; 
}

if ($class) {
    $classes .= ' '.$class;
}
if(!empty($classes)){
    $classes = 'class="'.$classes.'"';
}
if(is_int((int)$defaultactive)){
    $defaultactive = (int)$defaultactive;
}else{
    $defaultactive = 1;
}

?>

<div <?php echo $classes .' '.$tabsstyle.' '.$animationData;?>>
    
    <ul class="tabs">
    <?php foreach ($tourItemsArray as $key => $tour) :?>
        <?php if(($key+1) === $defaultactive) :?>
        <li class="active animate" data-anim-type="zoomIn">
        <?php else : ?>
        <li class="animate" data-anim-type="zoomIn">
        <?php endif;?>

        <a href="#<?php echo !empty($tour['id'])? $tour['id'] : ElementParser::slug($tour['title']);?>" target="_self">
        <?php if(!empty($tour['iconclass'])) :?>
        <i class="<?php echo $tour['iconclass'];?>"></i>
        <?php endif;?>
        <?php echo $tour['title'];?></a>
    </li>
    <?php endforeach;?>
    </ul>

    <div class="tabs-content">
        <?php foreach ($tourItemsArray as $key => $tour) :?>
            <?php if(($key+1) === $defaultactive) :?>
            <div class="tabs-panel active <?php echo $tour['class'];?>" id="<?php echo !empty($tour['id'])? $tour['id'] : ElementParser::slug($tour['title']);?>">
            <?php else : ?>
            <div class="tabs-panel <?php echo $tour['class'];?>" id="<?php echo !empty($tour['id'])? $tour['id'] : ElementParser::slug($tour['title']);?>">
            <?php endif;?>

            <?php echo $tour['content']; ?>
        
        </div>
        <?php endforeach;?>
        
    </div>
</div>


