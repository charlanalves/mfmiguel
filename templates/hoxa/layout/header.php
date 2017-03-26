<?php 

defined('_JEXEC') or die;


?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="<?php echo $this->language;?>" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $this->language;?>" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $this->language;?>" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $this->language;?>" class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php echo $this->_charset;?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Standard Favicon--> 
	<link rel="shortcut icon" href="<?php echo JURI::base(true). (!empty($favicon)? '/'.$favicon : '/images/favicon/favicon.ico');?>">
	
    <?php if($useDifferentFont === '1') :?>
    <?php echo $importfont ;?>
    <?php else :?>
      	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
    <?php endif;?>

    <jdoc:include type="head" />
	<?php
	$doc->addStylesheet($template_folder.'/css/jldefault-style.css','text/css');
	
	?>

    <?php require_once dirname(__FILE__).'/header/profile/'.$templateprofile.'.php'; ?>
    <?php //require_once dirname(__FILE__).'/header/profile/profile1.php'; ?>

	<?php 
	if($overrideColor === '1'){ 
        $doc->addStylesheet($template_folder.'/css/colors/color.php?bc='.$bC,'text/css','all');
    }elseif($preset !== 'default'){
        $doc->addStylesheet($template_folder.'/css/colors/'.$preset.'.css','text/css','all');
    }

    ?>

    <?php if($useDifferentFont === '1'){
        $doc->addStyleDeclaration($fontstyle,'text/css');
    }
    ?>

    <?php
    $doc->addStylesheet($template_folder.'/css/custom.css','text/css','all');
    
    if(!empty($customStyleLinks)) {

        foreach ($customStyleLinks as $link) {
            $doc->addStylesheet($link,'text/css','all');
        }

    } ?>

    <?php 
   	if(!empty($customstylecode)) {
        echo $customstylecode;
    }
    ?>


	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script type="text/javascript" >
		baseUrl = '<?php echo JURI::root(true);?>';
		siteName = '<?php echo $sitename;?>';
		templateName = '<?php echo $this->template;?>';
	</script>

</head>

<body class="cth-site <?php //echo $bgcolor;?> lang-dir_<?php echo $this->direction;?> <?php echo $pageClassSfx;?> <?php echo $option
   	. ' view-' . $view
   	. ($layout ? ' layout-' . $layout : ' no-layout')
   	. ($task ? ' task-' . $task : ' no-task')
   	. ($itemid ? ' itemid-' . $itemid : '');
   ?>">
<?php if($layoutsite === 'boxed') :?>
<div class="wrapper_boxed">
<?php endif;?>

	<div class="site_wrapper">

	<?php require_once dirname(__FILE__).'/header/'.$templateprofile.'.php'; ?>
