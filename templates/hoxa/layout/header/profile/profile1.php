<?php 

defined('_JEXEC') or die;
if($layoutsite === 'boxed'){
    $doc->addStylesheet($template_folder.'/css/boxed-reset.css','text/css');
    $doc->addStylesheet($template_folder.'/css/boxed-style.css','text/css');
}else{
    $doc->addStylesheet($template_folder.'/css/reset.css','text/css');
    $doc->addStylesheet($template_folder.'/css/style.css','text/css');
}
$doc->addStylesheet($template_folder.'/css/font-awesome/css/font-awesome.min.css','text/css');
if($layoutsite === 'boxed'){
    $doc->addStylesheet($template_folder.'/css/boxed-responsive-leyouts.css','text/css');
    $doc->addStylesheet($template_folder.'/css/boxed-sticky.css','text/css');
}else{
    $doc->addStylesheet($template_folder.'/css/responsive-leyouts.css','text/css');
    $doc->addStylesheet($template_folder.'/js/mainmenu/sticky.css','text/css');
}
$doc->addStylesheet($template_folder.'/js/mainmenu/bootstrap.min.css','text/css');
$doc->addStylesheet($template_folder.'/js/mainmenu/sticky.css','text/css');
$doc->addStylesheet($template_folder.'/js/mainmenu/demo.css','text/css');
$doc->addStylesheet($template_folder.'/js/mainmenu/menu.css','text/css');

$doc->addStylesheet($template_folder.'/js/slidepanel/slidepanel.css','text/css');

$doc->addStylesheet($template_folder.'/js/masterslider/style/masterslider.css','text/css');
$doc->addStylesheet($template_folder.'/js/masterslider/skins/default/style.css','text/css');
$doc->addStylesheet($template_folder.'/js/masterslider/ms-laptop-style.css','text/css');
$doc->addStylesheet($template_folder.'/js/masterslider/style.css','text/css');
$doc->addStylesheet($template_folder.'/js/masterslider/style/ms-staff-style.css','text/css');

$doc->addStylesheet($template_folder.'/js/cubeportfolio/cubeportfolio.min.css','text/css');

$doc->addStylesheet($template_folder.'/js/tabs/assets/css/responsive-tabs.css','text/css');
$doc->addStylesheet($template_folder.'/js/tabs/assets/css/responsive-tabs2.css','text/css');
$doc->addStylesheet($template_folder.'/js/tabs/assets/css/responsive-tabs3.css','text/css');

$doc->addStylesheet($template_folder.'/js/carousel/flexslider.css','text/css');
$doc->addStylesheet($template_folder.'/js/carousel/skin.css','text/css');

$doc->addStylesheet($template_folder.'/js/progressbar/ui.progress-bar.css','text/css');
$doc->addStylesheet($template_folder.'/js/accordion/accordion.css','text/css');

$doc->addStylesheet($template_folder.'/js/lightbox/jquery.fancybox.css','text/css');
$doc->addStylesheet($template_folder.'/js/rs-plugin/style-added.css','text/css');
$doc->addStylesheet($template_folder.'/js/form/sky-forms.css','text/css');

if($layoutsite === 'boxed'){
    $doc->addStylesheet($template_folder.'/css/bg-patterns/pattern-'.$pattern.'.css','text/css');
   
}
?>