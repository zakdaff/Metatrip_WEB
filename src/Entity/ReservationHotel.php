<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationHotel
 *
 * @ORM\Table(name="reservation_hotel", indexes={@ORM\Index(name="Idrh", columns={"Idrh"}), @ORM\Index(name="FK_u", columns={"Idu"}), @ORM\Index(name="fk_chh", columns={"idc"})})
 * @ORM\Entity
 */
class ReservationHotel
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idrh", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrh;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_nuitees", type="integer", nullable=false)
     */
    private $nbNuitees;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_personnes", type="integer", nullable=false)
     */
    private $nbPersonnes;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var int
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     */
    private $idc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_depart", type="date", nullable=true)
     */
    private $dateDepart;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Date_arrivee", type="date", nullable=true)
     */
    private $dateArrivee;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idu", referencedColumnName="Idu")
     * })
     */
    private $idu;

    public function getIdrh(): ?int
    {
        return $this->idrh;
    }

    public function getNbNuitees(): ?int
    {
        return $this->nbNuitees;
    }

    public function setNbNuitees(int $nbNuitees): self
    {
        $this->nbNuitees = $nbNuitees;

        return $this;
    }

    public function getNbPersonnes(): ?int
    {
        return $this->nbPersonnes;
    }

    public function setNbPersonnes(int $nbPersonnes): self
    {
        $this->nbPersonnes = $nbPersonnes;

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

    public function getIdc(): ?int
    {
        return $this->idc;
    }

    public function setIdc(int $idc): self
    {
        $this->idc = $idc;

        return $this;
    }

    public function getDateDepart(): ?\DateTimeInterface
    {
        return $this->dateDepart;
    }

    public function setDateDepart(?\DateTimeInterface $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getDateArrivee(): ?\DateTimeInterface
    {
        return $this->dateArrivee;
    }

    public function setDateArrivee(?\DateTimeInterface $dateArrivee): self
    {
        $this->dateArrivee = $dateArrivee;

        return $this;
    }

    public function getIdu(): ?User
    {
        return $this->idu;
    }

    public function setIdu(?User $idu): self
    {
        $this->idu = $idu;

        return $this;
    }


}
