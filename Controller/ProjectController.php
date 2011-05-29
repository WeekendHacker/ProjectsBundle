<?php

/*
 * This file is part of the WeekendHacker\ProjectsBundle
 *
 * (c) Miguel Perez <miguel@mlpz.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace WeekendHacker\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Project bundle controller
 *
 * @author Miguel Perez  <miguel@mlpz.com>
 */
class ProjectController extends Controller
{

    public function allAction()
    {
        return $this->render('WeekendHackerProjectsBundle:Project:allprojects.html.twig');
    }

    public function projectAction($slug)
    {

        return $this->render('WeekendHackerProjectsBundle:Project:single.html.twig');
    }

    public function designAction()
    {
        return $this->render('WeekendHackerProjectsBundle:Project:type.html.twig');
    }

    public function codingAction()
    {
        return $this->render('WeekendHackerProjectsBundle:Project:type.html.twig');
    }

    public function addAction()
    {
        return $this->render('WeekendHackerProjectsBundle:Project:edit.html.twig');
    }

    public function editAction($id)
    {
        return $this->render('WeekendHackerProjectsBundle:Project:edit.html.twig');
    }

    public function deleteAction($id)
    {

        //$redirect = new RedirectResponse($url, 302);
        return $redirect;
    }

}
