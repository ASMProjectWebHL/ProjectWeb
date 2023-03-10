<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="app_search")
     */
    public function SearchAction(ProductRepository $repo, Request $req): Response
    {
        $mess = $req->request->get('search');
        $product = $repo->findProduct($mess);
        return $this->render('search/index.html.twig', [
            'search' =>$product
        ]);
    }
}
