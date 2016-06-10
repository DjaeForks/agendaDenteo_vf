<?php

namespace command\commandBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('commandBundle:Default:dashboord.html.twig');
    }
}
