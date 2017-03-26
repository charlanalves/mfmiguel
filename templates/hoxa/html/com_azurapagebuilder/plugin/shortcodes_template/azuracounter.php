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

$classes = "azp_counter";

if(!empty($class)){
	$classes .= ' '.$class;
}

$classes = 'class="'.$classes.'"';
 
// if(!empty($id)){
// 	$id = 'id="'.$id.'"';
// }

$ele_data = 'data-countto="'.$stopvalue.'" data-speed="'.$speed.'"';

?>
<div <?php echo $classes ;?>>
	<span class="onepage-counter" <?php echo $ele_data;?>>0</span> <h4><?php echo $content;?></h4>
</div>

