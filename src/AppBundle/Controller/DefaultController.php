<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function homeAction()
    {
        return $this->render('AppBundle:default:home.html.twig');
    }

    /**
     * @Route("/post", name="post")
     */
    public function postAction()
    {
        return $this->render('AppBundle:default:post.html.twig');
    }

    /**
     * @Route("/posts", name="posts")
     */
    public function postsAction()
    {
        return $this->render('AppBundle:default:posts.html.twig');
    }
}
