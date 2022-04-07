<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity
 */
class Hotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idh;

    /**
     * @var string
     *
     * @ORM\Column(name="Nom_hotel", type="string", length=20, nullable=false)
     */
    private $nomHotel;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_etoiles", type="integer", nullable=false)
     */
    private $nbEtoiles;

    /**
     * @var string
     *
     * @ORM\Column(name="Adresse", type="string", length=50, nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=40, nullable=false)
     */
    private $image;

    public function getIdh(): ?int
    {
        return $this->idh;
    }

    public function getNomHotel(): ?string
    {
        return $this->nomHotel;
    }

    public function setNomHotel(string $nomHotel): self
    {
        $this->nomHotel = $nomHotel;

        return $this;
    }

    public function getNbEtoiles(): ?int
    {
        return $this->nbEtoiles;
    }

    public function setNbEtoiles(int $nbEtoiles): self
    {
        $this->nbEtoiles = $nbEtoiles;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


}
