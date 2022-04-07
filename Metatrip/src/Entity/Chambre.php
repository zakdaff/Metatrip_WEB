<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chambre
 *
 * @ORM\Table(name="chambre", indexes={@ORM\Index(name="idc", columns={"idc"}), @ORM\Index(name="idh", columns={"idh"})})
 * @ORM\Entity
 */
class Chambre
{
    /**
     * @var int
     *
     * @ORM\Column(name="idc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idc;

    /**
     * @var int
     *
     * @ORM\Column(name="numc", type="integer", nullable=false)
     */
    private $numc;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=1000, nullable=false)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=40, nullable=false)
     */
    private $etat;

    /**
     * @var float|null
     *
     * @ORM\Column(name="prixc", type="float", precision=10, scale=0, nullable=true)
     */
    private $prixc;

    /**
     * @var \Hotel
     *
     * @ORM\ManyToOne(targetEntity="Hotel")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idh", referencedColumnName="Idh")
     * })
     */
    private $idh;


}
