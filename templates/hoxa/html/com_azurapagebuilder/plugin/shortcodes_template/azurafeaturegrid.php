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

$classes = "azp_pagesection features_grid";

$animationData = '';
if($animationArgs['animation'] == '1'){
	$classes .= ' animate-in';
	$animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
}

if(!empty($class)){
	$classes .= ' '.$class;
}

$classes = 'class="'.$classes.'"';
 
if(!empty($id)){
	$id = 'id="'.$id.'"';
}
?>
<div class="clearfix"></div>
<div <?php echo $id . ' ' .$classes.' '.$featuregridstyle.' '.$animationData;?>>
	<?php if($isfullwidth === '1'):?>
	<div class="azp_container-fluid">
	<?php else:?>
	<div class="azp_container">
	<?php endif;?>
<?php if(count($featureGridItemsArray)): ?>
	
	<div id="grid-container5" class="cbp-l-grid-fullScreen two">
    
        <ul>
        <?php foreach ($featureGridItemsArray as $key => $fea) : ?>
            <li class="cbp-item">
                <a href="<?php echo $fea['link'];?>" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                        <div class="cibox">
	                        <?php if(!empty($fea['iconclass'])) :?>
					            <i class="<?php echo $fea['iconclass'];?>"></i>
					        <?php elseif(!empty($fea['image'])) :?>
					            <img src="<?php echo JURI::root(true).'/'.$fea['image'];?>" class="hoxa-img-icon" alt="<?php echo $fea['title'];?>">
					        <?php endif;?>
					        <?php if(!empty($fea['title'])) :?>
					        <h5><?php echo $fea['title'];?></h5>
					        <?php endif;?>
					        

                        </div>
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cibox act">
	                                <?php if(!empty($fea['iconclass'])) :?>
							            <i class="<?php echo $fea['iconclass'];?>"></i>
							        <?php elseif(!empty($fea['image'])) :?>
							            <img src="<?php echo JURI::root(true).'/'.$fea['image'];?>" class="hoxa-img-icon" alt="<?php echo $fea['title'];?>">
							        <?php endif;?>
							        <?php if(!empty($fea['title'])) :?>
							        <h5><?php echo $fea['title'];?></h5>
							        <?php endif;?>
	                                <?php echo $fea['content'];?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
		<?php endforeach;?>
		</ul>

	</div>
	<div class="cbp-l-loadMore-text">
        <div data-href="#" class="cbp-l-loadMore-text-link"></div>
      	</div>
<?php endif;?>
	</div>
</div>
<div class="clearfix"></div>
	
	