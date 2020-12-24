<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $template = 'home/index.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/about", name="aboutpage")
     */
    public function about()
    {
        $template = 'about/about.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/sitemap", name="sitemap_page")
     */
    public function sitemap()
    {
        $template = 'sitemap/sitemap.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/contact", name="contactpage")
     */
    public function contact()
    {
        $template = 'contact/contact.html.twig';
        $args = [];
        return $this->render($template, $args);
    }

    /**
     * @Route("/forum", name="forumpage")
     */
    public function forum()
    {
        $template = 'forum/forum.html.twig';
        $args = [];
        return $this->render($template, $args);
    }
}
