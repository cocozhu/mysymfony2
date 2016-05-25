<?php
/**
 * Created by PhpStorm.
 * User: lzuo
 * Date: 25.05.2016
 * Time: 11:49
 */

// src/AppBundle/Controller/HelloController.php
namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HelloController
{
  /**
   * @Route("/hello/{firstname}/{lastname}", name="hello")
   */
  public function indexAction($firstname, $lastname, $ort="BJ")
  {
    return new Response('<html><body>Hello from '.$ort.'--'.$firstname.'.'.$lastname.'!</body></html>');
  }
}