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


?>
<li class="item<?php echo (!empty($class) ? " ".$class : "");?>" <?php echo (!empty($id) ? " id=\"".$id."\"" : "");?> <?php echo $bxslideritemstyle;?>>
<?php if(!empty($slideimage)) :?>
	<img src="<?php echo JURI::root(true).'/'.$slideimage;?>" class="responsive-img" alt="">
<?php endif;?>
<?php echo do_shortcode( $content );?>
</li>