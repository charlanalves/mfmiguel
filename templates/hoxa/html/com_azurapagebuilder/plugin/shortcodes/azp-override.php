<?php
/**
 * @package Azura Joomla Pagebuilder
 * @author Cththemes - www.cththemes.com
 * @date: 15-07-2014
 *
 * @copyright  Copyright ( C ) 2014 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
//no direct accees
defined ('_JEXEC') or die('resticted aceess');

//[Icon]
if(!function_exists('azurarow_sc')) {

	$rowColumnsArray = array();

	function azurarow_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'id' => '',
			   'secclass'=>'',
			   'class' => '',
			   'isfullwidth'=>'0',
			   'stellar'=>'',
			   'layout'=>''
		 ), $atts));

		global $rowColumnsArray;

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		 ), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$rowstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$rowstyle .= trim($styleText);
		}

		if(!empty($rowstyle)){
			$rowstyle = 'style="'.$rowstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>'',

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurarow');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$rowColumnsArray = array();
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraRow', 'azurarow_sc' );

	function azuracolumn_sc( $colatts, $content="" ) {

	 	global $rowColumnsArray;

	 	//echo'<pre>';var_dump($atts);die;

	 	// $responsiveArr = array(
	 	// 	'lgoffsetclass'		=>$atts['lgoffsetclass'],
	 	// 	'lgwidthclass'		=>$atts['lgwidthclass'],
	 	// 	'hidden-lg'			=>$atts['hidden-lg'],

	 	// 	'mdoffsetclass'		=>$atts['mdoffsetclass'],
	 	// 	'mdwidthclass'		=>$atts['mdwidthclass'],
	 	// 	'hidden-md'			=>$atts['hidden-md'],

	 	// 	'smoffsetclass'		=>$atts['smoffsetclass'],
	 	// 	//'smwidthclass'		=>$atts['smwidthclass'], is $columnwidthclass
	 	// 	'hidden-sm'			=>$atts['hidden-sm'],

	 	// 	'xsoffsetclass'		=>$atts['xsoffsetclass'],
	 	// 	'xswidthclass'		=>$atts['xswidthclass'],
	 	// 	'hidden-xs'			=>$atts['hidden-xs'],
	 	// );

	 	$responsiveTxt = ElementParser::parseResponsive(cth_shortcode_atts(array(


		 		'lgoffsetclass'		=>'',
		 		'lgwidthclass'		=>'',
		 		'hidden-lg'			=>'',

		 		'mdoffsetclass'		=>'',
		 		'mdwidthclass'		=>'',
		 		'hidden-md'			=>'',

		 		'smoffsetclass'		=>'',
		 		//'smwidthclass'		=>$atts['smwidthclass'], is $columnwidthclass
		 		'hidden-sm'			=>'',

		 		'xsoffsetclass'		=>'',
		 		'xswidthclass'		=>'',
		 		'hidden-xs'			=>'',

			), $colatts),'azp_');

	 	$colStyleArr = ElementParser::parseStyle(
	 		cth_shortcode_atts(array(

               	'margin_top'=>'',
	           	'margin_right' => '',
			   	'margin_bottom'=> '',
	           	'margin_left'=> '',

	           	'border_top_width'=>'',
	           	'border_right_width' => '',
			   	'border_bottom_width'=>'',
	           	'border_left_width'=>'',

	           	'padding_top'=>'',
	           	'padding_right' => '',
			   	'padding_bottom'=>'',
	           	'padding_left'=>'',

	           	'border_color'=>'',
	           	'border_style' => '',

			   	'background_color'=>'',
	           	'background_image'=>'',
	           	'background_repeat'=>'',
	           	'background_attachment'=>'',
	           	'background_size'=>'',
	           	'additional_style'=>'',
	           	'simplified'=>''

			), $colatts)
		);

		$colStyle = '';

		$styleText = implode(" ", $colStyleArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$colStyle .= trim($styleText);
		}

		if(!empty($colStyle)){
			$colStyle = 'style="'.$colStyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>'',

		), $colatts);

		extract(cth_shortcode_atts(array(

               	'id'=>'',
	           	'class' => '',
	           	'wrapclass'=>'',
	           	'columnwidthclass'=>'col-md-12',
			   	

			), $colatts));

	 	$rowColumnsArray[] = array(
	 		'animation'=>$animationArgs['animation'],
	 		'animationtype'=>$animationArgs['animationtype'],
	 		'animationdelay'=>$animationArgs['animationdelay'],
	 		'animationduration'=>$animationArgs['animationduration'],

	 		'columnstyle'=> $colStyle,

	 		'id'=>$id,
	 		'class'=>$class,
	 		'wrapclass'=>$wrapclass,
	 		'columnwidthclass'=>$columnwidthclass,
	 		'responsivetext'=>$responsiveTxt,
	 		'content'=>$content
	 	);

	}

	ElementParser::add_shortcode( 'AzuraColumn', 'azuracolumn_sc' );
}
//[Icon Box]
if(!function_exists('azuraiconbox_sc')) {


	function azuraiconbox_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'iconclass' => '',
			   'image' => '',
			   'title'=>'',
			   'link'=>'',
			   'isactive'=>'0',
			   'extraclass'=>'',
			   'layout'=>''
		 ), $atts));

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		 ), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$iconboxstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$iconboxstyle .= trim($styleText);
		}

		if(!empty($iconboxstyle)){
			$iconboxstyle = 'style="'.$iconboxstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>'',

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuraiconbox');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraIconBox', 'azuraiconbox_sc' );

}
//[Feature Grid]
if(!function_exists('azurafeaturegrid_sc')) {

	$featureGridItemsArray = array();

	function azurafeaturegrid_sc( $atts, $content="" ) {

	 	global $featureGridItemsArray;
	
		extract(ElementParser::shortcode_atts(array(
				// 'textcolor' => 'white',
			   	'id' => '',
			   	'isfullwidth'=>'0',
			   	'class' => '',
			   	'layout'=>''
		), $atts));

		$styleArr = ElementParser::shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$featuregridstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$featuregridstyle .= trim($styleText);
		}

		if(!empty($featuregridstyle)){
			$featuregridstyle = 'style="'.$featuregridstyle.'"';
		}

		$animationArgs = ElementParser::shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurafeaturegrid');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$featureGridItemsArray = array();
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraFeatureGrid', 'azurafeaturegrid_sc' );

	function azurafeaturegrid_item_sc( $atts, $content="" ) {

	 	global $featureGridItemsArray;

	 	$featureGridItemsArray[] = array('iconclass'=>$atts['iconclass'],'image'=>$atts['image'],'title'=>$atts['title'],'link'=>$atts['link'],'extraclass'=>$atts['extraclass'],'content'=>$content);

	}

	ElementParser::add_shortcode( 'AzuraFeatureGridItem', 'azurafeaturegrid_item_sc' );
}
//[Azura Fact]
if(!function_exists('azurafact_sc')) {

	function azurafact_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'number' => '2799',
			   'title'=>'',
			   // 'skill_bg' => '#e5e5e5',
			   // 'skill_val'=>'#d1d1d1',
			   'extraclass'=>'',
			   'layout'=>''
		 ), $atts));
		$styleArr = ElementParser::shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$factstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$factstyle .= trim($styleText);
		}

		if(!empty($factstyle)){
			$factstyle = 'style="'.$factstyle.'"';
		}



		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurafact');
			}
		}
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraFact', 'azurafact_sc' );
}
//1. [Accordion]
if(!function_exists('azuraaccordion_sc')) {
	
	$accordionItemsArray = array();

	function azuraaccordion_sc( $atts, $content="" ) {

		global $accordionItemsArray;
	
		extract(cth_shortcode_atts(array(
			   'id' => '',
			   'class' => '',
			   'defaultactive'=>'1',
			   'acctype'=>'',
			   'layout'=>''
		 ), $atts));

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		 ), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$accordionstyle = '';

		$styleText = implode(" ", $styleTextArr);
		
		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$accordionstyle .= trim($styleText);
		}

		if(!empty($accordionstyle)){
			$accordionstyle = 'style="'.$accordionstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>'',

		 ), $atts);



		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuraaccordion');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$accordionItemsArray = array();
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraAccordion', 'azuraaccordion_sc' );

	function azuraaccordionitem_sc( $atts, $content="" ) {

		global $accordionItemsArray;


		$accordionItemsArray[] = array(/*'id'=>$atts['id'],*/'class'=>$atts['class'],'title'=>$atts['title']/*,'subtitle'=>$atts['subtitle']*/,'content'=>$content);

		
	}
		
	ElementParser::add_shortcode( 'AzuraAccordionItem', 'azuraaccordionitem_sc' );
}
//[master slider]
if(!function_exists('azuramasterslider_sc')) {
	$masterSliderItemsArray = array();
	function azuramasterslider_sc( $atts, $content="" ){
		global $masterSliderItemsArray;

		extract(cth_shortcode_atts(array(
			  'id' => '',
			  'class'=>'',
			  'skin'=>'',
			  'layout'=>''
		 ), $atts));

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		 ), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$mastersliderstyle = '';

		$styleText = implode(" ", $styleTextArr);
		
		$styleTextTest = trim($styleText);

		if(!empty($styleTextTest)){
			$mastersliderstyle .= trim($styleText);
		}

		if(!empty($mastersliderstyle)){
			$mastersliderstyle = 'style="'.$mastersliderstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>'',

		 ), $atts);



		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuraaccordion');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$masterSliderItemsArray = array();
		
		return $content;

	}
	
	ElementParser::add_shortcode( 'AzuraMasterSlider', 'azuramasterslider_sc' );


	function azuramasterslider_item_sc( $atts, $content="" ) {

		global $masterSliderItemsArray;


		$masterSliderItemsArray[] = array(/*'id'=>$atts['id'],*/'class'=>$atts['class'],'slidebackground'=>$atts['slidebackground']/*,'subtitle'=>$atts['subtitle']*/,'content'=>$content);

		
	}
		
	ElementParser::add_shortcode( 'AzuraMasterSliderItem', 'azuramasterslider_item_sc' );
		
			
}
//24.[Progress]
if(!function_exists('azuraprogress_sc')) {

	function azuraprogress_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'id' => '',
			   'class' => '',
			   'value' => '',
			   'title' => '',
			   'type'=>'',
			   'striped'=>'1',
			   'animated' => '1',
			   'aschild' => '0',
			   'customstyle'=>'',
			   'speed'=>'2000',
			   'anivalue'=>'50',
			   'layout'=>''
		), $atts));

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$progressstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$progressstyle .= trim($styleText);
		}

		if(!empty($progressstyle)){
			$progressstyle = 'style="'.$progressstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>'',

		), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuraprogress');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$accordionItem = null;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraProgress', 'azuraprogress_sc' );
}
//[Azura Cir Skill]
if(!function_exists('azuracirskill_sc')) {

	function azuracirskill_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'percent' => '50',
			   //'title'=>'',
			   //'skill_bg' => '#e5e5e5',
			   'skill_val'=>'#13afeb',
			   'extraclass'=>'',
			   'layout'=>''
		 ), $atts));

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuracirskill');
			}
		}
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraCirSkill', 'azuracirskill_sc' );
}
//[Azura Counter]
if(!function_exists('azuracounter_sc')) {

	function azuracounter_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'stopvalue' => '100',
			   //'title'=>'',
			   //'skill_bg' => '#e5e5e5',
			   'speed'=>'1000',
			   'class'=>'',
			   'layout'=>''
		 ), $atts));

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuracounter');
			}
		}
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraCounter', 'azuracounter_sc' );
}









