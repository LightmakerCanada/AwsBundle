<?php

namespace Lightmaker\AwsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('lightmaker_aws');

        $rootNode
            ->children()
                ->scalarNode('key')->isRequired()->end()
                ->scalarNode('secret')->isRequired()->end()
                ->scalarNode('region')->defaultValue('us-east-1')->end()
            ->end();

        return $treeBuilder;
    }
}
