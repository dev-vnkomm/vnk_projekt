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
 * @copyright  2020 vn kommunikation
 * @license    LICENSE MIT
 * @filesource
 */

namespace Vnkomm\ContaoContactBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Vnkomm\ContaoContactBundle\VnkommContaoProjectBundle;

/**
 * Contao Manager plugin.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(VnkommContaoProjectBundle::class)
                ->setLoadAfter(
                    [
                        ContaoCoreBundle::class
                    ]
                )
        ];
    }


}
