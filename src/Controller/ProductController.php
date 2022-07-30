<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Exception;
use PHPUnit\Util\Json;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ProductController extends AbstractController
{
    private ProductRepository $productRepository;
    public function __construct(ProductRepository  $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @Route("/product", name="app_addProduct",methods={"Post"})
     * @throws Exception
     */
    public function productAdd(Request $request): JsonResponse
    {
        $request = $request->toArray();
        $product = new Product();
        $date = new \DateTime('@'.strtotime('now'));
        $product
            ->setProductName($request['productName'])
            ->setProductContent($request['productContent'])
            ->setProductPiece($request['productPiece'])
            ->setProductPrice($request['productPrice'])
            ->setProductCreatedAt($date)
            ;

        $data = $this->productRepository->add($product,true);

        return new JsonResponse($data);

    }

    /**
     * @Route("/product", name="app_showProduct",methods={"Get"})
     */
    public function productShow(SerializerInterface $serializer): JsonResponse
    {
        $products = $this->productRepository->findAll();

        $datas = $serializer->serialize($products, 'json');

        return new  JsonResponse($datas, 200, [], true);
    }

    /**
     * @Route("/product/{id}", name="app_findProduct",methods={"Get"})
     */
    public function productFind(int $id,SerializerInterface $serializer): JsonResponse
    {
        $product = $this->productRepository->find($id);

        $data = $serializer->serialize($product, 'json');

        return new  JsonResponse($data, 200, [], true);
    }

    /**
     * @Route("/product/{id}", name="app_updateProduct",methods={"PUT"})
     */
    public function productUpdate(int $id,Request $request): JsonResponse
    {
        $product = new Product();
        $request=$request->toArray();

        $product = $this->productRepository->find($id);

        if (!$product){
            return new JsonResponse('Ürün Bulunamadı !');
        }

        $date = new \DateTime('@'.strtotime('now'));
        $product
            ->setProductName($request['productName'])
            ->setProductContent($request['productContent'])
            ->setProductPiece($request['productPiece'])
            ->setProductPrice($request['productPrice'])
            ->setProductCreatedAt($date)
        ;
        $data=$this->productRepository->update($product,true);

        return new JsonResponse($data);
    }

    /**
     * @Route("/product/{id}", name="app_deleteProduct",methods={"DELETE"})
     */
    public function productDelete(int $id): JsonResponse
    {
        $product = $this->productRepository->find($id);

        if(!$product){
            return  new JsonResponse('Ürün Bulunamadı ! ');
        }

        $data = $this->productRepository->remove($product,true);

        return new JsonResponse($data);

    }

}
