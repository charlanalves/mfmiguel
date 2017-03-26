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

$classes = "k2itemview bnbox";

$animationData = '';
if($animationArgs['animation'] == '1'){
    $classes .= ' animate-in';
    $animationData = 'data-anim-type="'.$animationArgs['animationtype'].'" data-anim-delay="'.$animationArgs['animationdelay'].'"';
}

if(!empty($extraclass)){
	$classes .= ' '.$extraclass;
}

$classes = 'class="'.$classes.'"';
 
?>
<div <?php echo $classes.' '.$k2itemviewstyle.' '.$animationData;?>>
    <?php if($item): ?> 
        <?php if(!empty($imagesize)) :?>
            <?php if(/*$item->params->get('itemImage') && */!empty($item->{$imagesize})): ?>
            <!-- Item Image -->
            <a href="<?php echo ElementParser::getK2ItemLink($item->id,$item->alias,$item->catid,$item->category->alias);?>">
                <img class="img_left1" src="<?php echo $item->{$imagesize}; ?>" alt="<?php if(!empty($item->image_caption)) echo K2HelperUtilities::cleanHtml($item->image_caption); else echo K2HelperUtilities::cleanHtml($item->title); ?>"/>
            </a>
            <?php endif; ?>
        <?php endif;?>
        <?php 
            //echo'<pre>';var_dump($item);die;
            // if($posttype === '1'){
            //     $extraFields = array();
            //     //echo '<pre>';var_dump($this->item->extra_fields);die;
            //     if($item->extra_fields){
            //       if(!is_array($item->extra_fields)){
            //         $extraFields = json_decode($item->extra_fields);
            //       }else{
            //         $extraFields = $item->extra_fields;
            //       }
            //     }
            //     //$extraFields = json_decode($this->item->extra_fields);
            //     if(!empty($extraFields)){
            //       $postType = $extraFields[0]->value;
            //       $postLink = $extraFields[1]->value;
            //     }
            // }  
            //echo'<pre>';var_dump($extraFields);die;
        ?>
        <!-- <div class="post"> -->
        <?php if($showtitle === '1') :?>
            <h5><?php echo $item->title;?></h5>
            <?php endif;?>
        
        
        <!--<?php if($posttype === '1') :?>
            <?php
            switch ($postType) :
                case '1': # single photo 
                ?>
                <img class="img-responsive" width="848" src="<?php echo JURI::root(true).$postLink;?>" alt="<?php echo $item->title;?>" />
            <?php   break;
                case '2': # youtube video 
                $id = array();
                // get youtube video id from link
                preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $postLink, $id);
                //support embed link pasted at link
                if(empty($id) || !is_array($id)){
                    preg_match('/embed[\/]([^\\?\\&]+)[\\?]/', $postLink, $id);
                }
                if(!empty($id[1])) : ?>
                <div class="responsive-video" >
                    <iframe src="http://www.youtube.com/embed/<?php echo $id[1];?>" ></iframe>
                </div>
                <?php endif;?>

            <?php   break;
                case '3': # vimeo video 
                $id = array();
                // get vimeo video id from link
                preg_match('/http:\/\/vimeo.com\/(\d+)$/', $postLink, $id);

                if(count($id[1])) :?>
                <div class="responsive-video">
                    <iframe src="http://player.vimeo.com/video/<?php echo $id[1];?>?title=0&amp;byline=0" ></iframe>
                </div>
                <?php endif;?>
            <?php   break;
                case '4': # image slider 
                $car_id = uniqid('carousel');
                ?>
                <div id="<?php echo $car_id;?>" class="carousel slide" data-ride="carousel" data-interval="5000">

                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    

                    <div class="carousel-inner">
                    <?php $car_active = false;
                    foreach ($extraFields as $key => $field) :
                        if($key > 0 && trim($field->value) !='') : 
                    ?>
                            <div class="item<?php if(!$car_active) echo ' active';?>">
                                <img alt="<?php echo $item->title. '-image-'.($key+1);?>" width="848" src="<?php echo JURI::root(true).$field->value;?>" class="img-responsive">
                            </div>
                    <?php $car_active = true; endif; endforeach; ?>
                    </div>
        
                    
                    <a class="left carousel-control" href="#<?php echo $car_id;?>" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#<?php echo $car_id;?>" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div> 
            <?php   break;
                case '5': # soundcloud audio 
                $url = str_replace(":", "%3A", $postLink);?>
                <div class="responsive-video">
                    <iframe src="https://w.soundcloud.com/player/?url=<?php echo $url;?>" ></iframe>
                </div>
            <?php   break;
                default: # code... ?>

            <?php
                    break;
            endswitch; ?>
            
            <?php endif;?> -->
            

            <?php if($showcreated === '1'||$showcategory === '1'||$showcomment === '1'): ?>
            <div class="post-meta">
            <?php if($showcreated === '1') : ?>
                <?php //if($item->params->get('itemDateCreated')): ?>
                <a href="#" class="post-date"><em><?php echo JHTML::_('date', $item->created, JText::_('DATE_FORMAT_LC3')); ?></em></a> 
                <?php //endif; ?>
            <?php endif; ?>
            <?php if($showcategory === '1') : ?>
                <?php //if($item->params->get('itemCategory')): ?>
                <a href="<?php echo $item->category->link; ?>"><em><?php echo $item->category->name;?></em></a>
                <?php //endif; ?>
            <?php endif; ?>
            <?php if($showcomment === '1') : ?>
                <?php //if($item->params->get('itemCommentsAnchor') && ($item->params->get('comments') == '1') ): ?>
                
            
                        
                        <?php if($item->numOfComments > 0): ?>
                        
                        <a href="<?php echo $item->link; ?>#itemCommentsAnchor">
                            <em><?php echo $item->numOfComments; ?> <?php echo ($item->numOfComments>1) ? JText::_('K2_COMMENTS') : JText::_('K2_COMMENT'); ?></em>
                        </a>
                        <?php else: ?>
                        <a href="<?php echo $item->link; ?>#itemCommentsAnchor">
                            <em><?php echo JText::_('K2_BE_THE_FIRST_TO_COMMENT'); ?></em>
                        </a>
                        <?php endif; ?>
                <?php //endif; ?>
            <?php endif; ?>
            </div>
            <?php endif;?>

            <?php if($introtextlength !== 'hide') :?>
                <?php if(is_numeric($introtextlength)){
                    echo '<p>'.JHtml::_('string.truncate',strip_tags($item->introtext),(int)$introtextlength).'</p>';
                }else{
                    echo $item->introtext;
                }
            ?>
            <?php endif;?>
            <?php if($showfulltext === '1'){
                echo $item->fulltext;
            }?>
            <?php if($showreadmore === '1') :?>
            <br />
            <a href="<?php echo ElementParser::getK2ItemLink($item->id,$item->alias,$item->catid,$item->category->alias);?>" class="readmore_but7"><?php echo JText::_('TPL_HOXA_READ_MORE2_TEXT');?></a>
            
            <?php endif;?>
        <!-- </div> -->
                                                                                                    
    <?php endif;?>
    </div>
    


