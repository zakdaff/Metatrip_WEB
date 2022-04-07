<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationVoyage
 *
 * @ORM\Table(name="reservation_voyage", indexes={@ORM\Index(name="FK_reusr", columns={"Idu"}), @ORM\Index(name="Idrv", columns={"Idrv"}), @ORM\Index(name="FKPAY", columns={"Ref_paiement"}), @ORM\Index(name="FK_resvoy", columns={"Idv"})})
 * @ORM\Entity
 */
class ReservationVoyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idrv", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrv;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_depart", type="date", nullable=false)
     */
    private $dateDepart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_arrivee", type="date", nullable=false)
     */
    private $dateArrivee;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=20, nullable=false)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="Idu", type="integer", nullable=false)
     */
    private $idu;

    /**
     * @var int
     *
     * @ORM\Column(name="Ref_paiement", type="integer", nullable=false)
     */
    private $refPaiement = '0';

    /**
     * @var \Voyage
     *
     * @ORM\ManyToOne(targetEntity="Voyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idv", referencedColumnName="Idv")
     * })
     */
    private $idv;


}
