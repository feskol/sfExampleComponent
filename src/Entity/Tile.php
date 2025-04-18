<?php

/**
 * This file is part of the sfExampleComponent project.
 *
 * (c) Festim Kolgeci <festim.kolgei@pm.me>
 *
 * For complete copyright and license details, please refer
 * to the LICENSE file distributed with this source code.
 */

namespace  Feskol\Bundle\ExampleComponentBundle\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use  Feskol\Bundle\ExampleComponentBundle\Repository\TileRepository;
use FesKol\SfExampleContract\Contracts\TileInterface;

#[ORM\Entity(repositoryClass: TileRepository::class)]
#[ORM\Table(name: '`tile`')]
class Tile implements TileInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(unique: true)]
    private ?string $key = null;

    #[ORM\Column]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $body = null;

    #[ORM\Column]
    private int $position = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): Tile
    {
        $this->id = $id;
        return $this;
    }

    public function getKey(): ?string
    {
        return $this->key;
    }

    public function setKey(?string $key): Tile
    {
        $this->key = $key;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): Tile
    {
        $this->title = $title;
        return $this;
    }

    public function getBody(): ?string
    {
        return $this->body;
    }

    public function setBody(?string $body): Tile
    {
        $this->body = $body;
        return $this;
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $position): Tile
    {
        $this->position = $position;
        return $this;
    }
}
