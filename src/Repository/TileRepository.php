<?php

/**
 * This file is part of the sfExampleComponent project.
 *
 * (c) Festim Kolgeci <festim.kolgei@pm.me>
 *
 * For complete copyright and license details, please refer
 * to the LICENSE file distributed with this source code.
 */

namespace  Feskol\Bundle\ExampleComponentBundle\Repository;


use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use  Feskol\Bundle\ExampleComponentBundle\Entity\Tile;

/**
 * @extends ServiceEntityRepository<Tile>
 */
class TileRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tile::class);
    }
}
