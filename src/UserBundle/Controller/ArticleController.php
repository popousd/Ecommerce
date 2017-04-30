<?php

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Article;

class ArticleController extends Controller
{
    /**
     * @Route("/article/add" , name="addArticle")
     */
    public function addAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $article = new Article();

        $article->setTitle();

        $article->setBrand();

        $article->setDescription();

        $em->persist($article);

        $em->flush();

        $id = $article.getId();

        $this->redirectToRoute('detailAction', array('id' => $id));

        return $this->render('UserBundle:Article:add.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/")
     */
    public function listAction()
    {
        $em = $this->getDoctrine()->getEntityManager();

        $articleRepo = $em->getRepository("AppBundle:Article");

        $articles = $articleRepo->findAll();

        return $this->render('UserBundle:Article:list.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * @Route("/admin/delete/{id}", name="deleteArticle")
     */
    public function deleteAction($id)
    {

        $em = $this->getDoctrine()->getEntityManager();

        $articleRepo = $em->getRepository("AppBundle:Article");

        $articles = $articleRepo->findl();

        $em->remove($articles);

        $em->flush();

        return $this->redirectToRoute("listArticle");
    }

}
