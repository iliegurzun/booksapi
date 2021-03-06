<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * BookRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BookRepository extends EntityRepository
{
    /**
     * Searches all matching books
     * @param array $params
     * @return array
     */
    public function searchByParameters($params = array())
    {
        $qb = $this->createQueryBuilder('b');
        $qb
            ->select('b as book, MIN(r.rating) as min_rating')
            ->leftJoin('b.ratings', 'r');
        if (!empty($params['isbn'])) {
            $qb->andWhere('b.isbn LIKE :isbn')
                ->setParameter('isbn', sprintf('%%%s%%', $params['isbn']));
        }
        if (!empty($params['author'])) {
            $qb->andWhere('b.author LIKE :author')
                ->setParameter('author', sprintf('%%%s%%', $params['author']));
        }
        if (!empty($params['title'])) {
            $qb->andWhere('b.title LIKE :title')
                ->setParameter('title', sprintf('%%%s%%', $params['title']));
        }
        if (!empty($params['rating'])) {
            $qb->having('min_rating = :rating')
                ->setParameter('rating', $params['rating'])
                ->groupBy('min_rating');
        }
        if (!empty($params['start_date']) && !empty($params['end_date'])) {
            $qb->andWhere('b.releaseDate BETWEEN :start_date AND :end_date')
                ->setParameter('start_date', new \DateTime($params['start_date']))
                ->setParameter('end_date', new \DateTime($params['end_date']));
        }

        return $qb->getQuery()->execute();
    }
}
