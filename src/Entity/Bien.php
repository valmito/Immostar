<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BienRepository")
 */
class Bien
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbPiece;

    /**
     * @ORM\Column(type="integer")
     */
    private $nbChambre;

    /**
     * @ORM\Column(type="integer")
     */
    private $superficie;

    /**
     * @ORM\Column(type="float")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $chauffage;

    /**
     * @ORM\Column(type="integer")
     */
    private $annee;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $localisation;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $etat;
    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Visite", mappedBy="id_bien")
     */
    private $visites;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type", inversedBy="biens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_type;

    public function __construct()
    {
        $this->visites = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbPiece(): ?int
    {
        return $this->nbPiece;
    }

    public function setNbPiece(int $nb_piece): self
    {
        $this->nbPiece = $nb_piece;

        return $this;
    }

    public function getNbChambre(): ?int
    {
        return $this->nbChambre;
    }

    public function setNbChambre(int $nb_chambre): self
    {
        $this->nbChambre = $nb_chambre;

        return $this;
    }

    public function getSuperficie(): ?int
    {
        return $this->superficie;
    }

    public function setSuperficie(int $superficie): self
    {
        $this->superficie = $superficie;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getChauffage(): ?string
    {
        return $this->chauffage;
    }

    public function setChauffage(string $chauffage): self
    {
        $this->chauffage = $chauffage;

        return $this;
    }

    public function getAnnee(): ?int
    {
        return $this->annee;
    }

    public function setAnnee(int $annee): self
    {
        $this->annee = $annee;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getetat(): ?string
    {
        return $this->etat;
    }

    public function setetat(string $etat): self
    {
        $this->etat = $etat;

        return $this;
    }
    /**
     * @return Collection|Visite[]
     */
    public function getVisites(): Collection
    {
        return $this->visites;
    }

    public function addVisite(Visite $visite): self
    {
        if (!$this->visites->contains($visite)) {
            $this->visites[] = $visite;
            $visite->addIdBien($this);
        }

        return $this;
    }

    public function removeVisite(Visite $visite): self
    {
        if ($this->visites->contains($visite)) {
            $this->visites->removeElement($visite);
            $visite->removeIdBien($this);
        }

        return $this;
    }

    public function getIdType(): ?Type
    {
        return $this->id_type;
    }

    public function setIdType(?Type $id_type): self
    {
        $this->id_type = $id_type;

        return $this;
    }
}
