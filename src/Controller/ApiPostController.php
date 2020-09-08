<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiPostController extends AbstractController
{
    /**
     * @Route("/api/post", name="api_post_index",methods={"GET"})
     * @param $postsRepository
     * @return Response
     */
    public function index($postsRepository)
    {
        $posts =$postsRepository->findAll();
        dd($posts);

        return $this->render('', [
            'controller_name' => 'ApiPostController',
        ]);
    }
}
