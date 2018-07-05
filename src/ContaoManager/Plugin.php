<?php

namespace agentur1601com\PageTitleSuffix\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use agentur1601com\PageTitleSuffix\PageTitleSuffixBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(PageTitleSuffixBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}