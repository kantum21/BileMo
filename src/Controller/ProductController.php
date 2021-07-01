<?php

namespace App\Controller;

use App\Entity\Product;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    public function list()
    {

    }

    /**
     * @Route("/product/{id}", name="product_show")
     * @param SerializerInterface $serializer
     * @param Product $product
     * @return Response
     */
    public function show(SerializerInterface $serializer, Product $product)
    {
        $data = $serializer->serialize($product, 'json');
        $response = new Response($data);
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }
}
