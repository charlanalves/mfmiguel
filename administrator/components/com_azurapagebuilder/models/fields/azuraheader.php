<?php
/**
 * @package Azura Joomla Pagebuilder
 * @author Cththemes - www.cththemes.com
 * @date: 15-07-2014
 *
 * @copyright  Copyright ( C ) 2014 cththemes.com . All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');
 
jimport('joomla.form.formfield');
 
class JFormFieldAzuraHeader extends JFormField {
 
        protected $type = 'AzuraHeader';
 
        // getLabel() left out
 
        public function getInput() {
                return '<div class="width100 azura-element-block" data-typeName="AzuraHeader">
							<div class="width100 azura-element azura-element-type-azuraheader" data-typeName="AzuraHeader">

								<span class="azura-element-title"><i class="fa fa-header"></i> '.$this->element['name'].'</span>

								<div class="azura-element-tools">
									<i class="fa fa-arrow-up azura-element-tools-levelup"></i>
									<i class="fa fa-edit azura-element-tools-configs"></i>
									<i class="fa fa-copy azura-element-tools-copy"></i>
									<i class="fa fa-times azura-element-tools-remove"></i>
								</div>

							</div>

							
							<div class="azura-element-settings-saved saved" data="'.rawurlencode('{"type":"AzuraHeader","id": "0","published":"1","language":"*", "content":"","attrs":{}}').'"></div>
						</div>';
        }
}