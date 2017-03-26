<?php
/**
 * @package Hoxa - Responsive Multipurpose Joomla Template
 * @author Cththemes - www.cththemes.com
 * @date: 01-10-2014
 *
 * @copyright  Copyright ( C ) 2014 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

defined('_JEXEC') or die;

// Getting params from template
$params = &JFactory::getApplication()->getTemplate(true)->params;

$app = JFactory::getApplication();
$doc = JFactory::getDocument();
//$title = $doc->getTitle();
//$this->language = $doc->language;

$doc->setMetaData('title', FALSE);

$menu = $app->getMenu();
$activeMenu = $menu->getActive()? $menu->getActive() : $menu->getDefault();

$hideComponentErea = $params->get('hideComponentErea','0');

$input = $app->input;
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');
$pageClassSfx = $activeMenu->params->get('pageclass_sfx',' ');
//basic
$favicon = $params->get('favicon');
$logoImage = $params->get('logoImage');
$logoText = $params->get('logoText');
$templateprofile = $params->get('templateprofile','profile1');
$disableMooTools = $params->get('disableMooTools','0');
$disableTooltip = $params->get('disableTooltip','0');

// Site layout variation
$layoutsite = $params->get('layoutsite','wide');
// Background pattern
$pattern = $params->get('pattern','default');
// Content layout variation
$layoutstyle = $params->get('layoutstyle','rightsidebar');
// $headerstyle = $params->get('headerstyle','style1');
// $footerstyle = $params->get('footerstyle','style1');

// Google fonts
$useDifferentFont = $params->get('useDifferentFont','0');
if($useDifferentFont === '1') {
    $importfont = $params->get('importfont',"<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'><link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>");
    $fontstyle = $params->get('fontstyle',"
        body, input, textarea {
            font-family: 'Open Sans', sans-serif;
        }
        h1,h2,h3,h4,h5,h6 {
            font-family: 'Raleway', sans-serif;
        }
        p {
            font-family: 'Open Sans', sans-serif;
        }
        blockquote {
            font-family: 'Open Sans' !important;
        }
        pre {
            font-family: 'Open Sans', sans-serif;
        }
        code, kbd {
            font-family: 'Open Sans', sans-serif;
        }
        .feature_section11 strong {
            font-family: 'Raleway', sans-serif;
        }
        .feature_section15 strong {
            font-family: 'Raleway', sans-serif;
        }
        .feature_section17 .tbox {
            font-family: 'Raleway', sans-serif;
        }
        .feature_section25 li.title h1 {
            font-family: 'Open Sans', sans-serif;
        }
        .newsletter_two .input_submit {
            font-family: 'Open Sans', sans-serif;
        }
        .fnewsletter .input_submit {
            font-family: 'Open Sans', sans-serif;
        }
        .big_text1 {
            font-family: 'Raleway', sans-serif;
        }
        .error_pagenotfound {
            font-family: 'Open Sans', sans-serif;
        }
        a.but_goback,a.but_ok_2,a.but_wifi,a.but_warning_sign,a.but_user,a.but_tag,a.but_table,a.but_star,a.but_search,a.but_phone,
        a.but_pencil,
        a.but_new_window,
        a.but_music,
        a.but_hand_right,
        a.but_thumbs_down,
        a.but_thumbs_up,
        a.but_globe,
        a.but_hospital,
        a.but_coffe_cup,
        a.but_settings,
        a.but_chat,
        a.but_play_button,
        a.but_remove_2,
        a.but_lock,
        a.but_shopping_cart,
        a.but_exclamation_mark,
        a.but_info,
        a.but_question_mark,
        a.but_minus,
        a.but_plus,
        a.but_folder_open,
        a.but_file,
        a.but_envelope,
        a.but_edit,
        a.but_cogwheel,
        a.but_check,
        a.but_camera,
        a.but_calendar,
        a.but_bookmark,
        a.but_book,
        a.but_download,
        a.but_pdf,
        a.but_word_doc,
        a.but_woman {
            font-family: 'Open Sans', sans-serif;
        }
        .dropcap1, .dropcap2, .dropcap3 {
            font-family: 'Open Sans', sans-serif;
        }
        .pricing-tables .title, .pricing-tables .price {
            font-family: 'Open Sans', sans-serif;
        }
        .pricing-tables-helight .title,.pricing-tables-helight .price {
            font-family: 'Open Sans', sans-serif;
        }
        .pricing-tables-two .title,.pricing-tables-two .price {
            font-family: 'Open Sans', sans-serif;
        }
        .pricing-tables-helight-two .title,.pricing-tables-helight-two .price {
            font-family: 'Open Sans', sans-serif;
        }
        .about_author a {
            font-family: 'Open Sans', sans-serif !important;
        }
        .pagination,.comment_submit,.portfolio_image .title {
            font-family: 'Open Sans', sans-serif;
        }
        .rw-wrapper{
            font-family: 'Raleway', sans-serif;
        }");
}




// Color Presets				
$preset = $params->get('preset','default');
$overrideColor = $params->get('overrideColor','0');
$bC = substr($params->get('baseColor', '#13AFEB'),1);

// Animation Turn Off
//$animationTurnOff = $params->get('animationTurnOff','0');


// Custom Codes
$customstylecode = $params->get('customstylecode','');
$customscriptcode = $params->get('customscriptcode','');

if($disableMooTools === '1'){
    unset($doc->_scripts[JURI::root(true)."/media/system/js/mootools-core.js"]);
    unset($doc->_scripts[JURI::root(true)."/media/system/js/mootools-more.js"]);
}

if($disableTooltip === '1') {
    if (isset($doc->_script['text/javascript'])) {
        $doc->_script['text/javascript'] = preg_replace('%jQuery\(document\)\.ready\(function\(\)\s*{\s*jQuery\(\'\.hasTooltip\'\)\.tooltip\({"html": true,"container": "body"}\);\s*}\);\s*%', '', $doc->_script['text/javascript']);
        if (empty($doc->_script['text/javascript']))
            unset($doc->_script['text/javascript']);
    }
}


$template_folder = JURI::root(true).'/templates/'.$this->template;

// custom style and script
$customStyleLinks = array();
$customScriptLinks = array();

$themePath = JPATH_THEMES.'/'.$this->template;
$themeLink = JURI::root(true).'/templates/'.$this->template;

$customCssLinks = array();

$cusCssLinks = $params->get('customcsslinks');
if(!empty($cusCssLinks)){

    $customCssLinks = explode(",", $cusCssLinks);

}


if(!empty($customCssLinks)){

    foreach ($customCssLinks as $css) {
        if(file_exists($themePath.$css)){
            $customStyleLinks[] = $themeLink.$css;
        }elseif(file_exists($themePath.'/css/'.$css)){
            $customStyleLinks[] = $themeLink.'/css/'.$css;
        }elseif(file_exists($themePath.'/stylesheet/'.$css)){
            $customStyleLinks[] = $themeLink.'/stylesheet/'.$css;
        }
        
    }
}

$customJsLinks = array();

$cusJsLinks = $params->get('customjslinks');
if(!empty($cusJsLinks)){

    $customJsLinks = explode(",", $cusJsLinks);

}


if(!empty($customJsLinks)){

    foreach ($customJsLinks as $js) {
        if(file_exists($themePath.$js)){
            $customScriptLinks[] = $themeLink.$js;
        }elseif(file_exists($themePath.'/js/'.$js)){
            $customScriptLinks[] = $themeLink.'/js/'.$js;
        }elseif(file_exists($themePath.'/script/'.$js)){
            $customScriptLinks[] = $themeLink.'/script/'.$js;
        }
        
    }
}

?>

<?php require_once dirname(__FILE__).'/layout/header.php'; ?>



<?php if($this->countModules('breadcrumbs')) : ?>
	<!-- Breadcrumbs -->
	<jdoc:include type="modules" name="breadcrumbs"  style="none" />
<?php endif;?>



<?php if ($this->countModules('position-4')) : ?>
		<jdoc:include type="modules" name="position-4" style="none" />
<?php endif;?>

<?php if ($this->countModules('position-5')) : ?>
		<jdoc:include type="modules" name="position-5" style="none" />
<?php endif;?>

<?php if ($this->countModules('position-6')) : ?>
		<jdoc:include type="modules" name="position-6" style="none" />
<?php endif;?>


<?php if($hideComponentErea !=='1') {
	require_once dirname(__FILE__).'/layout/component.php';

} ?>
<!-- Component erea -->



<?php if ($this->countModules('position-9')) : ?>
		<jdoc:include type="modules" name="position-9" style="none" />
<?php endif;?>


<?php require_once dirname(__FILE__).'/layout/footer.php'; ?>