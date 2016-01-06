<?php

namespace Ndewez\WebHome\CalendarApiBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class NdewezWebHomeCalendarApiExtension.
 */
class NdewezWebHomeCalendarApiExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        // Set url and version for real calls
        if (null !== $config['api_url']) {
            $container->getDefinition('webhome_calendar.connector')
                ->replaceArgument(1, $config['api_url'])
                ->replaceArgument(2, $config['api_version']);

            return;
        }

        // Use mock
        $container->getDefinition('webhome_calendar.client')
            ->replaceArgument(0, new Reference('webhome_calendar.connector.mock'));
    }
}
