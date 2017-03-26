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
$classes = "azp_team team_member";

// $animationData = '';
// if($animationArgs['animation'] == '1'){
// 	$classes .= ' animate-in';
// 	$animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
// }

// if(!empty($extraclass)){
// 	$classes .= ' '.$extraclass;
// }
// if($isactive === '1'){
//     $classes .= ' active';
// }
$classes = 'class="'.$classes.'"';

?>
<div  <?php echo $classes;?>>
    <?php if(!empty($photo)) :?>
        <img src="<?php echo JURI::root(true).'/'.$photo;?>" class="rimg" alt="<?php echo $name;?>">
    <?php endif;?>
    <?php if(!empty($name)) :?>
    <h5><?php echo $name;?></h5>
    <?php endif;?>
    <?php if(!empty($job)) :?>
    <h6><?php echo $job;?></h6>
    <?php endif;?>
    
    <?php echo $content;?>
    
</div>