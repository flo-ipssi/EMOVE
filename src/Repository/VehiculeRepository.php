<?php

namespace App\Repository;

use App\Entity\Vehicule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Vehicule|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicule|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicule[]    findAll()
 * @method Vehicule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehiculeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Vehicule::class);
    }

//    /**
//     * @return Vehicule[] Returns an array of Vehicule objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('v')
            ->andWhere('v.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('v.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */


    public function searchAction($search){
        $qb = $this->createQueryBuilder('f')
            ->where('f.modele like :search')
            ->setParameter('search', '%' . $search . '%');
        return $qb
            ->getQuery()
            ->getResult();
    }

    public function filterAction($agence, $vehicule, $km_min, $km_max, $price_max, $price_min, $color){
        if ($km_min == null)
            $km_min = 0;
        if ($km_max == null)
            $km_max = 0;
        if ($price_min == null)
            $price_min = 0;
        if ($price_max == null)
            $price_max = 0;

        if ($price_min > $price_max ) {
            $pmax = $price_min;
            $pmin = $price_max;
        }else{
            $pmax = $price_max;
            $pmin = $price_min;
        }
        if ($km_min > $km_max ) {
            $kmax = $km_min;
            $kmin = $km_max;
        }else{
            $kmax = $km_max;
            $kmin = $km_min;
        }

        $qb = $this->createQueryBuilder('f')
            ->orWhere('f.nb_km BETWEEN :kmin AND :kmax')
            ->setParameter('kmin',$kmin)
            ->setParameter('kmax',$kmax)
            ->orWhere('f.prix_achat BETWEEN :pmin AND :pmax')
            ->setParameter('pmin',$pmin)
            ->setParameter('pmax',$pmax);
        return $qb
            ->getQuery()
            ->getResult();
    }

}
