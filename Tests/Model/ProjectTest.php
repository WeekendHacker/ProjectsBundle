<?php

/*
 * This file is part of the  WeekendHacker\ProjectsBundle
 *
 * (c) Miguel Perez <miguel@mlpz.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WeekendHacker\ProjectsBundle\Test\Model;

/**
 * Test project model
 *
 * @author Miguel Perez  <miguel@mlpz.com>
 */
class ProjectTest extends \PHPUnit_Framework_TestCase
{

    public function testId()
    {
        $id = $this->getProjects();
        $this->assertNull($id->getId());

        $Id->setId(1);
        $this->assertEquals(1, $id->geId());
    }

    public function testuserID()
    {
        $userid = $this->getProjects();
        $this->assertNull($userid->getUserId());

        $userid->setUserId(1);
        $this->asserEquals(1, $userid->getUserId());
    }

    public function testTitle()
    {
        $title = $this->getProjects();
        $this->assertNull($title->getTitle());

        $title->setTitle('WH Project #1');
        $this->assertEquals('WH Project #1', $title->getTitle());
    }

    public function testSlug()
    {
        $slug = $this->getProjects();
        $this->assertNull($title->getSlug());

        $slug->setSlug('WH-Project-1');
        $this->assertEquals('WH-Project-1', $title->getSlug());
    }

    public function testDescription()
    {
        $description = $this->getProjects();
        $this->assertNull($description->getDescription());

        $text = 'I have an iPad app already coded that helps engineers keep
                     rack oftime and materials reporting in the field. It consists of a few Table Views for
                     input of what would be considered "form data" elsewhere.';
        $description->setDescription($text);
        $this->assertEquals($text, $description->getDescription());
    }

    public function testNeed()
    {
        $need = $this->getProjects();
        $this->assertNull($need->getNeed());

        $text = "I could really use the help of a designer to make the table views look better than the stock ones
            , help me create a logo and and icon for the app itself.";
        $need->setNeed($text);
        $this->assertEquals($description, $need->getNeed());
    }

    public function testSkillsNeeded()
    {
        $skillneeded = $this->getProjects();
        $this->assertNull($skillneeded->getSkillNeeded());

        $text = array('design', 'development');
        $skillneeded->setSkillNeeded($text);
        $this->assertEquals($text, $skillneeded->getSkillNeeded());
    }

    public function testGiveBack()
    {
        $giveback = $this->getProjects();
        $this->assertNull($giveback->getGiveBack());

        $text = "willing to trade programming help in return for the design help.";
        $giveback->setGiveBack($text);
        $this->assertEquals($text, $giveback->getGiveBack());
    }

    public function testHelpers()
    {
        $helpers = $this->getProjects();
        $this->assertNull($helpers->getHelpers());

        $text = array('Miguel Perez', 'Thomas Petersen');
        $helpers->setHelper($text);
        $this->assertEquals($text, $helpers->getHelpers);
    }

    public function testActive()
    {
        $active = $this->getProjects();
        $this->assertNull($active->getActive());

        $active->setActive(0);
        $this->assertEquals(0, $active->getActive());
    }

    public function testHelped()
    {
        $helped = $this->getProjects();
        $this->assertNull($helped->getHelped());

        $helped->setHelped(0);
        $this->assertEquals(0, $helped->getHelped());
    }

    public function testType()
    {
        $type = $this->getProjects();
        $this->assertNull($type->getType());

        $type->setType('coding');
        $this->assertEquals('coding', $type->getType());
    }

    protected function getProjects()
    {
        return $this->getMockForAbstractClass('WeekendHacker\ProjectsBundle\model\Projects');
    }

}