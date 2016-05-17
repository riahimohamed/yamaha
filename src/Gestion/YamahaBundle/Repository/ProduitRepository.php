<?php

namespace Gestion\YamahaBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends EntityRepository
{

    public function recherche($chaine){

        $qb = $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.reference like :chaine')
            ->orderBy('u.id')
            ->setParameter('chaine', $chaine);
        return $qb->getQuery()->getResult();
    }
}
