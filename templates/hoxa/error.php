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
$title = $doc->getTitle();
$this->language = $doc->language;

$hideComponentErea = $params->get('hideComponentErea','0');


$input = $app->input;

// unset($doc->_scripts[JURI::root(true)."/media/system/js/mootools-core.js"]);
// unset($doc->_scripts[JURI::root(true)."/media/system/js/core.js"]);
// unset($doc->_scripts[JURI::root(true)."/media/system/js/mootools-more.js"]);
// unset($doc->_scripts[JURI::root(true)."/media/jui/js/jquery.min.js"]);
// unset($doc->_scripts[JURI::root(true)."/media/jui/js/jquery-noconflict.js"]);
// unset($doc->_scripts[JURI::root(true)."/media/jui/js/jquery-migrate.min.js"]);
// unset($doc->_scripts[JURI::root(true)."/components/com_k2/js/k2.js?v2.6.7&amp;sitepath=".JURI::base(true)."/"]);
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->getCfg('sitename');

// // Adjusting content width
// if (($this->countModules('left-sidebar')|| $this->countModules('position-8')) && ($this->countModules('right-sidebar')|| $this->countModules('position-7')))
// {
// 	$col = "grid-2";
// }
// elseif (($this->countModules('left-sidebar')|| $this->countModules('position-8')) && !$this->countModules('right-sidebar') && !$this->countModules('position-7'))
// {
// 	$col = "grid-4";
// }
// elseif (!$this->countModules('left-sidebar') && !$this->countModules('position-8') && ($this->countModules('right-sidebar')|| $this->countModules('position-7')))
// {
// 	$col = "grid-4";
// }
// else
// {
// 	$col = "grid-full";
// }

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
$bodyfont = $params->get('bodyfont','Open+Sans');
$bodyfontvariants = $params->get('bodyfontvariants',array());
$bodyfontfamily = $params->get('bodyfontfamily',"'Open Sans', sans-serif;");

$headingfont = $params->get('headingfont','Raleway');
$headingfontvariants = $params->get('headingfontvariants',array());
$headingfontfamily = $params->get('headingfontfamily',"'Raleway', sans-serif;");

$highlightfont = $params->get('highlightfont','Raleway');
$highlightfontvariants = $params->get('highlightfontvariants',array());
$highlightfontfamily = $params->get('highlightfontfamily',"'Raleway', sans-serif;");


if(count($bodyfontvariants)){
    $bodyfont .= ':'.implode(",", $bodyfontvariants);
}

if(count($headingfontvariants)){
    $headingfont .= ':'.implode(",", $headingfontvariants);
}

if(count($highlightfontvariants)){
    $highlightfont .= ':'.implode(",", $highlightfontvariants);
}

$favicon = $params->get('favicon');
$logoImage = $params->get('logoImage');
$logoText = $params->get('logoText');


// Color Presets				
$preset = $params->get('preset','default');
$overrideColor = $params->get('overrideColor','0');
$bC = substr($params->get('baseColor', '#13AFEB'),1);

// Animation Turn Off
$animationTurnOff = $params->get('animationTurnOff','0');

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


$logo = '';
if(!empty($logoImage)){
	$logo .= '<a href="'.JURI::root(true).'" id="logo"  title="'.$sitename.'" alt="'.$sitename.'" style="background-image:url('.JURI::root(true).'/'.$logoImage.');"></a>';
}elseif(!empty($logoText)){
	$logo .= '<h1><a href="index.php#intro"'.(($pageType == 'onePage')? ' class="scroll-link"': '').'>'.$logoText.'</a></h1>';
}elseif(empty($logo)){
	$logo .= '<h1><a href="index.php#intro"'.(($pageType == 'onePage')? ' class="scroll-link"': '').'>'.$sitename.'</a></h1>';
}




?>
<!doctype html>
<!--[if IE 7 ]>    <html lang="<?php echo $this->language;?>" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $this->language;?>" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $this->language;?>" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $this->language;?>" class="no-js"> <!--<![endif]-->

