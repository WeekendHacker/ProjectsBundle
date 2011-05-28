<?php

/*
 * This file is part of the WeekendHacker\ProjectsBundle
 *
 * (c) Miguel Perez <miguel@mlpz.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WeekendHacker\ProjectsBundle\Test\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Test project bundle controller
 *
 * @author Miguel Perez  <miguel@mlpz.com>
 */
class ProjectControllerTest  extends WebTestCase
{

    public function testIndex()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/projects');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("Projects")')->count() > 0);
    }

    public function testProject()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/project/project-1');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("Project")')->count() > 0);
    }

    public function testDesign()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/projects/design');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("Design")')->count() > 0);
    }

    public function testCoding()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/projects/coding');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("Design")')->count() > 0);
    }

    public function testAdd()
    {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/project/new');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("add")')->count() > 0);
    }

    public function testEdit()
    {
        $client = $this->createClient();
        $crawler = $client->request('POST', '/project/new');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("add")')->count() > 0);
    }

    public function testDelete()
    {
        $client = $this->createClient();
        $crawler = $client->request('POST', '/project/project-1/delete');

        $this->assertTrue($client->getResponse()->isSuccessful());
        $this->assertTrue($crawler->filter('html:contains("delete")')->count() > 0);
    }

}