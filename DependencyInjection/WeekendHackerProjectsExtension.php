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

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Config\Definition\Processor;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Extension for project bundle
 *
 * @author Miguel Perez  <miguel@mlpz.com>
 */
class WeekendHackerProjectsExtension extends Extension
{

    protected $resources = array(
        'projects' => 'projects.xml'
    );

    public function load(array $configs, ContainerBuilder $container)
    {
        $processor = new Processor();
        $configuration = new Configuration();
        $config = $processor->processConfiguration($configuration, $configs);

        $this->loadDefaults($container);

        if (isset($config['alias'])) {
            $container->setAlias($config['alias'], 'weekend_hacker_projects');
        }

        foreach (array('model') as $attribute) {
            if (isset($config[$attribute])) {
                $container->setParameter('weekend_hacker_projects.' . $attribute, $config[$attribute]);
            }
        }
    }

    public function getXsdValidationBasePath()
    {
        return __DIR__ . '/../Resources/config/schema';
    }

    protected function loadDefaults($container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(array(__DIR__ . '/../Resources/config', __DIR__ . '/Resources/config')));

        foreach ($this->resources as $resource) {
            $loader->load($resource);
        }
    }

}