<?php

namespace Usmba\FLRegistrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsmbaFLRegistrationBundle:Default:index.html.twig');
    }
}
