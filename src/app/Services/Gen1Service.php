<?php

declare(strict_types=1);

namespace App\Services;

use App\Entity\Generation1;
use Doctrine\ORM\EntityManager;

class Gen1Service
{
    public function __construct(private EntityManager $em)
    {
    }

    public function getGen1(): array
    {
        return $this->em->createQueryBuilder()
                        ->select('i')
                        ->from($this->generation1::class, 'i')
                        ->getQuery()
                        ->getArrayResult();
    }

    public function save(): void
    {
        $firstgen = new Generation1();
            
        
    }
}
