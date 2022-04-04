<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localisationvoyage
 *
 * @ORM\Table(name="localisationvoyage", indexes={@ORM\Index(name="idv", columns={"idv"})})
 * @ORM\Entity
 */
class Localisationvoyage
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idlocalisation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlocalisation;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float", precision=10, scale=0, nullable=false)
     */
    private $longitude;

    /**
     * @var \Voyage
     *
     * @ORM\ManyToOne(targetEntity="Voyage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idv", referencedColumnName="Idv")
     * })
     */
    private $idv;


}
