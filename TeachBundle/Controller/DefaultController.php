<?php

namespace Simplon\TeachBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SimplonTeachBundle:Default:index.html.twig');
    }
}
