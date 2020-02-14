<?php

namespace VFrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return
     $this->render('@VFront/Default/index.html.twig');
    }
    public function cartAction()
    {
        return
            $this->render('@VFront/Default/cart.html.twig');
    }
    public function commAction()
    {
        return
            $this->render('@VFront/Default/checkout.html.twig');
    }
    public function livrAction()
    {
        return
            $this->render('@VFront/Default/confirmation.html.twig');
    }
}
