<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservationVoiture
 *
 * @ORM\Table(name="reservation_voiture", indexes={@ORM\Index(name="Idrvoit", columns={"Idrvoit"}), @ORM\Index(name="FK_resu", columns={"Idu"}), @ORM\Index(name="FK_resv", columns={"Idvoit"}), @ORM\Index(name="FK_CHAUFF", columns={"idch"})})
 * @ORM\Entity
 */
class ReservationVoiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idrvoit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrvoit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_rent", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixRent;

    /**
     * @var string
     *
     * @ORM\Column(name="Trajet", type="string", length=20, nullable=false)
     */
    private $trajet;

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
     * @var \Chauffeur
     *
     * @ORM\ManyToOne(targetEntity="Chauffeur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idch", referencedColumnName="idch")
     * })
     */
    private $idch;

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Idvoit", referencedColumnName="Idvoit")
     * })
     */
    private $idvoit;


}
