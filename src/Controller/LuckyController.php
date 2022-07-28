<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    #[Route('/lucky/number-a')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number A: '.$number.'</body></html>'
        );
    }

    #[Route('/lucky/number-b')]
    public function numberB(): Response
    {
        $number = random_int(101, 200);

        return $this->render('base.html.twig',[
            'coucou' => $number
        ]);
    }
}
