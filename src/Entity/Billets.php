<?php

namespace App\Entity;

use App\Repository\BilletsRepository;
use App\Trait\SlugTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BilletsRepository::class)]
class Billets
{
    use SlugTrait;
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'billets')]
    #[ORM\JoinColumn(nullable: false)]
    private ?TypeBillets $type_billet = null;

    #[ORM\Column]
    private ?int $prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeBillet(): ?TypeBillets
    {
        return $this->type_billet;
    }

    public function setTypeBillet(?TypeBillets $type_billet): static
    {
        $this->type_billet = $type_billet;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): static
    {
        $this->prix = $prix;

        return $this;
    }
}
