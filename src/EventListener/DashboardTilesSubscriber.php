<?php

/**
 * This file is part of the sfExampleComponent project.
 *
 * (c) Festim Kolgeci <festim.kolgei@pm.me>
 *
 * For complete copyright and license details, please refer
 * to the LICENSE file distributed with this source code.
 */

namespace Feskol\Bundle\ExampleComponentBundle\EventListener;

use Feskol\Bundle\ExampleComponentBundle\Entity\Tile;
use Feskol\Bundle\ExampleComponentBundle\Repository\TileRepository;
use FesKol\SfExampleContract\Event\DashboardTilesEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class DashboardTilesSubscriber implements EventSubscriberInterface
{
    public function __construct(private readonly TileRepository $tileRepository)
    {
    }

    public function onDashboardTiles(DashboardTilesEvent $event): void
    {
        // This would be the way to do it
        //$tiles = $this->tileRepository->findAll();

        // time-saving since it's an example
        $tiles = [
            (new Tile())
                ->setKey('component-tile-1')
                ->setPosition(1) // first position
                ->setTitle('Component Tile 1')
                ->setBody('This is the first component tile'),
            (new Tile())
                ->setKey('component-tile-2')
                ->setPosition(80)
                ->setTitle('Component Tile 2')
                ->setBody('This is the second component tile'),
        ];

        $dashBoardTiles = $event->getDashboardTiles();
        foreach ($tiles as $tile) {
            $dashBoardTiles->addTile($tile);
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            DashboardTilesEvent::class => 'onDashboardTiles',
        ];
    }
}
