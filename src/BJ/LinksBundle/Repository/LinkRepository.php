<?php

namespace BJ\LinksBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * LinkRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class LinkRepository extends EntityRepository
{
    public function findLatest()
    {
        return $this->latestPublicLinksQuery()
            ->setMaxResults(5)
            ->getQuery()
            ->getResult();
    }

    public function findByTag($name)
    {
        return $this->latestPublicLinksQuery()
            ->join('l.tags', 't')
            ->andWhere('t.name = :name')
                ->setParameter('name', $name)
            ->join('l.tags', 'tmp')
            ->addSelect('tmp')
            ->getQuery()
            ->getResult();
    }

    public function getLinksBySearch($search)
    {
        $links = [];

        $result = $this->createQueryBuilder('l')
            ->addSelect("MATCH_AGAINST (l.url, l.description, l.title, :searchterm 'IN NATURAL MODE') as score")
            ->add('where', 'MATCH_AGAINST(l.url, l.description, l.title, :searchterm) > 0.8')
            ->setParameter('searchterm', $search)
            ->orderBy('score', 'DESC')
            ->leftJoin('l.tags', 't')
            ->addSelect('t')
            ->getQuery()
            ->getResult();

        foreach ( $result as $item) {
            $links[] = $item[0];
        }

        return $links;
    }

    private function latestPublicLinksQuery()
    {
        return $this->createQueryBuilder('l')
            ->select('l')
            ->where('l.isPublic = :isPublic')
                ->setParameter('isPublic', true)
            ->orderBy('l.date', 'DESC')
            ;
    }

}
