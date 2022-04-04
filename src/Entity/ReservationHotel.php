<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationHotel
 *
 * @ORM\Table(name="reservation_hotel", indexes={@ORM\Index(name="FK_u", columns={"Idu"}), @ORM\Index(name="fk_chh", columns={"idc"}), @ORM\Index(name="Idrh", columns={"Idrh"})})
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


}
