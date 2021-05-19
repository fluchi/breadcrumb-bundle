<?php

namespace SlopeIt\BreadcrumbBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $builder = new TreeBuilder('slope_it_breadcrumb');
        $builder->getRootNode()
            ->children()
                ->scalarNode('template')->defaultValue('@AndreaSpregaBreadcrumb/breadcrumb.html.twig')->end()
            ->end();
        return $builder;
    }
}