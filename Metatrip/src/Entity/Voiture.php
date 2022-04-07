<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voiture
 *
 * @ORM\Table(name="voiture", indexes={@ORM\Index(name="Idvoit", columns={"Idvoit"})})
 * @ORM\Entity
 */
class Voiture
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idvoit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvoit;

    /**
     * @var string
     *
     * @ORM\Column(name="Matricule", type="string", length=50, nullable=false)
     */
    private $matricule;

    /**
     * @var int
     *
     * @ORM\Column(name="Puissance_fiscalle", type="integer", nullable=false)
     */
    private $puissanceFiscalle;

    /**
     * @var string
     *
     * @ORM\Column(name="Image_v", type="string", length=50, nullable=false)
     */
    private $imageV;

    /**
     * @var string
     *
     * @ORM\Column(name="Modele", type="string", length=20, nullable=false)
     */
    private $modele;


}
