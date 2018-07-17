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

    public function filterAction($agence, $vehicule, $km_min, $km_max, $price_max, $price_min, $color)
    {

        $qb = $this->createQueryBuilder('f')
            ->where('f.dispoVehicule = 1');
        if (isset($agence) && $agence != '' && $agence != 0) {
            foreach ($agence as $item){
                $qb->orwhere('f.agence = :agence')
                    ->setParameter('agence',intval($item));
            }
        }
        if (isset($vehicule) && $vehicule != '' && $vehicule != 0) {
            foreach ($vehicule as $item){
                $qb->orwhere('f.typeVehicule = :vehicule')
                    ->setParameter('vehicule',intval($item));
            }
        }
        if (isset($color) && $color != '' && $color != 0){
            foreach ($color as $key) {
                $qb->andwhere('f.couleur like :color')
                    ->setParameter('color','%' . $key . '%');
            }
        }
            if ($km_min != '')
                $qb->andwhere('f.nbKm > :kmin')
                    ->setParameter('kmin',$km_min);
            if ($km_max != '' && $km_max != 0)
                $qb->andwhere('f.nbKm < :kmax')
                    ->setParameter('kmax',$km_max);
            if ($price_min != '')
                $qb->andwhere('f.prixAchat > :pmin')
                    ->setParameter('pmin',$price_min);
            if ($price_max != '' && $price_max != 0)
                $qb->andwhere('f.prixAchat < :pmax')
                    ->setParameter('pmax',$price_max);

        return $qb
            ->getQuery()
            ->getResult();
    }

}
