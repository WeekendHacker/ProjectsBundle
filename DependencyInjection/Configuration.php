<?php

/*
 * This file is part of the WeekendHacker\ProjectsBundle
 *
 * (c) Miguel Perez <miguel@mlpz.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WeekendHacker\ProjectsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Dependency injection configuration
 *
 * @author Miguel Perez  <miguel@mlpz.com>
 */
class Configuration implements ConfigurationInterface
{

    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('weekend_hacker_projects');

        $rootNode
                ->children()
                ->scalarNode('model')->isRequired()->cannotBeEmpty()->end()
                ->end();

        return $treeBuilder;
    }

}
