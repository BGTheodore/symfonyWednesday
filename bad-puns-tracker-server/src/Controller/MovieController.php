<?php

namespace App\Controller;

//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


class MovieController extends ApiController
{
    /**
    * @Route("/movies")
    */
    public function moviesAction()
    {
        return $this->respond([
            [
                'title' => 'The Princess Bride',
                'count' => 0
            ]
        ]);
    }
}
