<?php

/**
 * Platte manipulation;
 * Add Plattes Regular
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(
    'pageTitle,',
    'pageTitle,pageTitleSuffix,',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);

/**
 * Page Title Suffix Checkbox
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['pageTitleSuffix'] = array(
    'label'             => &$GLOBALS['TL_LANG']['tl_page']['pageTitleSuffix'],
    'inputType'         => 'checkbox',
    'default'           => 0,
    'eval'              => array('tl_class'=>'w50 m12'),
    'sql'               => "char(1) NOT NULL default ''"
);