<head>
	
	
	<meta charset="<?php echo $this->_charset;?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <link rel="shortcut icon" href="<?php echo JURI::root(true). (!empty($favicon)? '/'.$favicon : '/images/favicon/favicon.ico');?>" type="image/x-icon">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?php echo $template_folder; ?>/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $template_folder; ?>/css/style.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php echo $template_folder; ?>/css/font-awesome/css/font-awesome.min.css">
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?php echo $template_folder; ?>/css/responsive-leyouts.css" type="text/css" />
    
    <!-- animations -->
    <!-- <link href="<?php echo $template_folder; ?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" /> -->
    
<!-- just remove the below comments witch color skin you want to use -->
    <!--<link rel="stylesheet" href="css/colors/red.css" />-->
    <!--<link rel="stylesheet" href="css/colors/green.css" />-->
    <!--<link rel="stylesheet" href="css/colors/cyan.css" />-->
    <!--<link rel="stylesheet" href="css/colors/orange.css" />-->
    <!--<link rel="stylesheet" href="css/colors/lightblue.css" />-->
    <!--<link rel="stylesheet" href="css/colors/pink.css" />-->
    <!--<link rel="stylesheet" href="css/colors/purple.css" />-->
    <!--<link rel="stylesheet" href="css/colors/bridge.css" />-->
    <!--<link rel="stylesheet" href="css/colors/slate.css" />-->
    <!--<link rel="stylesheet" href="css/colors/yellow.css" />-->
    <!--<link rel="stylesheet" href="css/colors/darkred.css" />-->

<!-- just remove the below comments witch bg patterns you want to use --> 
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-default.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-one.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-two.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-three.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-four.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-five.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-six.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-seven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eight.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-nine.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-ten.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-eleven.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-twelve.css" />-->
    <!--<link rel="stylesheet" href="css/bg-patterns/pattern-thirteen.css" />-->
    
    <!-- style switcher -->
    <!-- <link rel = "stylesheet" media = "screen" href = "js/style-switcher/color-switcher.css" /> -->
    
    <!-- mega menu -->
    <link href="<?php echo $template_folder; ?>/js/mainmenu/sticky.css" rel="stylesheet">
    <link href="<?php echo $template_folder; ?>/js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $template_folder; ?>/js/mainmenu/demo.css" rel="stylesheet">
    <link href="<?php echo $template_folder; ?>/js/mainmenu/menu.css" rel="stylesheet">
    
    <!-- slide panel -->
    <link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/slidepanel/slidepanel.css">
    
	<!-- cubeportfolio -->
	<link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/cubeportfolio/cubeportfolio.min.css">
    
	<!-- tabs -->
    <link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/tabs/assets/css/responsive-tabs.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/tabs/assets/css/responsive-tabs2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/tabs/assets/css/responsive-tabs3.css">

	<!-- carousel -->
    <link rel="stylesheet" href="<?php echo $template_folder; ?>/js/carousel/flexslider.css" type="text/css" media="screen" />
 	<link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/carousel/skin.css" />
    
    <!-- progressbar -->
  	<link rel="stylesheet" href="<?php echo $template_folder; ?>/js/progressbar/ui.progress-bar.css">
    
    <!-- accordion -->
    <link rel="stylesheet" href="<?php echo $template_folder; ?>/js/accordion/accordion.css" type="text/css" media="all">
    
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="<?php echo $template_folder; ?>/js/lightbox/jquery.fancybox.css" media="screen" />
	
 
</head>

<body>


<div class="site_wrapper">

<div id="sliderWrap">

	<div id="openCloseIdentifier"></div>
    
        <div id="slider">
        
          	<div id="sliderContent">
            <div class="container">
          
            	 <?php echo $doc->getBuffer('modules', 'top_intro', array('style' => 'topintro')); ?>
                
            </div>    
            </div>
            
        </div>
    
	<div id="openCloseWrap"><a href="#" class="topMenuAction" id="topMenuImage"><img src="<?php echo JURI::root(true).'/templates/'.$this->template;?>/js/slidepanel/open.png" alt="open" title="open" /></a></div>
           
</div>

<div class="clearfix"></div>

