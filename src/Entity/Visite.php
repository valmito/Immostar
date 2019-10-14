<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\VisiteRepository")
 */
class Visite
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Bien", inversedBy="visites")
     */
    private $id_bien;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Visiteur", inversedBy="visites")
     */
    private $id_Visiteur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $suite;

    public function __construct()
    {
        $this->id_bien = new ArrayCollection();
        $this->id_Visiteur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Bien[]
     */
    public function getIdBien(): Collection
    {
        return $this->id_bien;
    }

    public function addIdBien(Bien $idBien): self
    {
        if (!$this->id_bien->contains($idBien)) {
            $this->id_bien[] = $idBien;
        }

        return $this;
    }

    public function removeIdBien(Bien $idBien): self
    {
        if ($this->id_bien->contains($idBien)) {
            $this->id_bien->removeElement($idBien);
        }

        return $this;
    }

    /**
     * @return Collection|Visiteur[]
     */
    public function getIdVisiteur(): Collection
    {
        return $this->id_Visiteur;
    }

    public function addIdVisiteur(Visiteur $idVisiteur): self
    {
        if (!$this->id_Visiteur->contains($idVisiteur)) {
            $this->id_Visiteur[] = $idVisiteur;
        }

        return $this;
    }

    public function removeIdVisiteur(Visiteur $idVisiteur): self
    {
        if ($this->id_Visiteur->contains($idVisiteur)) {
            $this->id_Visiteur->removeElement($idVisiteur);
        }

        return $this;
    }

    public function getSuite(): ?string
    {
        return $this->suite;
    }

    public function setSuite(string $suite): self
    {
        $this->suite = $suite;

        return $this;
    }
}
