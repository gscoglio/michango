<?php

namespace MiChango\CronsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class DefaultController extends Controller
{
    /**
     * @Route("/supers/{super}/productos")
     * @Method({"POST"})
     */
    public function productsAction(Request $request, $super)
    {
        error_log($super);
        return array('name' => $super);
    }
}
