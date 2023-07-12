<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategoryRepository::class)]
#[ApiResource]
class Category
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $sport = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $animaux = null;

    #[ORM\OneToMany(mappedBy: 'categorie', targetEntity: Blagues::class)]
    private Collection $blagues;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $name = null;

    public function __construct()
    {
        $this->blagues = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSport(): ?string
    {
        return $this->sport;
    }

    public function setSport(?string $sport): static
    {
        $this->sport = $sport;

        return $this;
    }

    public function getAnimaux(): ?string
    {
        return $this->animaux;
    }

    public function setAnimaux(?string $animaux): static
    {
        $this->animaux = $animaux;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    /**
     * @return Collection<int, Blagues>
     */
    public function getBlagues(): Collection
    {
        return $this->blagues;
    }

    public function addBlague(Blagues $blague): static
    {
        if (!$this->blagues->contains($blague)) {
            $this->blagues->add($blague);
            $blague->setCategorie($this);
        }

        return $this;
    }

    public function removeBlague(Blagues $blague): static
    {
        if ($this->blagues->removeElement($blague)) {
            // set the owning side to null (unless already changed)
            if ($blague->getCategorie() === $this) {
                $blague->setCategorie(null);
            }
        }

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;

        return $this;
    }
}
