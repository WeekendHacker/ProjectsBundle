<?php

/*
 * This file is part of the WeekendHacker\ProjectsBundle
 *
 * (c) Miguel Perez <miguel@mlpz.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WeekendHacker\ProjectsBundle\Model;

/**
 * Storage  agnostic project object
 *
 * @author Miguel Perez  <miguel@mlpz.com>
 */
class Projects
{

    /**
     *
     * @var integer
     */
    private $id;
    /**
     *
     * @var integer
     */
    private $userid;
    /**
     *
     * @var string
     */
    private $title;
    /**
     *
     * @var string
     */
    private $slug;
    /**
     *
     * @var string
     */
    private $description;
    /**
     *
     * @var string
     */
    private $need;
    /**
     *
     * @var array
     */
    private $skillsneeded;
    /**
     *
     * @var string
     */
    private $giveback;
    /**
     *
     * @var array
     */
    private $helpers;
    /**
     *
     * @var boolean
     */
    private $active;
    /**
     *
     * @var boolean
     */
    private $helped;
    /**
     *
     * @var string
     */
    private $type;

    /**
     * Get project id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get  project author id
     * @return integer
     */
    public function getUserId()
    {
        return $this->userid;
    }

    /**
     * Get project title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get project slug
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Get project description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get what is needed for the project
     * @return string
     */
    public function getNeed()
    {
        return $this->need;
    }

    /**
     * Get skills needed for project
     * @return array
     */
    public function getSkillsNeeded()
    {
        return $this->skillsneeded;
    }

    /**
     * Get give back for project
     * @return string
     */
    public function getGiveBack()
    {
        return $this->giveback;
    }

    /**
     * Get project helpers
     * @return array
     */
    public function getHelpers()
    {
        return $this->helpers;
    }

    /**
     * Get if project is active or not
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Get if project found helped
     * @return boolean
     */
    public function gethelped()
    {
        return $this->helped;
    }

    /**
     * Get the type of project
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set project author id
     * @param integer $userid
     */
    public function setUserId($userid)
    {
        $this->userid = $userid;
    }

    /**
     * Set project title
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Set project slug
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * Set project description
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Set project need
     * @param string $need
     */
    public function setNeed($need)
    {
        $this->need = $need;
    }

    /**
     * Set project skill needed
     * @param array $skillsneeded
     */
    public function setSkillsNeeded($skillsneeded)
    {
        $this->skillsneeded = $skillsneeded;
    }

    /**
     * Set project give back
     * @param string $giveback
     */
    public function setGiveBack($giveback)
    {
        $this->giveback = $giveback;
    }

    /**
     * Set project helper
     * @param array $helpers
     */
    public function setHelpers($helpers)
    {
        $this->helpers = $helpers;
    }

    /**
     * Set if project if active or not
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
    /**
     *Set if  project author found help
     * @param boolean $helped
     */
    public function setHelped($helped)
    {
        $this->helped = $helped;
    }
    public function setType($type)
    {
        $this->type = $type;
    }
}