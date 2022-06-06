<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\component\Routing\Annotation\Route;

class TextController
{
/**
* @Route("/text")
*/
    public function number(): Response

    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Je suis arriver le '.$number.' eme position</body></html>'
        );
    }
}