<?php

namespace App\Entity;

use App\Repository\TypeBilletsRepository;
use App\Trait\SlugTrait;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeBilletsRepository::class)]
class TypeBillets
{
    use SlugTrait;

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'typeBillets')]
    private ?Evenements $evenement = null;

    #[ORM\OneToMany(mappedBy: 'type_billet', targetEntity: Billets::class, orphanRemoval: true)]
    private Collection $billets;

    #[ORM\Column(length: 30)]
    private ?string $libelle = null;

    public function __construct()
    {
        $this->billets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvenement(): ?Evenements
    {
        return $this->evenement;
    }

    public function setEvenement(?Evenements $evenement): static
    {
        $this->evenement = $evenement;

        return $this;
    }

    /**
     * @return Collection<int, Billets>
     */
    public function getBillets(): Collection
    {
        return $this->billets;
    }

    public function addBillet(Billets $billet): static
    {
        if (!$this->billets->contains($billet)) {
            $this->billets->add($billet);
            $billet->setTypeBillet($this);
        }

        return $this;
    }

    public function removeBillet(Billets $billet): static
    {
        if ($this->billets->removeElement($billet)) {
            // set the owning side to null (unless already changed)
            if ($billet->getTypeBillet() === $this) {
                $billet->setTypeBillet(null);
            }
        }

        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }
}
