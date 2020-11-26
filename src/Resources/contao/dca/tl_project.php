<?php

/**
 * * This file is part of vnkomm/vnk_project.
 *
 * (c) 2020 vn kommunikation.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package    vnk_project
 * @author     Anton Spengler
 * @copyright  2020 vnkommunikation
 * @license    LICENSE MIT
 * @filesource
 */


/*
 * Palettes
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addProjectImage';

$GLOBALS['TL_DCA']['tl_content']['palettes']['project'] =
    '{type_legend},type,headline;'
    . '{text_legend},project_name,project_vendor,project_url,project_description;'
    . '{image_legend},addProjectImage;'
    . '{template_legend:hide},customTpl;'
    . '{protected_legend:hide},protected;'
    . '{expert_legend:hide},guests,cssID,space;'
    . '{invisible_legend:hide},invisible,start,stop';


/*
 * Subpalettes
 */
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['addProjectImage'] = 'singleSRC,size,alt,imageTitle,caption';


/*
 * Fields
 */

// name
$GLOBALS['TL_DCA']['tl_content']['fields']['project_name'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['project_name'],
    'exclude'   => true,
    'search'    => true,
    'flag'      => 1,
    'inputType' => 'text',
    'eval'      => [
        'mandatory' => true,
        'maxlength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// position
$GLOBALS['TL_DCA']['tl_content']['fields']['project_vendor'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['project_vendor'],
    'exclude'   => true,
    'search'    => true,
    'flag'      => 1,
    'inputType' => 'text',
    'eval'      => [
        'maxlength' => 255,
        'tl_class'  => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// position
$GLOBALS['TL_DCA']['tl_content']['fields']['project_url'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['project_url'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'text',
    'eval'      => [
        'maxlength'      => 255,
        'rgxp'           => 'url',
        'decodeEntities' => true,
        'tl_class'       => 'w50'
    ],
    'sql'       => "varchar(255) NOT NULL default ''"
];

// description
$GLOBALS['TL_DCA']['tl_content']['fields']['project_description'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['project_description'],
    'exclude'   => true,
    'search'    => true,
    'inputType' => 'textarea',
    'eval'      => [
        'rte'      => 'tinyMCE',
        'tl_class' => 'clr'
    ],
    'sql'       => 'mediumtext NULL'
];

$GLOBALS['TL_DCA']['tl_content']['fields']['addProjectImage'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addProjectImage'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => [
        'submitOnChange' => true
    ],
    'sql'       => "char(1) NOT NULL default ''"
];