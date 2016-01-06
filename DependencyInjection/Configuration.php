<?php

namespace Ndewez\WebHome\CalendarApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration.
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ndewez_web_home_calendar_api');

        $rootNode
            ->children()
                ->scalarNode('api_url')->defaultNull()->end()
                ->scalarNode('api_version')->defaultValue(0)->end()
            ->end();

        return $treeBuilder;
    }
}
