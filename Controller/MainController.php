<?php

namespace WeekendHacker\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('WeekendHackerProjectsBundle:Maint:index.html.twig');
    }
}
