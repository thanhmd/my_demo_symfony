<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route; // this is for short rout define
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController; //this is for using rendering template
class LuckyController extends AbstractController // remember the extends keyword
{
    /**
      * @Route("/lucky/number")
      */

    public function number()
    {
        $number = random_int(0, 100);

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }
}