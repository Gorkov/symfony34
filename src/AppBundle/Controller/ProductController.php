<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{

    /**
     * @Route("/products", name="productList")
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request)
    {
        $products = [];

        for ($i = 1; $i <= 20; $i++) {
            $products[] = rand();
        }

        return $this->render(
            '@App/product/index.html.twig',
            [
                'products' => $products,
            ]
        );
    }

}