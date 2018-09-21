<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // this is for short rout define
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //this is for using rendering template
class DemoController extends AbstractController // remember the extends keyword
{
    /**
      * @Route("/demo/{name}")
      */

    public function number($name)
    {
        return new Response(
            '<html><body>Hello: '.$name.'</body></html>'
        );

    }

    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function list()
    {
        

        return new Response( "Blog sdjfhjsdfh");
    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{bla}", name="blog_show")
     */
    public function show($bla = null)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...

        // $url = $this->generateUrl(
        //     'blog_show',
        //     array('bla' => 'my-blog-post')
        // );

        return new Response($bla);

        //return new Response( $slug );
    }
}