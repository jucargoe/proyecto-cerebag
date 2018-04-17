<?php

class Ves_Themesettings_Model_System_Config_Source_Header_Position_Primary
{
    public function toOptionArray()
    {
		return array(
			array('value' => 'primLeftCol',			'label' => Mage::helper('themesettings')->__('Primary, Left Column')),
			array('value' => 'primCentralCol',		'label' => Mage::helper('themesettings')->__('Primary, Central Column')),
			array('value' => 'primRightCol',		'label' => Mage::helper('themesettings')->__('Primary, Right Column')),
        );
    }
}