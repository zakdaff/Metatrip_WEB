<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VoyageOrganise
 *
 * @ORM\Table(name="voyage_organise", indexes={@ORM\Index(name="FK_vo", columns={"Idv"})})
 * @ORM\Entity
 */
class VoyageOrganise
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idvo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvo;

    /**
     * @var float
     *
     * @ORM\Column(name="Prix_billet", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixBillet;

    /**
     * @var string
     *
     * @ORM\Column(name="Airline", type="string", length=20, nullable=false)
     */
    private $airline;

    /**
     * @var int
     *
     * @ORM\Column(name="Nb_nuitees", type="integer", nullable=false)
     */
    private $nbNuitees;

    /**
     * @var string
     *
     * @ORM\Column(name="etatVoyage", type="string", length=0, nullable=false)
     */
    private $etatvoyage;

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
