<?php

namespace EvenementBundle\Repository;

use Symfony\Bridge\Doctrine\Security\User;

/**
 * RdvRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class RdvRepository extends \Doctrine\ORM\EntityRepository
{

    public function findRdvsByDate( User $user ){

            $qb = $this->createQueryBuilder('r');

            $query = $qb
                ->where('r.user = :user')
                ->andWhere('r.dateDebut ' )
                ->setParameter('bloquer' ,'0');

            $result  =$query->getQuery()->execute();
            return  $result ;


    }

}
