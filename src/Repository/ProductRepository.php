<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\DBAL\Exception;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @param Product $entity
     * @param bool $flush
     * @return array[]
     */
    public function add(Product $entity, bool $flush = false): array
    {
        if ($flush){
            try {

                $this->getEntityManager()->persist($entity);
                $this->getEntityManager()->flush();

                return array([
                    'Product Id :'=>$entity->getId(),
                    'Product Name :'=>$entity->getProductName(),
                    'Product Content :'=>$entity->getProductContent(),
                    'Product Piece :'=>$entity->getProductPiece(),
                    'Product Price :'=>$entity->getProductPrice().' TL',
                    'Product Created :'=>$entity->getProductCreatedAt(),
                    'Status :'=>'Succes'
                ]);
            }
            catch (Exception $e){

                $response = new Response();

                return array([
                    'Status :'=>$response->getStatusCode()
                ]);
            }
        }
        return array();
    }

    /**
     * @param Product $entity
     * @param bool $flush
     * @return array|array[]
     */
    public function update(Product $entity, bool $flush = false): array
    {
        if ($flush) {
            try {

                $this->getEntityManager()->persist($entity);
                $this->getEntityManager()->flush();

                return array([
                    'Product Id :'=>$entity->getId(),
                    'Product Name :'=>$entity->getProductName(),
                    'Product Content :'=>$entity->getProductContent(),
                    'Product Piece :'=>$entity->getProductPiece(),
                    'Product Price :'=>$entity->getProductPrice().' TL',
                    'Product Created :'=>$entity->getProductCreatedAt(),
                    'Status :'=>'Update Succes'
                ]);
            }
            catch (Exception $e){

                $response = new Response();

                return array([
                    'Status :'=>$response->getStatusCode()
                ]);
            }
        }
        return array();
    }

    public function remove(Product $entity, bool $flush = false): array
    {


        if ($flush) {
            try {

                $this->getEntityManager()->remove($entity);
                $this->getEntityManager()->flush();

                return array([
                    'Product Id :'=>$entity->getId(),
                    'Product Name :'=>$entity->getProductName(),
                    'Product Content :'=>$entity->getProductContent(),
                    'Product Piece :'=>$entity->getProductPiece(),
                    'Product Price :'=>$entity->getProductPrice().' TL',
                    'Product Created :'=>$entity->getProductCreatedAt(),
                    'Status :'=>'Remove Succes'
                ]);
            }
            catch (Exception $e){

                $response = new Response();

                return array([
                    'Status :'=>$response->getStatusCode()
                ]);
            }
        }
        return array();
    }

//    /**
//     * @return Product[] Returns an array of Product objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Product
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
