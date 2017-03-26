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
$icon = false;
$isDisabled = false;
if($item->anchor_css){
	if(strpos($item->anchor_css, "disabled") !== false){
		$isDisabled = true;
	}
	if(stripos($item->anchor_css, 'icon') !== false||stripos($item->anchor_css, 'iconsocial') !== false){
		$icon = true;
		$iconClass = str_replace('icon', "", $item->anchor_css);
		if(stripos($item->anchor_css, 'iconsocial') !== false){
			$item->title = '';
		}
		
		if($isDisabled){
			$item->anchor_css = 'disabled';
		}else{
			$item->anchor_css = '';
		}
	}
}

// active menu
if ($item->id == $active_id)
{
	$item->anchor_css .= ' active';
}

if (in_array($item->id, $path))
{
	$item->anchor_css .= ' active';
}
elseif ($item->type == 'alias')
{
	$aliasToId = $item->params->get('aliasoptions');

	if (count($path) > 0 && $aliasToId == $path[count($path) - 1])
	{
		$item->anchor_css .= ' active';
	}
	elseif (in_array($aliasToId, $path))
	{
		$item->anchor_css .= ' alias-parent-active';
	}
}

// Note. It is important to remove spaces between elements.
$class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : '';
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';

if ($item->menu_image)
	{
		$item->params->get('menu_text', 1) ?
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' .preg_replace('/--([^-]*)--/', '$1', $item->title). '</span> ' :
		$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
	if($icon === true){
		$linktype = '<i class="'.$iconClass.'"></i> '.preg_replace('/--([^-]*)--/', '$1', $item->title);
	}else{
		$linktype =preg_replace('/--([^-]*)--/', '$1', $item->title);
	}
}

//dropdown and megamenu
$dropdownToggle = '';
if($item->params->get('hasSubMenu')){
	$dropdownToggle = ' data-toggle="dropdown" class="dropdown-toggle'.($isDisabled ? ' disabled':'').'"';
}
if($item->params->get('isMegaMenu')){
	$dropdownToggle = ' data-toggle="dropdown" class="dropdown-toggle'.($isDisabled ? ' disabled':'').'"';
}

switch ($item->browserNav)
{
	default:
	case 0:
?><a <?php echo $class.$dropdownToggle; ?> href="<?php echo $item->flink; ?>" <?php echo $title; ?>> <?php echo $linktype; ?></a><?php
		break;
	case 1:
		// _blank
?><a <?php echo $class.$dropdownToggle; ?> href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>> <?php echo $linktype; ?></a><?php
		break;
	case 2:
	// window.open
?><a <?php echo $class.$dropdownToggle; ?> href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><?php echo $linktype; ?></a>
<?php
		break;
}
