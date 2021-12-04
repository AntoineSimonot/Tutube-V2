<?php

namespace App\Repository;

use App\Entity\Video;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Validator\Constraints\Count;
/**
 * @method Video|null find($id, $lockMode = null, $lockVersion = null)
 * @method Video|null findOneBy(array $criteria, array $orderBy = null)
 * @method Video[]    findAll()
 * @method Video[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VideoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Video::class);
    }

    // /**
    //  * @return Video[] Returns an array of Video objects
    //  */

    public function getAllViews($user_id)
    {
        return $this->createQueryBuilder('v')
            ->select('COUNT(v.id)')
            ->innerJoin('v.user', "vu")
            ->innerJoin('v.views', "vv")
            ->andWhere('vu.id = (:user_id)')
            ->setParameter('user_id', $user_id)
            ->getQuery()
            ->getSingleScalarResult()
        ;
    }

    public function getMostPopular()
    {
        return $this->createQueryBuilder('v')
            ->select('v')
            ->innerJoin('v.views', "uv")
            ->groupBy('v.id')
            ->orderBy('count(uv)', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

    public function getFollowedVideos($user_id)
    {
        return $this->createQueryBuilder('v')
            ->select('v')
            ->innerJoin("v.user", "u")
            ->innerJoin("u.follower", "f")
            ->andWhere('f.id = (:user_id)')
            ->setParameter('user_id', $user_id)
            ->getQuery()
            ->getResult()
            ;
    }

    public function getDiscovery()
    {
        return $this->createQueryBuilder('v')
            ->select('v')
            ->innerJoin('v.views', "uv")
            ->groupBy('v.id')
            ->having('count(uv) > 1')
            ->getQuery()
            ->getResult()
            ;
    }

    public function orderByDesc($param){
        return $this->createQueryBuilder('v')
            ->select('v')
            ->where('v.name LIKE :word')
            ->setParameter('word', '%'.($param).'%')
            ->orderBy('v.created_at', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

    public function orderByDescAdmin(){
        return $this->createQueryBuilder('v')
            ->select('v')
            ->orderBy('v.created_at', 'DESC')
            ->getQuery()
            ->getResult()
            ;
    }

}
