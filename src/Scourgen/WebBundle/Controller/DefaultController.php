<?php

namespace Scourgen\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
//use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Tests\Fixtures\RedirectableUrlMatcher;

/**
 * Class DefaultController
 * @Route("/")
 */


class DefaultController extends Controller
{
    /**
     * @Route("/index")
     * @Template()
     */
    public function indexAction()
    {
    //    return $this->render('ScourgenWebBundle:Default:index.html.twig');
     // $a=$this->getRequest()->get("a");

//      $page_num= $this->getRequest()->getSession()->get("b" );
     // $b= $this->getRequest()->getSession()->get(b );
       $content= "Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui"; 
      return array('content' => $content);
      
//      return new RedirectResponse("http://www.google.de");
    }
} 
