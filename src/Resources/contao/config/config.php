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


use vnkomm\ContaoProjectBundle\Content\Project;


/**
 * EuF Hero ContentElement
 */
array_insert(
    $GLOBALS['TL_CTE']['media'],
    4,
    [
        'project' => Project::class
    ]
);
