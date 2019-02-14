<?php

declare(strict_types=1);

/*
 * This file is part of Oveleon DeveloperBundle.
 *
 * (c) https://www.oveleon.de/
 */

namespace Oveleon\ContaoDeveloperBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Oveleon\ContaoDeveloperBundle\ContaoDeveloperBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoDeveloperBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
                ->setReplace(['developer']),
        ];
    }
}
