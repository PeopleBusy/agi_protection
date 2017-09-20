<?php

namespace AgiBundle\Repository;

/**
 * VacationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class VacationRepository extends \Doctrine\ORM\EntityRepository
{
    public function findNbVacations($etat){

        $qb = $this->createQueryBuilder('v');
        $qb->select('COUNT(v)')
            ->where('v.etat = :etat')
            ->setParameter('etat', $etat);

        $query = $qb->getQuery();

        return $query->getSingleScalarResult();

    }

    public function findVacations($etat){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.etat = :etat')
            ->setParameter('etat', $etat);

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsForCalendar($id){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.site = :id')
            ->andWhere('v.etat = 1')
            ->setParameter('id', $id);

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsBySite($id){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.site = :id')
            ->setParameter('id', $id)
            ->andWhere('v.etat = 1')
            ->orderBy('v.heureDebVac', 'ASC')
            ->addOrderBy('v.heureFinVac', 'ASC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsByAgent($id){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.agent = :id')
            ->setParameter('id', $id)
            ->andWhere('v.etat = 1')
            ->orderBy('v.heureDebVac', 'ASC')
            ->addOrderBy('v.heureFinVac', 'ASC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsBySiteAndPeriode($id, $debut, $fin){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.site = :id')
            ->setParameter('id', $id)
            ->andWhere('v.dateVacation BETWEEN :debut AND :fin')
            ->setParameter('debut', $debut)
            ->setParameter('fin', $fin)
            ->andWhere('v.etat = 1')
            ->orderBy('v.heureDebVac', 'ASC')
            ->addOrderBy('v.heureFinVac', 'ASC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsByAgentAndPeriode($id, $debut, $fin){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.agent = :id')
            ->setParameter('id', $id)
            ->andWhere('v.dateVacation BETWEEN :debut AND :fin')
            ->setParameter('debut', $debut)
            ->setParameter('fin', $fin)
            ->andWhere('v.etat = 1')
            ->orderBy('v.heureDebVac', 'ASC')
            ->addOrderBy('v.heureFinVac', 'ASC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsByAgentAndDate($id, $datevac){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.agent = :id')
            ->setParameter('id', $id)
            ->andWhere('v.dateVacation = :date')
            ->setParameter('date', $datevac)
            ->andWhere('v.etat = 1')
            ->orderBy('v.heureDebVac', 'ASC')
            ->addOrderBy('v.heureFinVac', 'ASC');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsByAgentAfterDate($id, $datedebut){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.agent = :id')
            ->setParameter('id', $id)
            ->andWhere('v.heureDebVac >= :date')
            ->setParameter('date', $datedebut)
            ->andWhere('v.etat = 1');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findVacationsByAgentBeforeDate($id, $datefin){

        $qb = $this->createQueryBuilder('v');
        $qb->select('v')
            ->where('v.agent = :id')
            ->setParameter('id', $id)
            ->andWhere('v.heureFinVac <= :date')
            ->setParameter('date', $datefin)
            ->andWhere('v.etat = 1');

        $query = $qb->getQuery();

        return $query->getResult();

    }

    public function findByDistinctAgentInVacationSite($id){

        $qb = $this->createQueryBuilder('v');
        $qb->leftJoin('AgiBundle:Agent', 'a' , 'WITH' , 'v.agent = a.id')
            ->select('a.id')->distinct(true)
            ->where('v.site = :id')
            ->setParameter('id', $id);

        $query = $qb->getQuery();

        return $query->getResult();

    }

}
