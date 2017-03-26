<?php 

defined('_JEXEC') or die;

$doc->addStylesheet($template_folder.'/onepage_css/reset.css','text/css');
//style for corporate section
$doc->addStylesheet($template_folder.'/css/style.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_css/style.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_css/font-awesome/css/font-awesome.min.css','text/css');

$doc->addStylesheet($template_folder.'/css/responsive-leyouts.css','text/css');

//$doc->addStylesheet($template_folder.'/js/mainmenu/bootstrap.min.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/mainmenu/sticky.css','text/css');
//$doc->addStylesheet($template_folder.'/js/mainmenu/demo.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/mainmenu/menu.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/slidepanel/slidepanel.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/masterslider/style/masterslider.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/masterslider/skins/default/style.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/masterslider/ms-laptop-style.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/masterslider/style.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/masterslider/style/ms-staff-style.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/cubeportfolio/cubeportfolio.min.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/tabs/assets/css/responsive-tabs.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/tabs/assets/css/responsive-tabs2.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/tabs/assets/css/responsive-tabs3.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/carousel/flexslider.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/carousel/skin.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/progressbar/ui.progress-bar.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/accordion/accordion.css','text/css');

$doc->addStylesheet($template_folder.'/onepage_js/lightbox/jquery.fancybox.css','text/css');
$doc->addStylesheet($template_folder.'/onepage_js/rs-plugin/style-added.css','text/css');
$doc->addStylesheet($template_folder.'/js/form/sky-forms.css','text/css');
if($layoutsite === 'boxed'){
    $doc->addStylesheet($template_folder.'/css/bg-patterns/pattern-'.$pattern.'.css','text/css');
   
}
?>