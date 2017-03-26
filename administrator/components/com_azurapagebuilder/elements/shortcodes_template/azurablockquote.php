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

$classes = 'azp_font_edit';

$animationData = '';
if($animationArgs['animation'] == '1'){
	$classes .= ' animate-in';
	$animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';		
}      

if(!empty($class)){
    $classes = ' '.$class;
}

$classes = 'class="'.$classes.'"';

if(!empty($id)){
    $id = ' id="'.$id.'"';
}

if(!empty($title)){
    $title = ' title="'.$title.'"';
}

$name = '';

if($tooltip == '1'){
    $name = 'name="tooltip"';
}
?>

<blockquote <?php echo $id.' '.$classes.' '.$name.' '.$title.' '.$blockquotestyle.' '.$animationData;?>>
	<?php echo nl2br(do_shortcode($content));?>
</blockquote>