<?php

namespace App\Entity;

use App\Repository\EvenementsRepository;
use App\Trait\SlugTrait;
use DateTimeImmutable;
use Doctrine\Common\Collections\ArrayCollection;
    use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\DateTimeType;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\DateType;

#[ORM\Entity(repositoryClass: EvenementsRepository::class)]
class Evenements
{
    
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $libelle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(options : ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'evenements')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Categories $categorie = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: TypeBillets::class)]
    private Collection $typeBillets;

    #[ORM\Column]
    private ?int $places = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column]
    private ?int $prix_V = null;
    
    #[ORM\Column]
    private ?int $prix_SV = null;
    
    #[ORM\Column]
    private ?int $prix_N = null;

    #[ORM\Column(options : ['default' => 'CURRENT_TIMESTAMP'])]
    private ?\DateTimeImmutable $date_e = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: ImagesEvent::class)]
    private Collection $imagesEvents;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: Commande::class, orphanRemoval: true)]
    private Collection $commandes;

    public function __construct()
    {
        $this->typeBillets = new ArrayCollection();
        $this->created_at = new \DateTimeImmutable();
        $this->imagesEvents = new ArrayCollection();
        $this->date_e = new \DateTimeImmutable();
        $this->commandes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }
    
    public function getCategorie(): ?Categories
    {
        return $this->categorie;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getPrixV(): ?int
    {
        return $this->prix_V;
    }

    public function getPrixSV(): ?int
    {
        return $this->prix_SV;
    }
    
    public function getPrixN(): ?int
    {
        return $this->prix_N;
    }
    
    public function getDateE(): ?\DateTimeImmutable
    {
        return $this->date_e;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function setLibelle(string $libelle): static
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function setPrixV(int $prix_V): static
    {
        $this->prix_V = $prix_V;

        return $this;
    }
    public function setPrixN(int $prix_N): static
    {
        $this->prix_N = $prix_N;

        return $this;
    }

    public function setPrixSV(int $prix_SV): static
    {
        $this->prix_SV = $prix_SV;

        return $this;
    }

    public function setDateE(\DateTimeImmutable $date_e): static
    {
        $this->date_e = $date_e;

        return $this;
    }

    public function setCategorie(?Categories $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }


    /**
     * @return Collection<int, TypeBillets>
     */
    public function getTypeBillets(): Collection
    {
        return $this->typeBillets;
    }

    public function addTypeBillet(TypeBillets $typeBillet): static
    {
        if (!$this->typeBillets->contains($typeBillet)) {
            $this->typeBillets->add($typeBillet);
            $typeBillet->setEvenement($this);
        }

        return $this;
    }

    public function removeTypeBillet(TypeBillets $typeBillet): static
    {
        if ($this->typeBillets->removeElement($typeBillet)) {
            // set the owning side to null (unless already changed)
            if ($typeBillet->getEvenement() === $this) {
                $typeBillet->setEvenement(null);
            }
        }

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): static
    {
        $this->places = $places;

        return $this;
    }
    
    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, ImagesEvent>
     */
    public function getImagesEvents(): Collection
    {
        return $this->imagesEvents;
    }

    public function addImagesEvent(ImagesEvent $imagesEvent): static
    {
        if (!$this->imagesEvents->contains($imagesEvent)) {
            $this->imagesEvents->add($imagesEvent);
            $imagesEvent->setEvenement($this);
        }

        return $this;
    }

    public function removeImagesEvent(ImagesEvent $imagesEvent): static
    {
        if ($this->imagesEvents->removeElement($imagesEvent)) {
            // set the owning side to null (unless already changed)
            if ($imagesEvent->getEvenement() === $this) {
                $imagesEvent->setEvenement(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommandes(): Collection
    {
        return $this->commandes;
    }

    public function addCommande(Commande $commande): static
    {
        if (!$this->commandes->contains($commande)) {
            $this->commandes->add($commande);
            $commande->setEvenement($this);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): static
    {
        if ($this->commandes->removeElement($commande)) {
            // set the owning side to null (unless already changed)
            if ($commande->getEvenement() === $this) {
                $commande->setEvenement(null);
            }
        }

        return $this;
    }
}