<header id="header">

	<!-- Top header bar -->
	<div id="topHeader">
    
	<div class="wrapper">
         
        <div class="top_nav">
        <div class="container">
                
        <div class="right">
            
            <?php echo $doc->getBuffer('modules', 'top_nav', array('style' => 'none')); ?>
            
        </div><!-- end right social links -->
        
        </div>
        </div>
            
 	</div>
    
	</div><!-- end top navigation -->
	
    
	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="logo"><?php echo $logo;?></div>
		
	<!-- Menu -->
	<div class="menu_main">
        
	<div class="navbar yamm navbar-default">
    
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
          <button type="button" > <i class="fa fa-bars"></i></button>
        </div>
      </div>
      
      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
      
        
        <?php echo $doc->getBuffer('modules', 'main_nav', array('style' => 'none')); ?>
        
        <div id="wrap">
          <?php echo $doc->getBuffer('modules', 'top_search', array('style' => 'none')); ?>
        </div>  
            
      </div>
      </div>
     </div>
     
	</div><!-- end menu -->
        
	</div>
		
	</div>
    
	</div>
    
</header>

<div class="clearfix"></div>

<?php echo $doc->getBuffer('modules', 'breadcrumbs', array('style' => 'none')); ?>

<div class="clearfix"></div>

<div class="container">

	<div class="content_fullwidth">

	<div class="error_pagenotfound">
    	
        <strong><?php echo $this->error->getCode(); ?></strong>
        <br />
    	<b><?php echo JText::_('TPL_HOXA_OOPS_TEXT');?><?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?></b>
        
        <?php echo $doc->getBuffer('modules', '404-message', array('style' => 'none')); ?>
        
        <div class="clearfix margin_top3"></div>
    	
        <a href="javascript:history.back()" class="but_goback"><i class="fa fa-arrow-circle-left fa-lg"></i>&nbsp; <?php echo JText::_('TPL_HOXA_GO_TO_BACK_TEXT');?></a>
        
    </div><!-- end error page notfound -->
        
</div>

</div><!-- end content area -->

<div class="clearfix margin_top7"></div>

<div class="footer_graph"></div>

<div class="clearfix"></div>

<div class="footer1">
<div class="container">
	
	<?php echo $doc->getBuffer('modules', 'footer-two', array('style' => 'footertwo')); ?>
    
    <div class="clearfix divider_dashed1"></div>

   	<?php echo $doc->getBuffer('modules', 'footer-four', array('style' => 'footerfour')); ?>
    
    
</div>
</div><!-- end footer -->

<div class="clearfix"></div>

<div class="copyright_info">
<div class="container">

	<div class="clearfix divider_dashed10"></div>
    
    <?php echo $doc->getBuffer('modules', 'footer-copyright', array('style' => 'none')); ?>
    
</div>
</div><!-- end copyright info -->


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->



</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/universal/jquery.js"></script>

<!-- style switcher -->
<!-- <script src="js/style-switcher/jquery-1.js"></script>
<script src="js/style-switcher/styleselector.js"></script> -->

<!-- animations -->
<!-- <script src="js/animations/js/animations.min.js" type="text/javascript"></script> -->


<!-- slide panel -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/slidepanel/slidepanel.js"></script>

<!-- mega menu -->
<script src="<?php echo $template_folder; ?>/js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php echo $template_folder; ?>/js/mainmenu/customeUI.js"></script> 

<!-- jquery jcarousel -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/carousel/jquery.jcarousel.min.js"></script>

<!-- scroll up -->
<script src="<?php echo $template_folder; ?>/js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- tabs -->
<script src="<?php echo $template_folder; ?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<!-- accordion -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/accordion/custom.js"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/mainmenu/modernizr.custom.75180.js"></script>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main5.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/cubeportfolio/main6.js"></script>

<!-- carousel -->
<script defer src="<?php echo $template_folder; ?>/js/carousel/jquery.flexslider.js"></script>
<script defer src="<?php echo $template_folder; ?>/js/carousel/custom.js"></script>

<!-- lightbox -->
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/lightbox/jquery.fancybox.js"></script>
<script type="text/javascript" src="<?php echo $template_folder; ?>/js/lightbox/custom.js"></script>



</body>
</html>
