<?php

namespace laul\MyTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('laulMyTestBundle:Default:index.html.twig');
    }
}
