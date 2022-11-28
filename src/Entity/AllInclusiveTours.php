<?php

namespace App\Entity;

use App\Repository\AllInclusiveToursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AllInclusiveToursRepository::class)]
class AllInclusiveTours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 80)]
    private ?string $Hotel = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $Nights = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 6, scale: 2)]
    private ?string $Price = null;

    #[ORM\Column(length: 10)]
    private ?string $Destination = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $Image = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHotel(): ?string
    {
        return $this->Hotel;
    }

    public function setHotel(string $Hotel): self
    {
        $this->Hotel = $Hotel;

        return $this;
    }

    public function getNights(): ?int
    {
        return $this->Nights;
    }

    public function setNights(int $Nights): self
    {
        $this->Nights = $Nights;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->Price;
    }

    public function setPrice(string $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getDestination(): ?string
    {
        return $this->Destination;
    }

    public function setDestination(string $Destination): self
    {
        $this->Destination = $Destination;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }
}