//[Azura Skill]
if(!function_exists('azuraskill_sc')) {

	function azuraskill_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'percent' => '50',
			   'title'=>'',
			   'skill_bg' => '#e5e5e5',
			   'skill_val'=>'#d1d1d1',
			   'extraclass'=>'',
			   'layout'=>''
		 ), $atts));

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azuraskill');
			}
		}
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraSkill', 'azuraskill_sc' );
}
//[Azura Team Member]
if(!function_exists('azurateammember_sc')) {

	function azurateammember_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   'name' => 'CTHthemes',
			   'job'=>'Developer',
			   'photo' => '',
			   'imgwidth'=>'169',
			   'imgheight'=>'212',
			   'extraclass'=>'',
			   'layout'=>''
		 ), $atts));

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurateammember');
			}
		}
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraTeamMember', 'azurateammember_sc' );
}

//[Azura Sticky Menu]
if(!function_exists('azurastickymenu_sc')) {

	function azurastickymenu_sc( $atts, $content="" ) {
	
		extract(cth_shortcode_atts(array(
			   // 'name' => 'CTHthemes',
			   // 'job'=>'Developer',
			   // 'photo' => '',
			   'extraclass'=>'',
			   'layout'=>''
		 ), $atts));

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurastickymenu');
			}
		}
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraStickyMenu', 'azurastickymenu_sc' );
}

