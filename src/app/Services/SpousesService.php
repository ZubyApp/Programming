<?php

declare(strict_types=1);

namespace App\Services;

use App\Entity\Spouses;
use Doctrine\ORM\EntityManager;

class SpousesService
{
    public function __construct(private EntityManager $em)
    {
    }

    public function getSpouses(): array
    {
        return $this->em->createQueryBuilder()
                        ->select('i')
                        ->from(Spouses::class, 'i')
                        ->getQuery()
                        ->getArrayResult();
    }
}