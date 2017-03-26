<?php
/**
 * @package Hoxa - Responsive MultiPurpose Joomla Template
 * @author Cththemes - www.cththemes.com
 * @date: 29-07-2014
 *
 * @copyright  Copyright ( C ) 2014 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;
require_once JPATH_SITE.'/components/com_azurapagebuilder/helpers/elementparser.php';
// Note. It is important to remove spaces between elements.
$inMegaSection = false;
$inMega = false;
?>
<?php // The menu class is deprecated. Use nav instead. ?>
<ul class="hoxa-mega-menu nav navbar-nav <?php echo $class_sfx;?>"<?php
	$tag = '';

	if ($params->get('tag_id') != null)
	{
		$tag = $params->get('tag_id') . '';
		echo ' id="' . $tag . '"';
	}
?>>
<?php
foreach ($list as $i => &$item)
{
	//echo'<pre>';var_dump($item->level);die;
	$class = 'item-' . $item->id;

	if ($item->id == $active_id)
	{
		$class .= ' current';
	}

	if (in_array($item->id, $path))
	{
		$class .= ' current';
	}
	elseif ($item->type == 'alias')
	{
		$aliasToId = $item->params->get('aliasoptions');

		if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
		{
			$class .= ' current';
		}
		elseif (in_array($aliasToId, $path))
		{
			$class .= ' alias-parent-current';
		}
	}

	if ($item->type == 'separator')
	{
		$class .= ' divider';
	}

	if ($item->deeper)
	{
		$class .= ' deeper';
	}

	if ($item->parent)
	{
		$class .= ' parent';
	}

	// Sub menu
	if($item->params->get('hasSubMenu')){
		if($item->params->get('isMultiLevel')){
			$class .= ' dropdown-submenu mul';
		}else{
			$class .= ' dropdown';
		}
		
	}
	// Mega menu
	if($item->params->get('isMegaMenu')){
		$class .= ' dropdown yamm-fw';
	}
	if($item->params->get('extraClass')){
		$class .= ' '.$item->params->get('extraClass');
	}

	if (!empty($class))
	{
		$class = ' class="' . trim($class) . '"';
	}

	if($item->params->get('isMegaMenuSection') == '1'){
		$inMegaSection = true;
		echo "\n\t".'<ul class="col-sm-6 '.$item->params->get('sectioncolumnclass').' list-unstyled ">';
		echo '<li><p>'.$item->title.'</p></li>';

		echo ElementParser::do_shortcode($item->params->get('megaMenuShortcode'));
		//echo'<pre>';var_dump($inMega);var_dump($inMegaSection);
	}else{

		echo "\n\t".'<li' . $class . '>';

		// Render the menu item.
		switch ($item->type) :
			case 'separator':
			case 'heading':
				require JModuleHelper::getLayoutPath('mod_menu', 'default_' . $item->type);
				break;
			case 'url':
			case 'component':
				require JModuleHelper::getLayoutPath('mod_menu', 'default-hoxa_' . $item->type);
				break;

			default:
				require JModuleHelper::getLayoutPath('mod_menu', 'default-hoxa_url');
				break;
		endswitch;
	}

	//If item is mega menu
	// if($item->params->get('isMegaMenu')){
	// 	$megamenuitem = '<ul class="dropdown-menu">';
	// 		$megamenuitem .= '<li>';
	// 			$megamenuitem .= '<div class="yamm-content">';
	// 				$megamenuitem .= ElementParser::do_shortcode($item->params->get('megaMenuShortcode'));
	// 			$megamenuitem .= '</div>';
	// 		$megamenuitem .= '</li>';
	// 	$megamenuitem .= '</ul>';
		
	// 	echo $megamenuitem;
	// }

	// The next item is deeper.
	if ($item->deeper)
	{
		if($item->params->get('isMegaMenu') == '1'){
			echo "\n\t".'<ul class="dropdown-menu">';
				echo "\n\t".'<li>';
					echo "\n\t".'<div class="yamm-content">';

			
			
			$inMega = true;
		}else{
			if($inMegaSection){
				echo '';
			}elseif($item->params->get('hasMultiLevel')){
				echo "\n\t".'<ul class="dropdown-menu multilevel">';
			}else{
				echo "\n\t".'<ul class="dropdown-menu">';
			}

			//echo '<ul>';
		}

		
		
	}
	elseif ($item->shallower)
	{
		// The next item is shallower.
		if($item->params->get('isMegaMenuSection') == '1'){
			echo '</ul>';
			$inMegaSection = false;
			if($inMega === true){
				//die('loi');
				echo '</div></li></ul>';
				//$inMegaSection = false;
				$inMega = false;
			}
		}else{
			
			if($inMega === true && $inMegaSection === true){
				echo '</li></ul>';
				$inMegaSection = false;
				//$inMega = false;
				//echo'<pre>';var_dump($item);die;
				if($item->level_diff >= 2){
					//die('loi');
					echo '</div></li></ul>';
					//$inMegaSection = false;
					$inMega = false;
				}
			}else{
				echo '</li>';
				echo str_repeat('</ul></li>', $item->level_diff);
			}
			
		}


		// if($inMega === true && $inMegaSection === true){
		// 	echo '</li></ul>';
		// 	$inMegaSection = false;
		// 	//$inMega = false;
		// }elseif($item->params->get('isMegaMenuSection') == '1'){
		// 	echo '</ul>';
		// 	$inMegaSection = false;
		// 	if($inMega === true){
		// 		echo '</div></li></ul>';
		// 		//$inMegaSection = false;
		// 		$inMega = false;
		// 	}
		// }else{
			
			
		// 		echo '</li>';
		// 		echo str_repeat('</ul></li>', $item->level_diff);
		// 	//}
			
		// }


		// The next item is shallower.
		// echo '</li>';
		// echo str_repeat('</ul></li>', $item->level_diff);
	}
	else
	{

		// The next item is on the same level.
		if($item->params->get('isMegaMenuSection') == '1'){
			echo '</li></ul>';
			//$inMega = false;
			$inMegaSection = false;
		}else{
			echo '</li>';
		}

		
	}
}
?></ul>