//[Home Bg Slider]
if(!function_exists('azurahomebgslider_sc')) {

	$homeBgSliderItemsArray = array();

	function azurahomebgslider_sc( $atts, $content="" ) {

	 	global $homeBgSliderItemsArray;
	
		extract(ElementParser::shortcode_atts(array(
				'textcolor' => 'white',
			   	'id' => 'home',
			   	'extraclass' => '',
			   	'layout'=>''
		), $atts));

		$styleArr = ElementParser::shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$homebgsliderstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$homebgsliderstyle .= trim($styleText);
		}

		if(!empty($homebgsliderstyle)){
			$homebgsliderstyle = 'style="'.$homebgsliderstyle.'"';
		}

		$animationArgs = ElementParser::shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurahomebgslider');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$homeBgSliderItemsArray = array();
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraHomeBgSlider', 'azurahomebgslider_sc' );

	function azurahomebgslider_item_sc( $atts, $content="" ) {

	 	global $homeBgSliderItemsArray;

	 	$homeBgSliderItemsArray[] = array('src'=>$atts['src'],'extraclass'=>$atts['extraclass'],'content'=>$content);

	}

	ElementParser::add_shortcode( 'AzuraHomeBgSliderItem', 'azurahomebgslider_item_sc' );
}
//[Home Bg Content Slider]
if(!function_exists('azurabgcontentslider_sc')) {

	$bgContentSliderItemsArray = array();

	function azurabgcontentslider_sc( $atts, $content="" ) {

	 	global $bgContentSliderItemsArray;
	
		extract(ElementParser::shortcode_atts(array(
				// 'textcolor' => 'white',
				'shownavigation'=>'1',
			   	'id' => 'home',
			   	'extraclass' => 'bg-content-slider',
			   	'layout'=>''
		), $atts));

		$styleArr = ElementParser::shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$bgcontentsliderstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$bgcontentsliderstyle .= trim($styleText);
		}

		if(!empty($bgcontentsliderstyle)){
			$bgcontentsliderstyle = 'style="'.$bgcontentsliderstyle.'"';
		}

		$animationArgs = ElementParser::shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurabgcontentslider');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;

		$bgContentSliderItemsArray = array();
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraBgContentSlider', 'azurabgcontentslider_sc' );

	function azurabgcontentslider_item_sc( $atts, $content="" ) {

	 	global $bgContentSliderItemsArray;

	 	$bgContentSliderItemsArray[] = array('src'=>$atts['src'],'textcolor'=>$atts['textcolor'],'extraclass'=>$atts['extraclass'],'content'=>$content);

	}

	ElementParser::add_shortcode( 'AzuraBgContentSliderItem', 'azurabgcontentslider_item_sc' );
}
//[K2 Cat View]
if(!function_exists('azurak2catview_sc')) {

	function azurak2catview_sc( $atts, $content="" ) {

	
		extract(cth_shortcode_atts(array(
			   	'category'=>'',
			   	'columns'=>'3',
			   	'limit'=>'All',
			   	'order'=>'created',
			   	'orderdir'=>'DESC',
			   	'childcat'=>'1',
			   	'showmore'=>'1',
			   	'showfilter'=>'1',
			   	// 'viewmode'=>'grid',
			   	// 'id'=>'latest-projects',
			   	'extraclass' => '',
			   	// 'selector'=>'envor-project',
			   	// 'visible'=>'4',
			   	// 'shownavigation'=>'1',
			   	// 'navigationpos'=>'center',
			   	'layout'=>''
		), $atts));

		if($category == '0' || $category =='') return false;

      	$items = ElementParser::getK2Items($category, $limit, $order, $orderdir,'',$childcat);

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$k2catviewstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$k2catviewstyle .= trim($styleText);
		}

		if(!empty($k2catviewstyle)){
			$k2catviewstyle = 'style="'.$k2catviewstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>''

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurak2catview');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraK2CatView', 'azurak2catview_sc' );
}
//[K2 Item View]
if(!function_exists('azurak2itemview_sc')) {

	function azurak2itemview_sc( $atts, $content="" ) {

	
		extract(cth_shortcode_atts(array(
			   	'k2_id'=>'',
			   	'imagesize'=>'',
			   	'posttype'=>'0',
			   	'showcreated'=>'1',
			   	'showcategory'=>'1',
			   	'showcomment'=>'1',
			   	'showtitle'=>'1',
			   	'showreadmore'=>'1',
			   	'introtextlength'=>'',
			   	'showfulltext'=>'0',
			   	'extraclass' => '',
			   	'layout'=>''
		), $atts));

		if($k2_id == '0' || $k2_id =='') return false;

      	$item = ElementParser::getK2Item($k2_id, '');

		$styleArr = cth_shortcode_atts(array(

               'margin_top'=>'',
               'margin_right' => '',
			   'margin_bottom'=>'',
               'margin_left'=>'',

               'border_top_width'=>'',
               'border_right_width' => '',
			   'border_bottom_width'=>'',
               'border_left_width'=>'',

               'padding_top'=>'',
               'padding_right' => '',
			   'padding_bottom'=>'',
               'padding_left'=>'',

               'border_color'=>'',
               'border_style' => '',

			   'background_color'=>'',
               'background_image'=>'',
               'background_repeat'=>'',
               'background_attachment'=>'',
               'background_size'=>'',
               'additional_style'=>'',
               'simplified'=>''

		), $atts);

		$styleTextArr = ElementParser::parseStyle($styleArr);

		$k2itemviewstyle = '';

		$styleText = implode(" ", $styleTextArr);
		

		$styleTextTest = trim($styleText);
		if(!empty($styleTextTest)){
			$k2itemviewstyle .= trim($styleText);
		}

		if(!empty($k2itemviewstyle)){
			$k2itemviewstyle = 'style="'.$k2itemviewstyle.'"';
		}

		$animationArgs = cth_shortcode_atts(array(

               'animation'=>'0',
               'trigger' => 'animate-in',
			   'animationtype'=>'',
			   'hoveranimationtype'=>'',
			   'infinite'=>'0',
               'animationdelay'=>'0',
               'animationduration'=>''

		 ), $atts);

		$shortcodeTemp = false;

		if(stripos($layout, '_:') !== false){
			$shortcodeTemp = JPATH_COMPONENT_ADMINISTRATOR.'/elements/shortcodes_template/'.substr($layout, 2).'.php';
		}else{
			if(stripos($layout, ':') !== false){
				$shortcodeTemp = JPATH_THEMES .'/'.JFactory::getApplication()->getTemplate(). '/html/com_azurapagebuilder/plugin/shortcodes_template/'.substr($layout, stripos($layout, ':')+1).'.php';
			}else{
				$shortcodeTemp = ElementParser::addShortcodeTemplate('azurak2itemview');
			}
		}


		
		
		$buffer = ob_get_clean();
		
		ob_start();
		
		if($shortcodeTemp !== false) require $shortcodeTemp;
		
		$content = ob_get_clean();
		
		ob_start();
		
		echo $buffer;
		
		return $content;

		
	}
		
	ElementParser::add_shortcode( 'AzuraK2ItemView', 'azurak2itemview_sc' );
}