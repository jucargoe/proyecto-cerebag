<?php
/**
 * Venustheme
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Venustheme EULA that is bundled with
 * this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.venustheme.com/LICENSE-1.0.html
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade the extension
 * to newer versions in the future. If you wish to customize the extension
 * for your needs please refer to http://www.venustheme.com/ for more information
 *
 * @category   Ves
 * @package    Ves_Themesettings
 * @copyright  Copyright (c) 2014 Venustheme (http://www.venustheme.com/)
 * @license    http://www.venustheme.com/LICENSE-1.0.html
 */

/**
 * Ves Themesettings Extension
 *
 * @category   Ves
 * @package    Ves_Themesettings
 * @author     Venustheme Dev Team <venustheme@gmail.com>
 */
class Ves_Themesettings_Model_System_Config_Source_Category_Grid_EqualHeightType
{
	public function toOptionArray()
	{
		return array(
			array('value' => 'maximun', 'label' => Mage::helper('themesettings')->__('Maximun Height')),
			array('value' => 'minimun', 'label' => Mage::helper('themesettings')->__('Minimum Height')),
			);
	}
}