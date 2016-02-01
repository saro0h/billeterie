<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Type\ArticleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ArticleController extends Controller
{
    /**
     * @Template
     * @Route("/article/new", name="article_new")
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);

        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            $this->addFlash('success', 'The article has been successfully added.');

            return $this->redirectToRoute('article_new');
        }

        return array(
            'articleForm' => $form->createView()
        );
    }

    /**
     * @Route("/article/{id}", name="article_update")
     * @Template("AppBundle:Article:new.html.twig")
     */
    public function updateAction(Request $request, Article $article)
    {
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            $this->addFlash('success', 'The article has been successfully updated.');

            return $this->redirectToRoute(
                'article_update',
                array('id' => $article->getId())
            );
        }

        return array(
            'articleForm' => $form->createView()
        );
    }
}