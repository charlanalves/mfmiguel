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

$classes = "azura_alert";

$animationData = '';
if($animationArgs['animation'] == '1'){
    $classes .= ' animate-in';
    $animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
}

$classes .= ' '.strtolower($type);

if(!empty($extraclass)){
    $classes .= ' '.$extraclass;
}

if($closebtn === '1'){
    //$class .= ' azura_alert-dismissible';
    if($fadeeffect === '1'){
        $classes .= ' azura_fade in';
    }
}

$classes = 'class="'.$classes.'"';
 
?>
<div <?php echo $classes.' '.$alertstyle.' '.$animationData;?> role="azura_alert">
    <div class="message-box-wrap">
    <?php if($closebtn === '1'): ?>
      <button type="button" class="close-but" data-dismiss="azura_alert">Close</button>
    <?php endif; ?>
    <?php echo ElementParser::do_shortcode($content);?></div>
</div>