<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationEvent
 *
 * @ORM\Table(name="reservation_event", indexes={@ORM\Index(name="Idrev", columns={"Idrev"}), @ORM\Index(name="Fk_eve", columns={"Ide"}), @ORM\Index(name="Fk_usr", columns={"Idu"})})
 * @ORM\Entity
 */
class ReservationEvent
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idrev", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrev;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_pers", type="integer", nullable=false)
     */
    private $nbPers;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idu", referencedColumnName="Idu")
     * })
     */
    private $idu;

    /**
     * @var \Evenement
     *
     * @ORM\ManyToOne(targetEntity="Evenement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Ide", referencedColumnName="Ide")
     * })
     */
    private $ide;

    public function getIdrev(): ?int
    {
        return $this->idrev;
    }

    public function getNbPers(): ?int
    {
        return $this->nbPers;
    }

    public function setNbPers(int $nbPers): self
    {
        $this->nbPers = $nbPers;

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

    public function getIde(): ?Evenement
    {
        return $this->ide;
    }

    public function setIde(?Evenement $ide): self
    {
        $this->ide = $ide;

        return $this;
    }


}
