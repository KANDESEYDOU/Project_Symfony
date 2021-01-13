<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Article;

class BlogController extends AbstractController
{





    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {

        return $this->render('blog/index.html.twig', [
            'controller_name' => 'COMPTASERVICE',
        ]);
    }


     /**
     * @Route("/", name="home")
     */

    public function home(): Response
    {
    	return $this->render('blog/home.html.twig');
    }


    /**
     * @Route("/blog/12", name="blog_show")
     */

    public function show(){
    	return $this->render('blog/show.html.twig');
    }

    /**
     * @Route("/blog/13", name="blog_show1")
     */

    public function show1(){
    	return $this->render('blog/show1.html.twig');
    }

    /**
     * @Route("/blog/14", name="blog_show2")
     */

    public function show2(){
    	return $this->render('blog/show2.html.twig');
    }

    /**
     * @Route("/blog/15", name="blog_show3")
     */

    public function show3(){
        return $this->render('blog/show3.html.twig');
    }

       /**
     * @Route("/blog/16", name="blog_show4")
     */

    public function show4(){


        return $this->render('blog/show4.html.twig');
        
    }


}
