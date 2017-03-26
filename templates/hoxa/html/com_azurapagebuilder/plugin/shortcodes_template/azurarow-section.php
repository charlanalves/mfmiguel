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

$classes = "azp_pagesection";

$animationData = '';
if($animationArgs['animation'] == '1'){
	$classes .= ' animate-in';
	$animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
}

if(!empty($secclass)){
	$classes .= ' '.$secclass;
}

$classes = 'class="'.$classes.'"';
 
if(!empty($id)){
	$id = 'id="'.$id.'"';
}
?>
<div <?php echo $id . ' ' .$classes.' '.$rowstyle.' '.$animationData;?>>
	
	<?php if($isfullwidth === '1'):?>
	<div class="azp_container-fluid">
	<?php else:?>
	<div class="azp_container">
	<?php endif;?>

		<?php if(!empty($content)) :?>
			<?php echo ElementParser::do_shortcode( $content );?>
		<?php endif;?>


		<div class="azp_row<?php if(!empty($class)) echo ' '.$class;?>">
		<?php if(count($rowColumnsArray)): 
		foreach ($rowColumnsArray as $key => $col) : ?>
			<?php $colClass = 'azp_col';
			$colAniData = '';
			if($col['animation'] === '1'){
				$colClass .= ' animate-in';
				$colAniData = 'data-anim-type="'.$col['animationtype'].'" data-anim-delay="'.$col['animationdelay'].'"';
				//$colAniData = ' data-wow-delay="'.$col['animationdelay'].'"';	
				// if(!empty($col['animationduration'])){
				// 	$colAniData .= ' data-wow-duration="'.$col['animationduration'].'"';
				// }
			}
			if(empty($col['columnwidthclass'])){
				$colClass .= ' azp_col-sm-12';
			}else{
				$colClass .=' '.str_replace("col-md-", "azp_col-sm-", $col['columnwidthclass']);
			}
			// Responsive text
			if(!empty($col['responsivetext'])){
				$colClass .=' '.$col['responsivetext'];
			}

			if(!empty($col['class'])){
				$colClass .=' '.$col['class'];
			}
			$colID = '';
			if(!empty($col['id'])){
				$colID .= 'id="'.$col['id'].'"';
			}
			$colClass = 'class="'.$colClass.'"';
			?>
			<div <?php echo $colID . ' ' .$colClass.' '.$col['columnstyle'].' '.$colAniData;?>>
				<?php if(!empty($col['wrapclass'])){

					echo '<div class="'.$col['wrapclass'].'">'.$col['content'].'</div>';

				}else{
					echo $col['content'];
				}?>
			</div>
		<?php endforeach; endif;?>
		</div>

	<?php //if($layoutwidth === '1'|| $layoutwidth === '2'):?>
	</div>
	<?php //endif;?>
</div>
<div class="clearfix"></div>