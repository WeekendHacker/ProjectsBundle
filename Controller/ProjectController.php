<?php

namespace WeekendHacker\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProjectController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeekendHackerProjectsBundle:Project:index.html.twig');
    }
}
