<?php 

defined('_JEXEC') or die;
$rightSidebar = false;
if($this->countModules('right-sidebar')|| $this->countModules('position-7')){
	$rightSidebar = true;
}
$leftSidebar = false;
if($this->countModules('left-sidebar')|| $this->countModules('position-8')){
	$leftSidebar = true;
}
// if(!$leftSidebar && !$rightSidebar){
// 	$fullWidthClass = 'col-lg-12';
// }elseif(($leftSidebar&&!$rightSidebar)|| (!$leftSidebar&&$rightSidebar)){
// 	$fullWidthClass = 'col-lg-9';
// }else{
// 	$fullWidthClass = 'col-lg-6';
// }
?>
<?php if($this->countModules('assign_to_menu_to_make_it_full_width')) :?>
	<?php if ($this->countModules('position-1')) : ?>
		<jdoc:include type="modules" name="position-1" style="none" />
	<?php endif;?>
	<?php if ($this->countModules('position-2')) : ?>
			<jdoc:include type="modules" name="position-2" style="none" />
	<?php endif;?>

	<jdoc:include type="modules" name="position-3" style="xhtml" />
	<jdoc:include type="message" />
	<jdoc:include type="component" />
<?php elseif($rightSidebar) :?>
	<div class="container">

		<div class="content_left">

			<?php if ($this->countModules('position-1')) : ?>
		  		<jdoc:include type="modules" name="position-1" style="none" />
			<?php endif;?>
			<?php if ($this->countModules('position-2')) : ?>
		  		<jdoc:include type="modules" name="position-2" style="none" />
			<?php endif;?>

			<jdoc:include type="modules" name="position-3" style="xhtml" />
			<jdoc:include type="message" />
			<jdoc:include type="component" />

		</div>
		<!-- end content-left -->

		<!-- right sidebar starts -->
		<div class="right_sidebar">
		
			<?php if($this->countModules('right-sidebar')) :?>
				<jdoc:include type="modules" name="right-sidebar"  style="sidebarwidgetmargintop" />
			<?php endif;?>
			<?php if($this->countModules('position-7')) :?>
				<jdoc:include type="modules" name="position-7" style="well" />
			<?php endif;?>

		</div>
		<!-- end right-sidebar -->

	</div>

	<!-- end container -->
<?php elseif($leftSidebar) :?>
	<div class="container">

		<!-- left sidebar starts -->
		<div class="left_sidebar">
		
			<?php if($this->countModules('left-sidebar')) :?>
				<jdoc:include type="modules" name="left-sidebar"  style="sidebarwidgetmargintop" />
			<?php endif;?>
			<?php if($this->countModules('position-8')) :?>
				<jdoc:include type="modules" name="position-8" style="xhtml" />
			<?php endif;?>

		</div>
		<!-- end left-sidebar -->

		<div class="content_right">

			<?php if ($this->countModules('position-1')) : ?>
		  		<jdoc:include type="modules" name="position-1" style="none" />
			<?php endif;?>
			<?php if ($this->countModules('position-2')) : ?>
		  		<jdoc:include type="modules" name="position-2" style="none" />
			<?php endif;?>

			<jdoc:include type="modules" name="position-3" style="xhtml" />
			<jdoc:include type="message" />
			<jdoc:include type="component" />

		</div>
		<!-- end content-right -->
	</div>

	<!-- end container -->
<?php else :?>
	<div class="container">
		<div class="content_fullwidth lessmar">

			<?php if ($this->countModules('position-1')) : ?>
		  		<jdoc:include type="modules" name="position-1" style="none" />
			<?php endif;?>
			<?php if ($this->countModules('position-2')) : ?>
		  		<jdoc:include type="modules" name="position-2" style="none" />
			<?php endif;?>

			<jdoc:include type="modules" name="position-3" style="xhtml" />
			<jdoc:include type="message" />
			<jdoc:include type="component" />

		</div>
	</div>
<?php endif;?>



