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
$classes = "azp_cir_skill";

$animationData = '';
// if($animationArgs['animation'] == '1'){
// 	$classes .= ' animate-in';
// 	$animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
// }

if(!empty($extraclass)){
	$classes .= ' '.$extraclass;
}
// if($isactive === '1'){
//     $classes .= ' active';
// }
$classes = 'class="'.$classes.'"';

?>
<div <?php echo $classes;?>><canvas class="loader" data-val="<?php echo $percent;?>"  data-cl="<?php echo $skill_val;?>"></canvas> <br /> <?php echo $content;?> </div>
